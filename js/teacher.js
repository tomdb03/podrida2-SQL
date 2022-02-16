$(document).ready(function(){
	var teacherData = $('#partidaList').DataTable({
		"lengthChange": false,
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"action.php",
			type:"POST",
			data:{action:'listPartida'},
			dataType:"json"
		},
		"columnDefs":[
			{
				"targets":[0, 4, 5],
				"orderable":false,
			},
		],
		"pageLength": 10
	});	

	$('#addPartida').click(function(){
		$('#teacherModal').modal('show');
		$('#teacherForm')[0].reset();		
		$('.modal-title').html("<i class='fa fa-plus'></i> Agregar partida");
		$('#action').val('addPartida');
		$('#save').val('Guardar');
	});	
	
	$(document).on('submit','#teacherForm', function(event){
		event.preventDefault();
		$('#save').attr('disabled','disabled');
		var formData = $(this).serialize();
		$.ajax({
			url:"action.php",
			method:"POST",
			data:formData,
			success:function(data){				
				$('#teacherForm')[0].reset();
				$('#teacherModal').modal('hide');				
				$('#save').attr('disabled', false);
				teacherData.ajax.reload();
			}
		})
	});	
	
	$(document).on('click', '.update', function(){
		var partida_id = $(this).attr("id");
		var action = 'getPartida';
		$.ajax({
			url:'action.php',
			method:"POST",
			data:{partida_id:partida_id, action:action},
			dataType:"json",
			success:function(data){
				$('#teacherModal').modal('show');
				$('#partida_id').val(data.id);
				$('#partida_fecha').val(data.fecha);	
				$('.modal-title').html("<i class='fa fa-plus'></i> Editar partida");
				$('#action').val('updatePartida');
				$('#save').val('Guardar');
			}
		})
	});	
	
	$(document).on('click', '.delete', function(){
		var partida_id = $(this).attr("id");		
		var action = "deletePartida";
		if(confirm("Está seguro de que quiere borrar esta partida?")) {
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{partida_id:partida_id, action:action},
				success:function(data) {					
					teacherData.ajax.reload();
				}
			})
		} else {
			return false;
		}
	});	
	
	
	
});