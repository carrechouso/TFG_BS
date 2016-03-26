<h1 align = "center">Lista de asignaturas</h1>

<div class="row">
	<?php
		foreach($subjects as $row){
			if(sizeof($subjects) == 1){
				?>
					<div class="col-sm-3 col md-3 col-lg-3"></div>
				<?php
			}
			?>
				<div class="form-group  has-feedback col-xs-12 col-sm-6 col-md-6 col-lg-6">
				    <span class="sr-only">Datos de la asignatura</span>
				    <div class="input-group">
				    	<div class="input-group-addon">
					    	<span class="glyphicon glyphicon-education "></span>
					    </div>
					   	<span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo $row['Subject']['name'];?></span>
					   	<span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo$row['Subject']['quarter'];?></span>
					    <span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo $row['Subject']['credits'];?></span>
					     <span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo $row['Subject']['code'];?></span>
					    <div class="input-group-addon">
						
							
							<?php
								if(AuthComponent::user('type') == 'admin'){
									echo $this->Form->postLink(
  											$this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-trash btn  btn-info')). " ",
      											array('action' => 'delete', $row['Subject']['id']),
        										array('escape'=>false),
   												 __('¿Eliminar %s?', $row['Subject']['name'])
  											);
								}

					   		?>
					    </div>
					</div>
				</div>						
			<?php
		}	
	?>
</row>