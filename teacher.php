<?php 
include('class/School.php');
$school = new School();
$school->adminLoginStatus();
include('inc/header.php');
?>
<?php include('inc/title.php'); ?>
<?php include('include_files.php');?>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<script src="js/teacher.js"></script>
<?php include('inc/container.php');?>
<div class="container">	
	<?php include('side-menu.php');	?>
	<div class="content">
		<div class="container-fluid">
			<div>   
				<a><strong><span class="ti-id-badge"></span> Partidas</strong></a>
				<hr>		
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-10">
							<h3 class="panel-title"></h3>
						</div>
						<div class="col-md-2" align="right">
							<button type="button" name="add" id="addPartida" class="btn btn-success btn-xs">Nueva partida</button>
						</div>
					</div>
				</div>
				<table id="partidaList" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Fecha</th>	
							<th>Cantidad de jugadores</th>	
							<th>Ganador</th>	
							<th></th>								
							<th></th>														
						</tr>
					</thead>
				</table>
				
			</div>			
		</div>		
	</div>	
</div>	
<div id="teacherModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="teacherForm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><i class="fa fa-plus"></i> Editar partida</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="teacher" class="control-label">*</label>
						<input type="text" class="form-control" id="partida_fecha" name="partida_fecha" placeholder="Fecha de la partida" required>					
					</div>								
				</div>
				<div class="modal-footer">
					<input type="hidden" name="partida_id" id="partida_id" />
					<input type="hidden" name="action" id="action" value="updatePartida" />
					<input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</form>
	</div>
</div>