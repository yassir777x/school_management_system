<?php
// session_start() ;
// if (isset($_SESSION['user_id']) && $_SESSION['role'] === 'admin') {
//     header("Location: ./admin/dashboard.php");
//     exit;
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <!--  -->
</head>

<body>
    <div class="container">
        <div class="login_img">
            <h1 class="project_title">
                SCHOOL MANAGEMENT <br> SYSTEM
            </h1>
            <p class="project_description">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic veritatis rerum deleniti accusantium
                recusandae asperiores natus possimus? Officiis, facere cumque!
            </p>
        </div>
        <div class="registration_side">
            <!--
                * =========             ========
                    ====== lOG IN FORM ======
                  ========              ========
            -->
            <div class="login_form">
                <form class="form" action="index.php?controller=auth&action=login" method="POST">
                    <h1 class="login_title">Log in</h1>
                    <div class="input_box">
                        <label for="username_email">Username Or Email</label>
                        <input type="text" class="input" id="username_email" name="username_email"
                            value="<?= htmlspecialchars($old['username_email'] ?? '')  ?>"
                            placeholder="Enter Username Or Email">
                        <div class="error"><?= $errors['username_email_error'] ?? ''  ?></div>
                    </div>
                    <div class="input_box">
                        <label for="login_password">Password</label>
                        <input type="password" class="input" id="login_password" name="login_password"
                            value="<?= htmlspecialchars($old['password'] ?? '') ?>" placeholder="Enter Password">
                        <div class="error"><?= $errors['password_error'] ?? ''  ?></div>
                    </div>
                    <div class="input_box">
                        <select class="select" id="role" name="role">
                            <option value="none" selected disabled>Select Your Role</option>
                            <option value="Admin">Admin</option>
                            <option value="Teacher">Teacher</option>
                            <option value="Student">Student</option>
                        </select>
                        <div class="error"><?= $errors['role_error'] ?? ''  ?></div>
                    </div>
                    <button type="submit" class="submit_btn">Submit</button>
                    <div class="signup_link">
                        <span>Sign up if you are admin</span>
                        <!-- <input type="reset" value="sign up"> -->
                        <button type="reset" class="sign_up">sign up</button>
                    </div>
                </form>
            </div>


            <!--
                * =========             ========
                    ====== SIGN UP FORM ======
                  ========              ========
            -->


            <div class="signup_form">
                <form class="form" action="index.php?controller=auth&action=signup" method="POST">
                    <h1 class="login_title">Sign up</h1>
                    <div class="input_box">
                        <label for="username">Username</label>
                        <input type="text" class="input" id="username" name="username" placeholder="Enter your username"
                            value="<?= htmlspecialchars($old['username'] ?? '') ?>">
                        <div class="error"><?= $errors['username_error'] ?? ''  ?></div>
                    </div>
                    <div class="input_box">
                        <label for="email">Email</label>
                        <input type="email" class="input" id="email" name="email" placeholder="Enter your email"
                            value="<?= htmlspecialchars($old['email'] ?? '') ?>">
                        <div class="error"><?= $errors['email_error'] ?? ''  ?></div>
                    </div>
                    <div class="input_box">
                        <label for="confirm_email">Confirm Email</label>
                        <input type="email" class="input" id="confirm_email" name="confirm_email"
                            placeholder="confirm your email"
                            value="<?= htmlspecialchars($old['confirm_email'] ?? '') ?>">
                        <div class="error"><?= $errors['confirm_email_error'] ?? ''  ?></div>
                    </div>
                    <div class="input_box">
                        <label for="password">Password</label>
                        <input type="password" class="input" id="password" name="password"
                            placeholder="Enter your password"
                            value="<?= htmlspecialchars($old['su_password'] ?? '') ?>">
                        <div class="error"><?= $errors['su_password_error'] ?? ''  ?></div>
                    </div>

                    <button type="submit" class="submit_btn">Submit</button>
                    <div class="login_link">
                        <span> Log in if you have account </span>
                        <!-- <input type="reset" value="log in"> -->
                        <button type="reset" class="login">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="/assets/js/script.js"></script>
</body>

</html>