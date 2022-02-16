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
<script src="js/sections.js"></script>
<?php include('inc/container.php');?>
<div class="container">	
	<?php include('side-menu.php');	?>
	<div class="content">
		<div class="container-fluid">
			<div>   
				<a><strong><span class="ti-harddrives"></span> Jugadores</strong></a>
				<hr>		
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-10">
							<h3 class="panel-title"></h3>
						</div>
						<div class="col-md-2" align="right">
							<button type="button" name="add" id="addJugador" class="btn btn-success btn-xs">Nuevo jugador</button>
						</div>
					</div>
				</div>
				<table id="jugadorList" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th></th>
							<th></th>															
						</tr>
					</thead>
				</table>
				
			</div>			
		</div>		
	</div>	
</div>	
<div id="sectionModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="sectionForm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><i class="fa fa-plus"></i> Editar jugador</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="firstname" class="control-label">Jugador*</label>
						<input type="text" class="form-control" id="jugador_nombre" name="jugador_nombre" placeholder="Nombre del jugador" required>							
					</div>									
				</div>
				<div class="modal-footer">
					<input type="hidden" name="jugador_id" id="jugador_id" />
					<input type="hidden" name="action" id="action" value="updateJugador" />
					<input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</form>
	</div>
</div>
<?php include('inc/footer.php');?>