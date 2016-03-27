<h1 align="center"> PÁGINA INICIAL</h1>

<?php echo $this->Form->create('User',  array('url' => array('controller' => 'users', 'action' => 'login'))); 
?>
<div class="col-sm-2 col-md-2 col-lg-3"></div>
<div class="col-xs-12 col-sm-8 col-md-8 col-lg-6">
	<div class="form-group  has-feedback">
		    <span class="sr-only">Email</span>
		    <div class="input-group">
		    	<div class="input-group-addon">
			    	<span class="glyphicon glyphicon-user "></span>
			    </div>
			    <?php 
			    	echo $this->Form->Input('username',array('class' => 'form-control text-center', 'label' => '', 'placeholder' => 'Nombre de Usuario', 'type' => 'text'));
				?>
		    </div>   
	</div>
		
	<div class="form-group  has-feedback">
		    <span class="sr-only">Email</span>
		    <div class="input-group">
		    	<div class="input-group-addon">
			    	<span class="glyphicon glyphicon-lock "></span>
			    </div>
			    <?php 
			    	echo $this->Form->Input('password',array('class' => 'form-control text-center', 'label' => '', 'placeholder' => 'Contraseña', 'type' => 'password'));
				?>
		    </div>   
	</div>
	<div class="col-sm-3 col-md-3 col-lg-3"></div>
	<?php
		echo $this->Form->End(array('label' => 'Acceder', 'class' => 'btn btn-primary col-xs-12 col-sm-6 col-md-6 col-lg-6'));
	?>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
		</br><?php
			echo $this->Html->link('Registrarse','/Users/add');
		?>  	
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
		<?php
			echo $this->Html->link('Recuperar contraseña','/Users/recover');
		?>  	
	</div>  	  
</div>