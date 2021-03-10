
<!--Incluir conexión de base de datos-->
<?php include("bd.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="peticion.js"></script> 
    <title>Bsale</title>
</head>
<body>

<nav class="nav">

<!-- Menu principal-->
    <ul>
    <span id="bsale">Bsale</span>  
        <li> <a href="#"> Tienda</a></li>
        <li> <input id="buscador" name="buscador" type="text" placeholder="Buscar"></li>
        <span><img src="http://localhost/bsale/img/carritos.svg" alt="" ></span>
        

    </ul>
</nav>

<!-- AQUI SE DESPLEGARA NUESTRA TABLA DE CONSULTA -->
<section id="tabla_resultado">
    


</section>
<!-- Aqui se deberia desplegar la funcionalidad del carrito de compras -->
<div class="mostrarCarrito">
    

</div>
      
	
       
<script src="js/carrito.js"></script>
</body>
</html>