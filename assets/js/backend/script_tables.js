$(document).ready(function(){
	$('table').dataTable({
		"columnDefs": [
            {
                "targets": [ 0 ],
                "visible": false,
                "searchable": false
            },
        ],
		"language": {
			"info": "_START_ a _END_ de _TOTAL_ registros",
			"paginate": {
				"previous": "Anterior",
				"next": "Siguiente",
				"last": "Última",
				"first":"Primera",
			},
			"lengthMenu":"Ver _MENU_ registros",
			"search": "Buscar:",
			"infoEmpty": "No existen registros actualmente",
			"emptyTable": "No existen registros actualmente",
			
		},
		"pagingType": "full_numbers"
	});
	
});
