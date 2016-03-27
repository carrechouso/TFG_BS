<h1 align="center">Mis asignaturas</h1>
	
	<?php

	foreach($data as $row){
		if (AuthComponent::user('type')== 'admin'){
			?>

				<div class="form-group  has-feedback">
				    <span class="sr-only">Datos de la Asignatura</span>
				    <div class="input-group">
				    	<div class="input-group-addon">
					    	<span class="glyphicon glyphicon-education "></span>
					    </div>
					   	<b><span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo $row['a']['name']?></span></b>
					   	<b><span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo $row['p']['name'] . ' ' . $row['p']['surname'];?></span></b>
					    <b><span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo $row['a']['quarter'] . ' cuatrimestre ' . $row['a']['credits'] . ' créditos' ?></span></b>
					   	
					    <div class="input-group-addon">
					    						   		
					   		<?php
					   			echo $this->Form->postLink(
								   $this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-remove btn btn-danger')). "",
								        array('action' => 'delete', $row['i']['id']),
								        array('escape'=>false),
								    __('¿Dar de baja a el profesor %s %s en la asignatura %s?', $row['p']['name'], $row['p']['surname'], $row['a']['name']),
								   array('class' => 'btn btn-mini btn-primary')
								);
					   		?>
					    </div>
					</div>
				</div>
			<?php
		}else if (AuthComponent::user('type') == 'profesor'){
			if ($row['i']['user_id'] == AuthComponent::user('id')){
				?>
					<div class="form-group  has-feedback">
				    <span class="sr-only">Datos de la Asignatura</span>
				    <div class="input-group">
				    	<div class="input-group-addon">
					    	<span class="glyphicon glyphicon-education "></span>
					    </div>
					   	<b><span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo $row['a']['name']?></span></b>
					    <b><span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo $row['a']['quarter'] . ' cuatrimestre ' . $row['a']['credits'] . ' créditos' ?></span></b>
					   	
					    <div class="input-group-addon">
					    						   		
					   		<?php
					   			echo $this->Form->postLink(
								   $this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-remove btn btn-danger')). "",
								        array('action' => 'delete', $row['i']['id']),
								        array('escape'=>false),
								    __('¿Dar de baja a el profesor %s %s en la asignatura %s?', $row['p']['name'], $row['p']['surname'], $row['a']['name']),
								   array('class' => 'btn btn-mini btn-primary')
								);
					   		?>
					    </div>
					</div>
				</div>
				<?php			
			}
		}
		
		?>
		</p>
	
		<?php
	}
?>
