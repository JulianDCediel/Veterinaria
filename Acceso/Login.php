<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>THE VET´S</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="../cssAcesso/style.css">
        <script src="https://kit.fontawesome.com/732d00cb0f.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <center>
        <div class="login-clean">
            <form method="post" >
                <h2 class="sr-only">Login Form</h2>
                <div class="illustration"><i class="fa-solid fa-paw"></i></div>
                <div class="form-group"><input class="form-control" type="email" name="email" autofocus="autofocus" required placeholder="Email"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" required placeholder="Password"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" value="Log In" type="submit">Log In</button></div></form>
        </div>
    </center>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        session_start();
        $u = $_POST['email'];
        $c = $_POST['password'];
        if ($u == "aaa@hotmail.com" && $c == "123456") {
            $_SESSION['email'] = $u;
            header("Location:../Admin/PrincipalAdmin.php");
        } elseif ($u == "bbb@hotmail.com" && $c == "123456") {
            $_SESSION['email'] = $u;
            header("Location:../Empleado/PrincipalEmp.php");
        } else {
            session_destroy();
            echo '<center><h2>Correo y/o Contraseña incorrectos<h2> ';
        }
    }
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
