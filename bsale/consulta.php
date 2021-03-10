<?php
/////// CONEXIÓN A LA BASE DE DATOS /////////
$conexion=mysqli_connect('mdb-test.c6vunyturrl6.us-west-1.rds.amazonaws.com','bsale_test' , 'bsale_test', 'bsale_test');

//////////////// VALORES INICIALES ///////////////////////

$contenedor="";
$query="SELECT * FROM product ORDER BY id";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['product']))
{
	$q=$conexion->real_escape_string($_POST['product']);
	$query="SELECT * FROM product WHERE 
		id LIKE '%".$q."%' OR
		name LIKE '%".$q."%' OR
		url_image LIKE '%".$q."%' OR
		price LIKE '%".$q."%' OR
		discount LIKE '%".$q."%' OR
		category LIKE '%".$q."%'";
}

$buscarproducto=$conexion->query($query);
if ($buscarproducto->num_rows > 0)
{
	$contenedor.= 
	'<section class="container" >
	
	';

	while($fila= $buscarproducto->fetch_assoc())
	
	{
		$contenedor.=
			'<div class="columna row">
			<h2>
			<img id="img-product" class="imagen" src="http://localhost/bsale/img/'.$fila['url_image'].'"></h2>
			<hr>
			<h2 >'.$fila['name'].'</h2>
			 <p >$'.$fila['price'].'</p><button class="todo"> <span  ><img  src="http://localhost/bsale/img/carritos.svg" alt="" ></span> </button>
			</div>
		';
	}

	$contenedor.='</section>';
} else
	{
		$contenedor="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $contenedor;
?>
