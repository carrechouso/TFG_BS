<h1 align="center"> REGISTRO USUARIO</h1>
<b>
<?php echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'add'))) ;
	?>
	<div class="form-group  has-feedback">
		    <span class="sr-only">Nombre</span>
		    <div class="input-group">
		    	<div class="input-group-addon">
			    	<span class="glyphicon glyphicon-user "></span>
			    </div>
			    
			   <?php  echo $this->Form->Input('name',array('class' => 'form-control text-center', 'label' => '', 'placeholder' => 'Nombre', 'type' => 'text'));?>
		    </div>   
		</div>
		
		<div class="form-group  has-feedback">
		    <span class="sr-only">Apellidos</span>
		    <div class="input-group">
		    	<div class="input-group-addon">
			    	<span class="glyphicon glyphicon-user "></span>
			    </div>
			    
			   <?php  echo $this->Form->Input('surname',array('class' => 'form-control text-center', 'label' => '', 'placeholder' => 'Apellidos', 'type' => 'text'));?>
		    </div>   
		</div>
		
		<div class="form-group  has-feedback">
		    <span class="sr-only">Nombre de usuario</span>
		    <div class="input-group">
		    	<div class="input-group-addon">
			    	<span class="glyphicon glyphicon-user "></span>
			    </div>
			    
			   <?php  echo $this->Form->Input('username',array('class' =>'form-control text-center', 'label' => '', 'placeholder' => 'Nombre de Usuario', 'type' => 'text'));?>
		    </div>   
		</div>

		<div class="form-group  has-feedback">
		    <span class="sr-only">Contraseña</span>
		    <div class="input-group">
		    	<div class="input-group-addon">
			    	<span class="glyphicon glyphicon-lock "></span>
			    </div>
			    
			   <?php  echo $this->Form->Input('password',array('class' => 'form-control text-center' ,'label' => '', 'placeholder' => 'Contraseña', 'type' => 'password'));?>
		    </div>   
		</div>

		<div class="form-group  has-feedback">
		    <span class="sr-only">Repita la contraseña</span>
		    <div class="input-group">
		    	<div class="input-group-addon">
			    	<span class="glyphicon glyphicon-lock "></span>
			    </div>
			    
			   <?php  echo $this->Form->Input('password_2',array('class' => 'form-control text-center' ,'label' => '', 'placeholder' => 'Repita la Contraseña', 'type' => 'password'));?>
		    </div>   
		</div>

		<div class="form-group  has-feedback">
		    <span class="sr-only">Email</span>
		    <div class="input-group">
		    	<div class="input-group-addon">
			    	<span class="glyphicon glyphicon-envelope "></span>
			    </div>
			    
			   <?php  echo $this->Form->Input('email',array('class' => 'form-control text-center', 'label' => '', 'placeholder' => 'Email', 'type' => 'text'));?>
		    </div>   
		</div>
	<?php
		echo $this->Form->Input('type',array('label' => '', 'placeholder' => 'Contraseña', 'type' => 'hidden', 'value' => 'alumno'));
	?>
	<div class="col-sm-3 col-md-4 col-lg-4"></div>
	<?php
	 	echo $this->Form->End(array('label' => 'Crear nuevo usuario','class' => 'btn btn-primary col-xs-12 col-sm-6 col-md-4 col-lg-4'));
?>
</b>