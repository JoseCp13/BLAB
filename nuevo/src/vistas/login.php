<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src\vistas\css\login.css">
</head>

<body>
    <div class="formu">
        <div class="texto">
            <h1>We are <span style="color: #123330;">Blab</span></h1>
            <p>Welcome to Blab, your trusted <br>social network</p>
            <form method="post" action="<?= BASE_URL ?>/login/iniciarsesion">
                <input type="text" placeholder="Usuario" name="user">
                <br>
                <br>
                <input type="password" placeholder="Contraseña" name="contra">
                <br>
                <br>
                <div class="input-group">
                    <input id="boton" type="checkbox">
                    <label for="boton" id="recuerda">Remember me</label>
                    <span style="font-weight: bold;">Forgot Password?</span>
                </div>
                <br>
                <br>
                <input id="login" type="submit" value="Login">
                <a href="<?= BASE_URL ?>/registro/index"><input id="registro" type="button" value="Register"></a>
                <br><br>
                <span id="terminos">About our terms and conditions and <br> our privacy policy</span>
            </form>
        </div>
    </div>


    <div class="container-imagen">
        <div class="imagen">

            <div class="logo">
                <div class="redondo"></div>
                <img src="src\vistas\imagenes\logo2.png">
            </div>
            <img id="fotologin" src="src\vistas\imagenes\foto.jpg">
        </div>
    </div>
</body>

</html>