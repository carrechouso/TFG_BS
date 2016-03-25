<h1 align="center">Lista de tutorias</h1>

<?php
	
	foreach ($tutorials as $row) {
		$min_inicio = $row['Tutorial']['start_minute'];
		$min_fin = $row['Tutorial']['finish_minute'];
	
		if($min_inicio == '0')
			$min_inicio = '00';
		
		if($min_fin == '0')
			$min_fin = '00';

		
		if( AuthComponent::user('type') == 'profesor' ){
			if($row['Tutorial']['user_id'] == AuthComponent::user('id')){
				if($count == 1){
			?>
				<div class="col-sm-3 col-md-3 col-lg-4"></div>
			<?php
		}
		if($count== 2){
			?>
				<div class="col-lg-1"></div>
			<?php
		}

			?> 
				<div class="form-group  has-feedback col-xm-12 col-sm-6 col-md-6 col-lg-4">
				    <span class="sr-only">Datos del cambio puntual</span>
				    <div class="input-group">
				    	<div class="input-group-addon">
					    	<span class="glyphicon glyphicon-education "></span>
					    </div>
					   	<span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden">Asignatura: <?php echo $row['Subject']['name']; ?></span>
					   	<span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden">Profesor: <?php echo $row['User']['name'] . ' ' .$row['User']['surname']; ?></span>
					    <span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden">Día: <?php echo $row['Tutorial']['day'];?></span>
					    <span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden">Horario: <?php echo $row['Tutorial']['start_hour']. ':' . $min_inicio. ' - ' . $row['Tutorial']['finish_hour']. ':' . $min_fin; ?></span>
					    <span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden">Lugar: <?php echo $row['Tutorial']['place'];?></span>
					 <div class="text-center" style="margin:0">
						 <div class="btn btn-primary" style ="width:100%" >
						 	<span>
						 		<?php
									echo $this->Form->postLink( 'Eliminar', array('class' => 'col-xs-6 col-sm-6 col-md-6 col-lg-6 ','action' => 'delete', $row['Tutorial']['id']), array('confirm' => __('¿Seguro que quieres eliminar la tutoría? ')));
								?>
							</span>
						</div><?php
						echo $this->Form->create('Tutorial',array('style' => 'width:100%; padding:0px;margin-top:2px', 'class' => 'col-xs-6 col-sm-6 col-md-6 col-lg-6','url' => array('controller' => 'tutorials', 'action' => 'change')));
					    echo $this->Form->input('tutorial',array('type'=>'hidden','value' => $row['Tutorial']['id']));
						echo $this->Form->input('proffesor',array('type'=>'hidden','value' => $row['User']['id']));
						echo $this->Form->end(array('label' =>  'Cambio', 'class' => 'btn btn-primary', 'style' => 'width:100%'));
					?></div>
					    <div class="input-group-addon">
					    						   		
					   		<?php
					   			
					   		?>
					    </div>
					</div>
				</div>
				<?php 
			}
		}else if( AuthComponent::user('type')== 'admin' ){
			if(sizeof($tutorials) == 1){
			?>
				<div class="col-sm-3 col-md-3 col-lg-4"></div>
			<?php
		}
		if(sizeof($tutorials) == 2){
			?>
				<div class="col-lg-1"></div>
			<?php
		}

			?>
								<div class="form-group  has-feedback col-xm-12 col-sm-6 col-md-6 col-lg-4">
				    <span class="sr-only">Datos del cambio puntual</span>
				    <div class="input-group">
				    	<div class="input-group-addon">
					    	<span class="glyphicon glyphicon-education "></span>
					    </div>
					   	<span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden">Asignatura: <?php echo $row['Subject']['name']; ?></span>
					   	<span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden">Profesor: <?php echo $row['User']['name'] . ' ' .$row['User']['surname']; ?></span>
					    <span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden">Día: <?php echo $row['Tutorial']['day'];?></span>
					    <span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden">Horario: <?php echo $row['Tutorial']['start_hour']. ':' . $min_inicio. ' - ' . $row['Tutorial']['finish_hour']. ':' . $min_fin; ?></span>
					    <span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden">Lugar: <?php echo $row['Tutorial']['place'];?></span>
					 <div class="text-center" style="margin:0">
						 <div class="btn btn-primary" style ="width:100%;" onclick="location.location.redirect'Tutorials/remove?id=<?php echo $row['Tutorial']['id'];?>';" >
						 	<span>
						 		<?php
									echo $this->Form->postLink( 'Eliminar', array('action' => 'delete', $row['Tutorial']['id']), array('confirm' => __('¿Seguro que quieres eliminar la tutoría? ')));
								?>
							</span>
						</div><?php
						echo $this->Form->create('Tutorial',array('style' => 'width:100%; padding:0px; margin-top:2px', 'class' => 'col-xs-6 col-sm-6 col-md-6 col-lg-6','url' => array('controller' => 'tutorials', 'action' => 'change')));
					    echo $this->Form->input('tutorial',array('type'=>'hidden','value' => $row['Tutorial']['id']));
						echo $this->Form->input('proffesor',array('type'=>'hidden','value' => $row['User']['id']));
						echo $this->Form->end(array('label' =>  'Cambio', 'class' => 'btn btn-primary', 'style' => 'width:100%'));
					?></div>
					    <div class="input-group-addon">
					    						   		
					   		<?php
					   			
					   		?>
					    </div>
					</div>
				</div>
		
			<?php 
		}
	?>
	<?php
	}

	?>
	<div class="col-md-12"></div>
	<div class="container">

	<div class="row">
		
	<div onclick="location.href='Tutorials/add';" class="btn btn-warning col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6 " id="button"><span class="glyphicon glyphicon-plus"></span>
	<?php
		echo $this->Html->link("nueva tutoría",array( 'controller' => 'Tutorials', 'action' => 'add'));
		?></div></div>
	</br>
	</div>
