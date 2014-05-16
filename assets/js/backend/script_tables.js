$(document).ready(function(){
	$('table').dataTable({
		"language": {
			"info": "_START_ a _END_ de _TOTAL_ registros",
			"paginate": {
				"previous": "Anterior",
				"next": "Siguiente",
				"last": "Última"
			},
			"lengthMenu":"Ver _MENU_ registros",
			"search": "Buscar:",
			"infoEmpty": "No existen registros actualmente",
			"emptyTable": "No existen registros actualmente"
		}
	});
	
});
