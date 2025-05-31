<?php
session_start();
$errors = [];
$old = [];

require "connection.php";


$username_email = htmlspecialchars($_POST['username_email'] ?? '');
$password = htmlspecialchars($_POST['login_password'] ?? '');
$role = $_POST['role'] ?? '';


    if (empty($username_email)) {
        $errors['username_email_error'] = 'username or email required';
    }
    $old['username_email'] = $username_email;

    if (empty($password)) {
        $errors['password_error'] = 'password required';
    }
    $old['password'] = $password;

    $valid_role = ['Admin', "Teacher", "Student"];

    if (empty($role) || !in_array($role, $valid_role)) {
        $errors['role_error'] = 'Please select a role';
    }
// $old['role'] = $role;


if (empty($errors)) {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE (username = ? OR  user_email = ?) AND user_type = ?");
    $stmt->execute([$username_email, $username_email, $role]);
    $user = $stmt->fetch();



    if (!$user) {
        $errors['username_email_error'] = 'username or email doesn\'t exist';
    } else {
        if (password_verify($password, $user['user_password'])) {
            // * GET SCHOOL ID 

            // $stmt2 = $pdo->prepare("SELECT s.id_school FROM users u INNER JOIN admin a ON u.id_user == ");


            $_SESSION['user_id'] = $user['id_user'];
            $_SESSION['role'] = $user['user_type'];
            $_SESSION['username'] = $user['username'];
        } else {
            $errors['password_error'] = 'Password incoreccet';
        }
    }
}

if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    $_SESSION['old'] = $old;
    header("Location: index.php");
    exit;
} else {
    if ($_SESSION['role'] == 'admin') {
        header("Location: ./admin/dashboard.php?just_logged_in=true");
        exit;
    } else if ($_SESSION['role'] == 'teacher') {
        header("Location: ./teacher/teacher_dashboard.php");
        exit;
    } else if ($_SESSION['role'] == 'student') {
        header("Location: ./student/student_dashboard.php");
        exit;
    }
}