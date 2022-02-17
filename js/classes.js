$(document).ready(function(){
	var classesData = $('#manoList').DataTable({
		"lengthChange": false,
		"processing":true,
		"serverSide":true,
		"bFilter": false,
		"order":[],
		"ajax":{
			url:"action.php",
			type:"POST",
			data:{action:'listManos'},
			dataType:"json"
		},
		"columnDefs":[
			{
				"targets":[0, 6, 7],
				"orderable":false,
			},
		],
		"pageLength": 10
	});	
      /** boton de nueva clase */
	$('#addMano').click(function(){
		$('#classModal').modal('show');
		$('#classForm')[0].reset();		
		$('.modal-title').html("<i class='fa fa-plus'></i> Nueva mano");
		$('#action').val('addMano');
		$('#save').val('Guardar');
	});	
	
	$(document).on('submit','#classForm', function(event){
		event.preventDefault();
		$('#save').attr('disabled','disabled');
		var formData = $(this).serialize();
		$.ajax({
			url:"action.php",
			method:"POST",
			data:formData,
			success:function(data){				
				$('#classForm')[0].reset();
				$('#classModal').modal('hide');				
				$('#save').attr('disabled', false);
				classesData.ajax.reload();
			}
		})
	});	
	/** boton de actualizar */
	$(document).on('click', '.update', function(){
		var mano_nroMano = $(this).attr("id");
		var action = 'getMano';
		$.ajax({
			url:'action.php',
			method:"POST",
			data:{mano_nroMano:mano_nroMano, action:action},
			dataType:"json",
			success:function(data){
				$('#classModal').modal('show');
				$('#mano_nroMano').val(data.nroMano);
				$('#mano_idJugador').val(data.id);
				$('#mano_idPartida').val(data.id);
				$('#mano_pedidas').val(data.pedidas);					
				$('#mano_hechas').val(data.hechas);
				$('#mano_puntos').val(data.puntos);
				$('#mano_repartidor').val(data.repartidor);				
				$('.modal-title').html("<i class='fa fa-plus'></i> Editar mano");
				$('#action').val('updateMano');
				$('#save').val('Guardar');
			}
		})
	});	
	/** boton de borrar */
	$(document).on('click', '.delete', function(){
		var mano_nroMano = $(this).attr("id");		
		var action = "deleteMano";
		if(confirm("Esta seguro de que quiere borrar esta mano?")) {
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{mano_nroMano:mano_nroMano, action:action},
				success:function(data) {					
					classesData.ajax.reload();
				}
			});
		} else {
			return false;
		}
	});	
	
	
	
});