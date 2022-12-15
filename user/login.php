<!DOCTYPE html>
<html lang="en-US">
    <meta charset="utf-8">
    <meta name="viewport" content='width=device-width', initial-scale=1>
    <title>login</title>
    <link rel="stylesheet" href="/docapp/stf/css/account.css">
    <link rel="icon" type="image/x-icon" href="/docapp//stf/img/doc_logo.svg">
<body>
<?php include "../ext/head.php" ?>

    <div id="login">
        <h5>Login your account</h5>
        <form method="post" action="">
            <div class="reference_pass">
                <p>Email address: <input type="email"></p>
                <p>Password: <input type="number"></p>
            </div>
            
            <button name="submit">Login</button>
        </form>
        <p class="note">Forget password <a href="">Click here</a></p>
        <p class="note">You don't have an account <a href="sign_up.php">Sign up</a></p>
    </div>

<?php include "../ext/base.php" ?>
</body>
</html>