<?php
session_start();
$errors = [];
$old = [];


// ! SANITIZE USER INPUTS // 
function sanitize($field_name)
{
    return htmlspecialchars($_POST[$field_name] ?? '');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = sanitize('username');
    $email = sanitize('email');
    $confirm_email = sanitize("confirm_email");
    $password = sanitize("password");


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


    // ? ============================== ? //
    // ! VERIFY INPUTS IN DATABASE ! //
    // ? ============================ ? //

    $errors_except_password = $errors;
    unset($errors_except_password['su_password_error']);
    if (empty($errors_except_password)) {
        require "connection.php"; // ! PUT connection.php here
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username OR user_email = :email");
        $stmt->execute(["username" => $username, "email" => $email]);
        $results = $stmt->fetchAll();
        echo "<pre>";
        print_r($results);
        echo "</pre>";
        $email_exist = false;
        $username_exist = false;
        foreach ($results as $row) {
            if ($row['user_email'] == $email) $email_exist = true;
            if ($row['username'] == $username) $username_exist = true;
        }
        if ($email_exist) {
            $errors['email_error'] = 'email already exist';
        }
        if ($username_exist) {
            $errors['username_error'] = 'username already exist';
        }

        if (empty($errors)) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $insertIntoUsers = $pdo->prepare("INSERT INTO users (id_user , username , user_email , user_password , user_type) VALUES (null , ? , ? , ? , 'admin')");
            $insertIntoUsers->execute([$username, $email, $hashed_password]);
            $user_id = $pdo->lastInsertId();

            $insertIntoAdmin = $pdo->prepare("INSERT INTO admin (id_user) VALUE (?)");
            $insertIntoAdmin->execute([$user_id]);
            $school_id = $pdo->lastInsertId();

            // stock current user id to session 
            $_SESSION['user_id'] = $user_id;
            $_SESSION['school_id'] = $school_id;
            $_SESSION['role'] = 'admin';
            header("Location: ./admin/dashboard.php");
            exit;
        }
    }
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['old'] = $old;
        header("Location: index.php");
        exit;
    }
}
