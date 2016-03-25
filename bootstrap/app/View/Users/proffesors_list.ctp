<h1 align = "center">Lista de profesores</h1>
<div class="row">
	<?php
		foreach ($proffesors as $proffesor){
			if(sizeof($proffesors) == 1){
				?> <div class="col-sm-3 col-md-3 com-lg-4"></div><?php
			}

			if(sizeof($proffesors) == 2){
				?> <div class="com-lg-2"><?php
			}

			?>
			<div class="form-group  has-feedback col-xs-12 col-sm-6 col-md-6 col-lg-4">
				    <span class="sr-only">Datos del cambio puntual</span>
				    <div class="input-group">
				    	
						<div class="input-group-addon text-center"> 
							<?php 
								echo $this->Html->Link($proffesor['User']['name'] . ' ' . $proffesor['User']['surname'], array('controller' => 'Users', 'action' => 'proffesorData','?' => array('proffesor_id' => $proffesor['User']['id'], 'name' => $proffesor['User']['name'], 'surname' => $proffesor['User']['surname'])));
							?>
						</div>
					</div>
			</div>

				<?php
		}
	?>
</div>
	
