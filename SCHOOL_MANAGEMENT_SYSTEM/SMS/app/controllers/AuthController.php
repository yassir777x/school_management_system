<?php
require_once "../core/Session.php";
Session::init();

class AuthController
{
    public function show()
    {
        $errors = Session::get('errors') ?? '';
        $old = Session::get('old') ??  '';
        Session::remove("errors");
        Session::remove("old");
        unset($_SESSION['old']);
        require "../app/views/auth/Auth.php";
    }
    
    public function login()
    {
        $errors = [];
        $old = [];

        $username_email = htmlspecialchars($_POST['username_email'] ?? '');
        $password = htmlspecialchars($_POST['login_password'] ?? '');
        $role = $_POST['role'] ?? '';


        $valid_roles = ['Admin', 'Teacher', 'Student'];

        if (empty($username_email)) {
            $errors['username_email_error'] = 'Username or email is required.';
        }

        if (empty($password)) {
            $errors['password_error'] = 'Password is required.';
        }

        if (empty($role) || !in_array($role, $valid_roles)) {
            $errors['role_error'] = 'Please select a valid role.';
        }

        $old['username_email'] = $username_email;
        $old['password'] = $password;
        $old['role'] = $role;

        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['old'] = $old;
            header("Location: index.php?controller=auth&action=show");
            exit;
        }
    }

    public function sanitize($field_name)
    {
        return htmlspecialchars($_POST[$field_name] ?? '');
    }

    public function signup()
    {
        $errors = [];
        $old = [];

        $username = $this->sanitize('username');
        $email = $this->sanitize('email');
        $confirm_email = $this->sanitize("confirm_email");
        $password = $this->sanitize("password");

        // ? ====== VALIDATE USERNAME ======== ?//
        if (empty($username)) {
            $errors['username_error'] = 'username required';
        } else if (!preg_match('/^[a-zA-Z][a-zA-Z0-9_]{3,19}$/', $username)) {
            $errors['username_error'] = 'Invalid username. Use 4-20 letters, start with a letter, only _ allowed.';
        }
        $old['username'] = $username;

        // ? ====== VALIDATE EMAIL ======== ?//
        if (empty($email)) {
            $errors['email_error'] = 'email required';
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email_error'] = 'email pattern example@ex.ex';
        }
        $old['email'] = $email;

        // ? ====== VALIDATE EMAIL CONFIRMATION ======== ?// 
        if (empty($confirm_email)) {
            $errors['confirm_email_error'] = 'confirm your email';
        } else if ($confirm_email !== $email) {
            $errors['confirm_email_error'] = 'emails do not match';
        }
        $old['confirm_email'] = $confirm_email;

        // ? ====== VALIDATE PASSWORD ======== ?//
        if (empty($password)) {
            $errors['su_password_error'] = 'password required';
        } else if (
            !preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@$!%*?&])[A-Za-z0-9@$!%*?&]{8,}$/', $password)
        ) {
            $errors['su_password_error'] = 'Password must be at least 8 characters and include a lowercase, uppercase, number, and special character.';
        }
        $old['su_password'] = $password;

        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['old'] = $old;
            header("Location: index.php?controller=auth&action=show");
            exit;
        } else {
            header("Location: index.php?controller=auth&action=dashboard");
            exit;
        }
    }
}