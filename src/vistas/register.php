<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../src/vistas/css/register.css">
</head>

<body>
  <div class="formu">
    <div class="texto">
      <h1>We are <span style="color: #123330;">Blab</span></h1>
      <p>Welcome to Blab, your trusted <br>social network</p>
      <form method="post" action="<?= BASE_URL ?>/registro/registrorealizado">
        <input class="registro" type="text" placeholder="Email" name="email">
        <input class="registro" type="text" placeholder="Usuario" name="user">
        <input class="registro" type="password" placeholder="Contraseña" name="contra">
        <input class="registro" type="tel" placeholder="Telefono" name="phone">
        <input class="registro" type="text" placeholder="Localidad" name="local">
        <input class="registro" type="text" placeholder="Nombre" name="name">
        <input class="registro" type="text" placeholder="Apellidos" name="apelli">
        <br>
        <br>
        <div class="input-group">
          <input id="boton" type="checkbox">
          <label for="boton" id="recuerda">Remember me</label>
        </div>
        <br>
        <br>
        <input id="registro" type="submit" value="Register">
        <br><br>
        <span id="terminos">About our terms and conditions and <br> our privacy policy</span>
      </form>
    </div>
  </div>


  <div class="container-imagen">
    <div class="imagen">

      <div class="logo">
        <div class="redondo"></div>
        <img src="..\src\vistas\imagenes\logo2.png">
      </div>
      <img id="fotologin" src="..\src\vistas\imagenes\foto.jpg">
    </div>
  </div>
</body>

</html>