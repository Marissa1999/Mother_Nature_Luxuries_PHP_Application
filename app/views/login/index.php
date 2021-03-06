<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        h1 {
            color: darkslateblue;
            margin-top: 200px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        h4 {
            margin-bottom: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .form-group {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-button {
            margin-bottom: 60px;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        p {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        body {
            background-color: lavender;
            font-family: Helvetica, sans-serif;
        }

        label,
        input {
            height: 100%;
            display: block;
            text-align: center;
        }
    </style>
</head>
<body>
<div class='container'>
    <h1>Login to Mother Nature's Luxuries</h1>
    <h4>Come Shop to your Heart's Desires!</h4>
    <?php
    if (!is_array($data)) {
        echo "<div class='alert alert-danger' role='alert'>$data</div>";
    }
    ?>
    <form action='' method='post'>
        <div class='form-group'>
            <label>Username <input type='text' name='username' class='form-control' minlength="2" required/></label>
        </div>
        <div class='form-group'>
            <label>Password <input type='password' name='password' class='form-control' minlength="8" required/></label>
        </div>
        <div class='login-button'>
            <input type='submit' name='action' value='&nbsp;&nbsp;Log In&nbsp;&nbsp;' class=' btn btn-primary'/>
        </div>
    </form>
    <p>
        Don't have an account? &nbsp;&nbsp; <a href='/login/register' class='btn btn-secondary'>Create an Account</a>
    </p>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>