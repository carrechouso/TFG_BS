<h1 align="center"> Lista de Profesores</h1>

<div class="row">
	<?php
		foreach($data as $row){
			?>
				
				<div class="form-group  has-feedback col-xs-12 col-xs-12 col-md-6 col-lg-6">
				    <span class="sr-only">Datos del cambio puntual</span>
				    <div class="input-group">
				    	<div class="input-group-addon">
					    	<span class="glyphicon glyphicon-education "></span>
					    </div>
					   	<b><span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo $row['User']['name'] . ' ' . $row['User']['surname']?></span></b>
					   	<b><span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo $row['User']['username'];?></span></b>
					    
					   	<?php 
					   		if(AuthComponent::user('type') == 'admin'){?>
					    		<div class="input-group-addon">
					    			<?php
					   					echo $this->Form->postLink(
								   			$this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-trash btn btn-danger')). "",
								        	array('action' => 'removeProffesor', $row['User']['id']),
								        	array('escape'=>false),
								    		__('¿Seguro que quieres eliminar a ' . $row['User']['name'] . ' ' . $row['User']['username'] . '?'),
								   			array('class' => 'btn btn-mini btn-info')
										);
					   				?>
					    		</div>
					    	<?php
							}
						?>
					</div>
				</div>
			
			<?php
		}
	?>
</div>