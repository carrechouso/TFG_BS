
<div class="row">
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
<h1 align="center"> alumnos  validados</h1>
	<?php
		foreach($validateUsers as $row){
			?>
				<div class="form-group  has-feedback">
				    <span class="sr-only">Datos del cambio puntual</span>
				    <div class="input-group">
				    	<div class="input-group-addon">
					    	<span class="glyphicon glyphicon-user "></span>
					    </div>
					   	<span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo $row['User']['type'].' :'.$row['User']['name'].' '.$row['User']['surname'];?></span>
					   	<span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo $row['User']['username'];?></span>
					    <span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo $row['User']['email'];?></span>
					    <div class="input-group-addon">
					    						   		
					   		<?php
					   			
					   			echo $this->form->create('User', array('url' => array('controller' => 'Users', 'action' => 'removeAuth')));
								echo $this->form->input('id', array('type' => 'hidden', 'value' => $row['User']['id']));
								echo $this->form->input('email', array('type' => 'hidden', 'value' => $row['User']['email']));
								
								echo $this->Form->button('', array(
								    'type' => 'submit',
								    'class' => 'btn btn-danger glyphicon glyphicon-minus',
								    'escape' => false,
								));
								echo $this->Form->End();
					   		?>
					    </div>
					</div>
				</div>
			<?php		
		}

	?>
	</div>
		
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">		
	<h1 align="center"> alumnos no validados</h1>
		<?php
			foreach($NonvalidateUsers as $row){
				?>
				<div class="form-group  has-feedback">
				    <span class="sr-only">Datos del cambio puntual</span>
				    <div class="input-group">
				    	<div class="input-group-addon">
					    	<span class="glyphicon glyphicon-user "></span>
					    </div>
					   	<span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo $row['User']['type'].' :'.$row['User']['name'].' '.$row['User']['surname'];?></span>
					   	<span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo $row['User']['username'];?></span>
					    <span class="form-control text-center" style="overflow-y: auto; overflow-x: hidden"><?php echo $row['User']['email'];?></span>
					    <div class="input-group-addon">
					    	
						<?php					   			
					   			echo $this->form->create('User', array('url' => array('controller' => 'Users', 'action' => 'addAuth')));
								echo $this->form->input('id', array('type' => 'hidden', 'value' => $row['User']['id']));
								echo $this->form->input('email', array('type' => 'hidden', 'value' => $row['User']['email']));
								
								echo $this->Form->button('', array(
								    'type' => 'submit',
								    'class' => 'btn btn-info glyphicon glyphicon-plus',
								    'escape' => false,
								));
								echo $this->Form->End();
					   		?>
					    </div>	   		
					</div>
				</div>
		<?php	
			}
		?>
		</div>
</div>
