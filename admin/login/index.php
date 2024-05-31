<?php 
session_start();
if(isset($_SESSION['username'])){
    header('location:../');
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.css" rel="stylesheet">

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body,
    html {
        height: 100%;

        justify-content: center;
        align-items: center;
        background: url('https://source.unsplash.com/random/1920x1080') no-repeat center center/cover;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
    }

    .form-signin {
        width: 100%;
        max-width: 450px;
        /* Increased width */
        padding: 40px;
        /* Increased padding */
        margin: auto;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 15px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        text-align: center;
    }

    .form-signin h1 {
        margin-bottom: 20px;
        color: #fff;
    }

    .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 15px;
        /* Increased padding */
        font-size: 16px;
        border-radius: 5px;
        border: none;
        outline: none;
        background: rgba(255, 255, 255, 0.5);
        color: #000;
        margin-bottom: 15px;
        /* Increased margin */
    }

    .form-signin .checkbox {
        margin-bottom: 20px;
        color: #fff;
    }

    .form-signin .btn {
        width: 100%;
        padding: 12px;
        /* Increased padding */
        border: none;
        border-radius: 5px;
        background-color: #4CAF50;
        color: white;
        font-size: 18px;
        /* Increased font size */
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .form-signin .btn:hover {
        background-color: #45a049;
    }

    .alert {
        margin-bottom: 15px;
    }

    .mt-5 {
        margin-top: 3rem !important;
    }

    .mb-3 {
        margin-bottom: 1rem !important;
    }

    .text-muted {
        color: #6c757d !important;
    }
    </style>
</head>

<body>
    <div class="container">
        <form class="form-signin" action="../php/check.php" method="post">
            <?php
          if(isset($_GET['msg'])){
            if($_GET['msg']=='logout'){
        ?>

            <?php
            }  
            if($_GET['msg']=='iuser'){
        ?>
            <div class="alert alert-danger text-center" role="alert">
                Incorrect Email/Password!
            </div>
            <?php
            } 
          }
        ?>
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required
                autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password"
                required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" name="rm" value="remember-me"> Remember me
                </label>
            </div>
            <input type="submit" name="login" class="btn btn-lg btn-primary btn-block" value="Login">
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
        </form>
    </div>
</body>

</html>