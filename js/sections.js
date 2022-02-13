$(document).ready(function(){
	var sectionData = $('#jugadorList').DataTable({
		"lengthChange": false,
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"action.php",
			type:"POST",
			data:{action:'listJugadores'},
			dataType:"json"
		},
		"columnDefs":[
			{
				"targets":[0, 2, 3],
				"orderable":false,
			},
		],
		"pageLength": 10
	});	

	$('#addJugador').click(function(){
		$('#sectionModal').modal('show');
		$('#sectionForm')[0].reset();		
		$('.modal-title').html("<i class='fa fa-plus'></i> Agregar jugador");
		$('#action').val('addJugador');
		$('#save').val('Guardar');
	});	
	
	$(document).on('submit','#sectionForm', function(event){
		event.preventDefault();
		$('#save').attr('disabled','disabled');
		var formData = $(this).serialize();
		$.ajax({
			url:"action.php",
			method:"POST",
			data:formData,
			success:function(data){				
				$('#sectionForm')[0].reset();
				$('#sectionModal').modal('hide');				
				$('#save').attr('disabled', false);
				sectionData.ajax.reload();
			}
		})
	});	
	
	$(document).on('click', '.update', function(){
		var jugador_id = $(this).attr("id");
		var action = 'getJugador';
		$.ajax({
			url:'action.php',
			method:"POST",
			data:{jugador_id:jugador_id, action:action},
			dataType:"json",
			success:function(data){
				$('#sectionModal').modal('show');
				$('#jugador_id').val(data.id);
				$('#jugador_nombre').val(data.nombre);
				$('.modal-title').html("<i class='fa fa-plus'></i> Editar jugador");
				$('#action').val('updateJugador');
				$('#save').val('Guardar');
			}
		})
	});	
	
	$(document).on('click', '.delete', function(){
		var jugador_id = $(this).attr("id");		
		var action = "deleteJugador";
		if(confirm("Está seguro de que quiere borrar este jugador?")) { 
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{jugador_id:jugador_id, action:action},
				success:function(data) {					
					sectionData.ajax.reload();
				}
			})
		} else {
			return false;
		}
	});	
	
	
	
});