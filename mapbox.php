<!DOCTYPE html>
<html>
<head>
  <!-- Configuración de la página -->
  <meta charset='utf-8' />
  <title>Mapa de Delitos en San Juan</title>
  <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
  
  <!-- Enlaces a archivos CSS -->
  <link rel="stylesheet" href="./bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="./style.css" type="text/css">
    <link rel="stylesheet" href="./css/estilos.css" type="text/css">

  <!-- Inclusión de la librería Mapbox -->
  <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css' rel='stylesheet' />
  
  <!-- Estilos CSS adicionales -->
  <style>
    body { margin: 0; padding: 0; }
    #map { 
  position: absolute; 
  top: 0; 
  bottom: 0; 
  left: 0; /* Ajuste para que ocupe toda la pantalla horizontalmente */
  right: 0; /* Ajuste para que ocupe toda la pantalla horizontalmente */
  height: 100%; 
}

    #chart { position: absolute; top: 0; left: 50%; width: 50%; height: 100%; }
  </style>
</head>
<body>

<!-- Contenedor para el mapa -->
<div id='map'></div>

<!-- Contenedor para los gráficos -->
<!--<div id='chart'></div> -->

<?php 

include("./Editores/header.php");
?>

<script>
// Configuración del token de acceso de Mapbox
mapboxgl.accessToken = 'pk.eyJ1IjoibHVpczk0NCIsImEiOiJjbHVrcWZtb20wY3pxMmptdzN1c2lheXVuIn0.FJ-9V7yM1qlH7kQCLQULFQ';

// Inicialización del mapa de Mapbox
var map = new mapboxgl.Map({
  container: 'map', // Contenedor del mapa
  style: 'mapbox://styles/mapbox/streets-v11', // Estilo del mapa
  center: [-68.5364, -31.5375], // Coordenadas de San Juan
  zoom: 10 // Nivel de zoom
});

// Evento 'load' del mapa, se ejecuta cuando el mapa ha terminado de cargarse
map.on('load', function () {
  // Añadir una fuente de datos al mapa (en este caso, delitos)
  map.addSource('delitos', {
    type: 'geojson',
    data: './delitos json/delitos 22.geojson' // URL de los datos en formato GeoJSON
  });

  // Añadir una capa al mapa para representar los delitos como círculos
  map.addLayer({
    id: 'delitos',
    type: 'circle',
    source: 'delitos', // Fuente de datos
    paint: {
      'circle-color': '#FF0000', // Color de los círculos
      'circle-radius': 4, // Radio de los círculos
      'circle-opacity': 0.8 // Opacidad de los círculos
    }
  });

});

// Código para graficos del mes
// Puedes usar bibliotecas como Chart.js o D3.js para crear gráficos aquí

</script>

</body>
</html>
