<h1 align ="center">Lista de  mensajes</h1>
<div class="row">
 <?php

	foreach($messages as $message){
			
		if($message['m']['transmitter_id'] == AuthComponent::user('id')){
					
			if(AuthComponent::user('type') == 'admin' || AuthComponent::user('type') == 'alumno'){
				$aux = explode(' ', $message['m']['date']);
				$date = explode('-', $aux[0]); 
				$hour = $aux[1];
				?>
				
				<div class="form-group  has-feedback col-xs-12">
				    <span class="sr-only">Mensaje</span>
				    <div class="input-group">
				    	<div class="input-group-addon">
					    	<span class="glyphicon glyphicon-education "></span>
					    </div>
					   	<b><span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo 'Para: ' . $message['p']['name'] . ' ' . $message['p']['surname'];?></span></b>					   	
					    <b><span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo  $date[2] . '-' . $date[1] . '-' . $date[0] .' a las ' . $hour ; ?></span></b>
					    <em>
					   	<?php
					   		echo $this->Form->textarea('notes', array('class' => 'form-control', 'escape' => true, 'readonly' => true, 'value' =>  $message['m']['message'], 'rows' => 5));
					   	?></em>
					    
					</div>
				</div>
			<?php
			}else{
				$aux = explode(' ', $message['m']['date']);
				$date = explode('-', $aux[0]); 
				$hour = $aux[1];
				?>
				
				<div class="form-group  has-feedback col-xs-12">
				    <span class="sr-only">Mensaje</span>
				    <div class="input-group">
				    	<div class="input-group-addon">
					    	<span class="glyphicon glyphicon-education "></span>
					    </div>
					   	<b><span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo 'Para: ' . $message['a']['name'] . ' ' . $message['a']['surname'];?></span></b>					   	
					    <b><span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo  $date[2] . '-' . $date[1] . '-' . $date[0] .' a las ' . $hour ; ?></span></b>
					    
					    <em>
					   	<?php
					   		echo $this->Form->textarea('notes', array('class' => 'form-control', 'escape' => true, 'readonly' => true, 'value' =>  $message['m']['message'], 'rows' => 5));
					   	?></em>
					    
					</div>
				</div>
				<?php	
					}
			}else if($message['m']['receiver_id'] == AuthComponent::user('id')){
				
				if(AuthComponent::user('type') == 'admin' || AuthComponent::user('type') == 'alumno'){
				
					$aux = explode(' ', $message['m']['date']);
					$date = explode('-', $aux[0]); 
					$hour = $aux[1];
					?>
				
					<div class="form-group  has-feedback col-xs-12">
					    <span class="sr-only">Mensaje</span>
					    <div class="input-group">
					    	<div class="input-group-addon">
						    	<span class="glyphicon glyphicon-education "></span>
						    </div>
						   	<b><span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo 'De: ' . $message['a']['name'] . ' ' . $message['a']['surname'];?></span></b>					   	
						    <b><span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo  $date[2] . '-' . $date[1] . '-' . $date[0] .' a las ' . $hour ; ?></span></b>
						    
						    <em>
						   	<?php
						   		echo $this->Form->textarea('notes', array('class' => 'form-control', 'escape' => true, 'readonly' => true, 'value' =>  $message['m']['message'], 'rows' => 5));
						   	?>
						   </em>
						    <div class="input-group-addon">
						    						   		
						   		<?php
						   		echo $this->Html->link(__('', true), array('controller' => 'messages', 'action' => 'add', '?' => array('name' => $message['p']['name'] , 'surname' => $message['p']['surname'], 'receiver_id' => $message['m']['transmitter_id'], 'transmitter_id' => $message['m']['receiver_id'] )), array('class' => 'glyphicon glyphicon-share-alt btn  btn-success'));

						   		?>
						    </div>
						</div>
					</div>
				<?php

					
					}else{
						$aux = explode(' ', $message['m']['date']);
						$date = explode('-', $aux[0]); 
						$hour = $aux[1];
						?>
				
						<div class="form-group  has-feedback col-xs-12">
						    <span class="sr-only">Mensaje</span>
						    <div class="input-group">
						    	<div class="input-group-addon">
							    	<span class="glyphicon glyphicon-education "></span>
							    </div>
							   	<b>
							   	<span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo 'De: ' . $message['p']['name'] . ' ' . $message['p']['surname'];?></span></b>					   	
							    <b><span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo  $date[2] . '-' . $date[1] . '-' . $date[0] .' a las ' . $hour ; ?></span></b>
							    
							    <em>
							   	<?php
							   		echo $this->Form->textarea('notes', array('class' => 'form-control', 'escape' => true, 'readonly' => true, 'value' =>  $message['m']['message'], 'rows' => 5));
							   	?>
							   </em>
							    <div class="input-group-addon">
							    						   		
							   		<?php
							   		echo $this->Html->link(__('', true), array('controller' => 'messages', 'action' => 'add', '?' => array('name' => $message['a']['name'] , 'surname' => $message['a']['surname'], 'receiver_id' => $message['m']['transmitter_id'], 'transmitter_id' => $message['m']['receiver_id'] )), array('class' => 'glyphicon glyphicon-share-alt btn  btn-success'));
							   		?>
							    </div>
							</div>
						</div>
					<?php
				}					
			}
			?>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="height:30px;"></div><?php
		}
	?>
</div>