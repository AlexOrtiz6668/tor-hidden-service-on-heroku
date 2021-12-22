<?php
    /* Your password */
    $password = 'oNfW6iGdZe0xoEgqak';

    /* Redirects here after login */
    $redirect_after_login = 'home.php';

    /* Will not ask password again for */
    $remember_password = strtotime('+30 days'); // 30 days

    if (isset($_POST['password']) && $_POST['password'] == $password) {
        setcookie("password", $password, $remember_password);
        header('Location: ' . $redirect_after_login);
        exit;
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div id="main">
                <h1>Login</h1>
                <div id="login">
                                                <form method="post" action="/index.php">
                                <div>Type In The Password To The Website</div>
                                <div>
                                <div><input type="password" name="password"></div>
                                <div><input type="submit" name="login_btn" value="Login"></div>
                                <div></div>
                        </form>
                </div>
        </div>
</body>
</html>