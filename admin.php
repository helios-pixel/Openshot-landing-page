
<?php
    require("connection.php")
?>
<html>

<head>
    <title>Admin Login</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body>

    <div class="login-form" >
        <h2>ADMIN LOGIN</h2>
        <form method="POST">
            <div class="input-field">
                <i class="bi bi-person-circle"></i>
                <input type="text" placeholder="Username" name="AdminName">
            </div>
            <div class="input-field">
                <i class="bi bi-shield-lock"></i>
                <input type="password" placeholder="Password" name="AdminPass">
            </div>

            <button type="submit" name="Signin">Sign In</button>



        </form>
    </div>
<?php
if(isset($_POST['Signin'])){
    $query="SELECT * FROM `admin_login` WHERE `Admin_name`='$_POST[AdminName]' AND `Admin_password`='$POST[AdminPass]'";
}
?>
</body>

</html>