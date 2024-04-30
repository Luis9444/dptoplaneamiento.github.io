<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php

//recibo todos los datos del formulario

$_SESSION["usuario"] = "Luis";
$_SESSION["correo"] = "sequeirajoseluis41@gmail.com";
$_SESSION["contraseña"] = "123";


echo "Los datos son los sigueintes: <br>";
echo $_SESSION["usuario"] ." - ".$_SESSION["correo"]."- ".$_SESSION["contraseña"]."<br>";

?>
<a href="index.html">ir a la pagina</a>
</body>
</html>