<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ingresar</title>
    <link rel="stylesheet" href="https://public.codepenassets.com/css/normalize-5.0.0.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
    <link rel="stylesheet" href="public/css/login.css">
</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="screen-1">
        <img src="public/img/logo.jpg" alt="" class="logo">
        <div class="email">
            <label for="usuario">Usuario</label>
            <div class="sec-2">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="text" name="usuario" id="usuario" />
            </div>
        </div>
        <div class="password">
            <label for="password">Contraseña</label>
            <div class="sec-2">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input class="pas" type="password" name="password" id="password"  />
                <ion-icon class="show-hide" name="eye-outline"></ion-icon>
            </div>
        </div>
        <button class="login" id="ingresarLogin">Ingresar </button>
        <!-- <div class="footer"><span>Sign up</span><span>Forgot Password?</span></div> -->
    </div>
    <!-- partial -->



    <script src="public/js/lib/sweetalert.js" defer></script>
    <script src="public/js/clases/Login.js"></script>
    <script src="public/js/login.js"></script>


</body>

</html>