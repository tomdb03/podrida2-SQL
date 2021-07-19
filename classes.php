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
<script src="js/classes.js"></script>
<?php include('inc/container.php');?>
<div class="container">	
	<?php include('side-menu.php');	?>
	<div class="content">
		<div class="container-fluid">
			<div>   
				<a><strong><span class="ti-home"></span> Clases</strong></a>
				<hr>		
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-10">
							<h3 class="panel-title"></h3>
						</div>
						<div class="col-md-2" align="right">
							<button type="button" name="add" id="addClass" class="btn btn-success btn-xs">Nueva clase</button>
						</div>
					</div>
				</div>
				<table id="classList" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>	
							<th>Sección</th>
							<th>Profesor</th>							
							<th></th>
							<th></th>							
						</tr>
					</thead>
				</table>
				
			</div>			
		</div>		
	</div>	
</div>	
<div id="classModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="classForm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><i class="fa fa-plus"></i> Editar Clase</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="firstname" class="control-label">Agregar clase*</label>
						<input type="text" class="form-control" id="cname" name="cname" placeholder="Nombre de la clase" required>					
					</div>	
					<div class="form-group">
						<label for="mname" class="control-label">Sección*</label>	
						<select name="sectionid" id="sectionid" class="form-control" required>
							<option value="">Seleccionar sección</option>
							<?php echo $school->getSectionList(); ?>
						</select>
					</div>	
					<div class="form-group">
						<label for="mname" class="control-label">Profesor*</label>	
						<select name="teacherid" id="teacherid" class="form-control" required>
							<option value="">Seleccionar profesor</option>
							<?php echo $school->getTeacherList(); ?>
						</select>
					</div>		
				</div>
				<div class="modal-footer">
					<input type="hidden" name="classid" id="classid" />
					<input type="hidden" name="action" id="action" value="updateClass" />
					<input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</form>
	</div>
</div>
<?php include('inc/footer.php');?>