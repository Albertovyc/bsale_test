$(obtener_registros());

function obtener_registros(product)
{
	$.ajax({
		url : 'consulta.php',
		type : 'POST',
		dataType : 'html',
		data : { product : product },
		})

	.done(function (resultado) {
			$("#tabla_resultado").html(resultado);
		})
}

$(document).on('keyup', '#buscador', function()
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		obtener_registros(valorBusqueda);
	}
	else
		{
			obtener_registros();
		}
});
