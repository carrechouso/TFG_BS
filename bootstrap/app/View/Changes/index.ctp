<h1 align = "center"> Lista de cambios puntuales </h1>

	<?php
		
		//print_r($tutorias);
		foreach ($tutorials as $row) {
			
			$fecha =  explode("-", $row['c']['newDate']);
			$dia = $fecha[2] . '/' . $fecha[1] . '/' . $fecha[0];

			$fechaVieja =  explode("-", $row['c']['date']);
			$diaViejo = $fechaVieja[2] . '/' . $fechaVieja[1] . '/' . $fechaVieja[0];
			
			$min_inicio = $row['c']['start_minute'];
			$min_fin = $row['c']['finish_minute'];
			if($min_inicio == '0')
				$min_inicio = '00';
		
			if($min_fin == '0')
				$min_fin = '00';
			
			if( AuthComponent::user('type') == 'profesor' ){
				
				if($row['c']['user_id'] == AuthComponent::user('id')){
				?>
				<div class="form-group  has-feedback">
				    <span class="sr-only">Datos del cambio puntual</span>
				    <div class="input-group">
				    	<div class="input-group-addon">
					    	<span class="glyphicon glyphicon-education "></span>
					    </div>
					   	<span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo $row['a']['name']?></span>
					   	<span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo $diaViejo . ' pasa a ' . $dia;?></span>
					    <span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo $row['c']['start_hour'] . ':' . $min_inicio. ' - ' . $row['c']['finish_hour'] . ':' . $min_fin ?></span>
					    <span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo $row['c']['place'] ?></span>
					   	
					    <div class="input-group-addon">
					    						   		
					   		<?php
					   			echo $this->Form->postLink(
								   $this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-remove')). " Eliminar",
								        array('action' => 'delete', $row['c']['id']),
								        array('escape'=>false),
								    __('¿Seguro que quieres eliminar el cambio puntual?'),
								   array('class' => 'btn btn-mini btn-primary')
								);
					   		?>
					    </div>
					</div>
				</div>
				<?php
				}
			}else if (AuthComponent::user('type') == 'admin'){
				
				?>
					<div class="form-group  has-feedback">
				    <span class="sr-only">Datos del cambio puntual</span>
				    <div class="input-group">
				    	<div class="input-group-addon">
					    	<span class="glyphicon glyphicon-education "></span>
					    </div>
					   	<span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo $row['a']['name']?></span>
					   	<span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo $diaViejo . ' pasa a ' . $dia;?></span>
					    <span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo $row['c']['start_hour'] . ':' . $min_inicio. ' - ' . $row['c']['finish_hour'] . ':' . $min_fin ?></span>
					    <span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo $row['c']['place'] ?></span>
					   	
					    <div class="input-group-addon">
					    						   		
					   		<?php
					   			echo $this->Form->postLink(
								   $this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-remove')). " Eliminar",
								        array('action' => 'delete', $row['c']['id']),
								        array('escape'=>false),
								    __('¿Seguro que quieres eliminar el cambio puntual?'),
								   array('class' => 'btn btn-mini btn-primary')
								);
					   		?>
					    </div>
					</div>
				</div>
				<?php	
			}		
			?>
			</br></br>
			
			<?php
		}
	?>
