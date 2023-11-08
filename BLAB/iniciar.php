<?php


session_start();

$user = $_POST['user'];
$pass = $_POST['contra'];
$username = 'root';
$password = '';
$pdo = new PDO('mysql:host=db;dbname=blab', $username, $password);
// Realiza la consulta SQL
$query = $pdo->prepare("SELECT * FROM User WHERE NomUsr=:user ");
$query->bindParam(':user', $user, PDO::PARAM_STR);
$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC);



if (!$result) {
    echo '<p class="error">Usuario o contraseña incorrectos</p>';
} else {
    // Accede a la contraseña almacenada y verifica
    if ($pass === $result[0]['Password']) {
        $_SESSION['user_id'] = $result[0]['IdUser'];
        echo '<p class="success">¡Felicidades, has iniciado sesión!</p>';
    } else {
        echo '<p class="error">Usuario o contraseña incorrectos</p>';
    }
}


