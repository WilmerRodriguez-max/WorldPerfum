<?php

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos ="perfumeria";

    $enlace = mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="compar.css">
   
</head>
<body>

    <div class="Menu">
        <p class="Logo">𝖂𝖔𝖗𝖑 𝕻𝖊𝖗𝖋𝖚𝖒</p>
        <nav>
          <ul class="Ul">
            <li><a href="index.html">Inicio</li></a>
            <li> <a href="sobre-nosotros.html">Sobre nosotros</a></li>
          </ul>
        </nav>
      </div>
    </section>

    
         
<section class="Pagar">
            <section class="Formulario">
            <form action="" method="POST" name="registro">
                
                <h1>Registrate <br>Aqui </h1>
                Nombre <input type="text" required name="Nombre" id="Nombre" placeholder="Ingrese su Nombre "> <br> <br>
                Apellido <input type="text" required name="Apellido" id="Apellido" placeholder="Ingrese su Apellido"> <br> <br>
                Telefono <input type="text" required name="Telefono" id="Telefono" placeholder="Ingrese su Numero"> <br> <br>
                Cantidad <input type="text" required name="Cantidad" id="Cantidad" placeholder="Cantidad de perfumes"> <br> <br>
                Ubicacion <input type="text" required name="Ubicacion" id="Ubicacion" placeholder="Ingrese su ubicacion"> <br> <br>
                Correro Electronico <input type="email" required placeholder="ingrese su Correo" name="correoelectronico" id="Correo"> <br> <br>
               <button type="submit" name="registro">Enviar</button>
            </section>


           

</body>
</html>

<?php

 if(isset($_POST['registro'])) {
      
      $Nombre = $_POST ['Nombre'];
      $Apellido = $_POST ['Apellido'];
      $Telefono = $_POST ['Telefono'];
      $Cantidad = $_POST ['Cantidad'];
      $Ubicacion = $_POST ['Ubicacion'];
      $CorreoElectronico = $_POST ['correoelectronico'];

      $insertarDatos = "INSERT INTO datos VALUES('$Nombre','$Apellido','$Telefono','$Cantidad','$Ubicacion','$Correoelectronico')";

      $ejecutarInsertar = mysqli_query ($enlace, $insertarDatos);
 }

 ?>