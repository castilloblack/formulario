<html>
  <head>
    <link rel="shortcut icon" href="icono2.png">
       <body background="fondo.jpg">
    <center>
    <title>DATOS CAPTURADOS</title>
       <link rel="stylesheet" href="style.css">
  </head>
  <body>
    DATOS CAPTURADOS <br><p>
    Nombre(s):<?php echo htmlspecialchars($_POST['nombre']); ?>.<br><p>
    Apellido Paterno:<?php echo htmlspecialchars($_POST['paterno']); ?>.<br><p>
    Apellido Materno:<?php echo htmlspecialchars($_POST['materno']); ?>.<br><p>
    Edad:<?php echo (int)$_POST['edad']; ?>.<br><p>
    Fecha de registro:<?php echo  htmlspecialchars($_POST['fecha']); ?>.<br><p>
    Tu moto es:<?php echo htmlspecialchars($_POST['moto']); ?>.<br><p>
      Escribe el circuito que quieras competir:<?php echo htmlspecialchars($_POST['circuito']); ?>.<br><p>
    En cual carrera quieres competir:<?php echo htmlspecialchars($_POST['boton']); ?>.<br><p>
 <br><p>
   <center>  <img src="ime.png" height="350px" weight="300px"> </center>
  </center>
</html>