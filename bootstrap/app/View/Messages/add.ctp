<div class="form-group  has-feedback col-xs-12">
				    <span class="sr-only">Nuevo mensaje</span>
				    <div class="input-group">
				    	<div class="input-group-addon">
					    	<span class="glyphicon glyphicon-envelope "></span>
					    </div>
					    <b><span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden">
					    	Para: <?php echo $name . ' ' . $surname;
					    	?>
					    </span></b>	
					    <?php
							echo $this->Form->create('Message', array('url' => array('controller' => 'messages', 'action' => 'add')));
							
							echo $this->Form->textarea('message', array('class' => 'form-control', 'escape' => true, 'rows' => 5));
							
							echo $this->Form->input('transmitter_id', array('type' => 'hidden', 'value' => $transmitter_id));
							echo $this->Form->input('receiver_id', array('type' => 'hidden', 'value' => $receiver_id));	
						?>					    
					</div>
				</div>
<div class="container">
	<div class="col-sm-3 col-md-4 col-lg-4"></div>
	<?php
	
		echo $this->Form->End(array('label' => 'Enviar mensaje','class' => 'btn btn-primary col-xs-12 col-sm-6 col-md-4 col-lg-4'));
	?>
</div>