<?php

session_start();

if(isset($_SESSION['admin'])){
    header('Location: ../index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Hotel Dashboard Template</title>
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png?">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/feathericon.min.css">
    <link rel="stylesheet" href="../assets/plugins/morris/morris.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container" style="max-width: 320px;">
                <div class="login-right-wrap shadow p-4 rounded">
                    <h1 class="text-center">Login</h1>
                    <p class="account-subtitle">to Access Dashboard</p>

                    <?php require_once('../components/alert.php'); ?>

                    <form method="POST" action="Login.class.php">
                        <div class="form-group">
                            <input class="form-control" type="email" placeholder="Email" name="email"> </div>
                        <div class="form-group">
                            <input class="form-control" type="password" placeholder="Password" name="password"> </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit" name="login">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>