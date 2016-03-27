<h1 align = "center"> Lista de asignaturas </h1>
<?php 
	
	
	foreach($data as $row){
		?>
		<div class="form-group  has-feedback col-xs-12 col-sm-6 col-md-6 col-lg-6">
				    <span class="sr-only">Datos de la asignatura</span>
				    <div class="input-group">
				    	<div class="input-group-addon">
					    	<span class="glyphicon glyphicon-education "></span>
					    </div>
					   	<b><span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo $row['Subject']['name'];?></span>
					   	<span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo$row['Subject']['quarter'];?></span>
					    <span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo $row['Subject']['credits'];?></span>
					     <span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo $row['Subject']['code'];?></span></b>
					    <div class="input-group-addon">
							<?php
								if(AuthComponent::user('type') == 'admin'){
									echo $this->Form->create('Impart', array('url' => array('controller' => 'imparts','action' => 'add')));
									echo $this->Form->Input('subject_id', array('type' => 'hidden', 'value' => $row['Subject']['id'])); 
									echo $this->Form->Input('user_id', array('type' => 'hidden', 'value' => AuthComponent::user('id')));
									echo $this->Form->End('Darse de alta como docente');

								}else if(AuthComponent::user('type') == 'profesor'){
									echo $this->Form->create('Impart', array('url' => array('controller' => 'imparts','action' => 'add')));
									echo $this->Form->Input('subject_id', array('type' => 'hidden', 'value' => $row['Subject']['id'])); 
									echo $this->Form->Input('user_id', array('type' => 'hidden', 'value' => AuthComponent::user('id')));
																		
									echo $this->Form->button('<i class="glyphicon glyphicon-plus"></i>', array(
									    'type' => 'submit', 
									    'class' => 'btn btn-danger', 
									    'escape' => false
									));
									echo $this->Form->End();
								}
				
			?>	
					    </div>
					</div>
				</div>
		<?php
	}
?>