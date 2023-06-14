<html>
  <head>
    <title>FORMULARIO</title>
     <link rel="shortcut icon" href="icono.png">
      <body background="fondo.jpg">
  </head>
  <center>
  <body>
    	<center>  <img src="bienve.png" height="200px" weight="150px"> </center>
    <?php echo '<p><h3></h3></p>'; ?> 
        <form action="accion.php" method="post">
         <p>Nombre(s): <input type="text" name="nombre" placeholder="nombre(s)" /></p>
        <p>Apellido paterno: <input type="text" name="paterno" placeholder="apellido paterno"/></p>
        <p>Apellido materno: <input type="text" name="materno" placeholder="apellido materno" /></p>
         <p>Su edad: <input type="text" name="edad" placeholder="edad"/></p>
        <p>Fecha de registro: <input type="date" name="fecha" placeholder="dia de tu carera" /></p>
        <p>Tu moto es: <input type="text" name="moto" placeholder="tipo y motor" /></p>
             <p>Escribe el circuito que quieras competir:<input type="text" name="circuito" placeholder="pista , terraceria , arrancon"></p>
          <p>En cual carrera quieres competir:<p><input type="radio" name="boton" value="1">$5mil<br>
<input type="radio" name="boton" value="2">$10mil<br>
<input type="radio" name="boton" value="3">$20mil</p>
        <button type="submit">
  <img src="enviar.png" alt="imagen" width="32" height="32" style="vertical-align: middle">
  Enviar
</button>
          <button type="reset">
  <img src="borrar.png" alt="imagen" width="32" height="32" style="vertical-align: middle">
  Borrar
</button>
 	<center>  <img src="mage.png" height="250px" weight="200px"> </center>
        </form>
          <!--
          This script places a badge on your repl's full-browser view back to your repl's cover
          page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
          teal, blue, blurple, magenta, pink!
          -->
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </center>
  </body>
</html>