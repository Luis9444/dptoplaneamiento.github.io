<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Videograph Template">
    <meta name="keywords" content="Videograph, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planeamiento | 2024</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="./bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="./style.css" type="text/css">
    <link rel="stylesheet" href="./css/estilos.css" type="text/css">
</head>

<body>

    <?php 
    session_start(); //Gracias a esta funcion podemos acceder a $_SESSION
    include("./Editores/preloader.php");

   /* Configuracion que usa el ini */
    include("./config/configuracion.php");

    /* Header */
    include("./Editores/header.php");

    //isset( $variable ) ---> pregunta si la variable existe (no es nula)
    if(isset($_SESSION["user"])){
        
        if($_SESSION["user"] == "Luis"){
            // cosas de luis
        }
            //PANEL DE ADMINISTRACION
        include("./Editores/admin-contenido.php");
    }
    else {
        //no esta autorizado, inicie sesion (REDIRECCION)
        header("Location: ./index.php");
    }

    include("./Editores/footer.php");
    ?>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>