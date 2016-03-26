<h2 align = "center">Datos de <?php echo $name . ' ' . $surname;?></h2></br>
<div class="row">
	<?php
	
		if (sizeof($data) == 0){
			?></br></br></br>
				<h3 align="center">
					El profesor no imparte ninguna tutoría por el momento
				</h3>
			<?php
		}else{
			foreach ($data as $proffesor){
				$start_minute =  $proffesor['t']['start_minute'];
				$finish_minute =  $proffesor['t']['finish_minute'];
			
				if($start_minute == 0){
					$start_minute = '00';
				}

				if($finish_minute == 0){
					$finish_minute = '00';
				}

				if(sizeof($data) == 1){
					?>
						<div class="col-sm-3 com-md-3 col-lg-4"></div>
					<?php
				}
				
				if(sizeof($data) == 2){
					?>
						<div class="col-lg-1"></div>
					<?php
				}
				?>
				
				<div class="form-group  has-feedback col-xm-12 col-sm-6 col-md-6 col-lg-4">
				    <span class="sr-only">Datos de la tutoría</span>
				    <div class="input-group">
				    	<div class="input-group-addon">
					    	<span class="glyphicon glyphicon-education "></span>
					    </div>
					   	<span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo $proffesor['a']['name'];?></span>
					   	<span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php
							echo  $proffesor['t']['place'];
						?></span>
					    <span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden">
					    	<?php 
					    		echo $proffesor['t']['start_hour'] .':' . $start_minute . ' - ' . $proffesor['t']['finish_hour'] .':' . $finish_minute;
					    	?>
					    </span>
					    <span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php
							echo  $proffesor['t']['day'];
						?></span>
					    
					 
					<div class="input-group-addon">
				    </div>
				</div>
			</div>
		<?php
		}
	}
	?>
</div>
</br>
<div class="col-sm-3 col-md-4 col-lg-4"></div>
<div class="text-center col-xs-12 col-sm-6 col-md-4 col-lg-4" >
						 <div class="btn btn-primary" style ="width:100%" >
						 	<span>
						 		<?php
									echo $this->Html->link('enviar mensaje', array('controller' => 'messages', 'action' => 'add', '?' => array('name' => $name , 'surname' => $surname, 'receiver_id' => $proffesor['p']['id'], 'transmitter_id' => AuthComponent::user('id') )));
								?>
							</span>
						</div>
					</div>