<h1 align="center"> DATOS DEL  USUARIO</h1>


<div class="form-group  has-feedback">
    <span class="sr-only">Nombre</span>
    <div class="input-group">
    	<div class="input-group-addon">
	    	<span class="glyphicon glyphicon-user "></span>
	    </div>
	    <!--<span class="input-group-addon">Nombre</span>-->
	    <input type="text" class="form-control text-center" value="<?php echo  AuthComponent::user('name')?>" disabled = "disabled"/>
    </div>
		    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
</div>
<div class="form-group has-feedback">
    <span class="sr-only">Apellidos</span>
    <div class="input-group">
    	<div class="input-group-addon">
	    	<span class=" glyphicon glyphicon-user "></span>
	    </div>
	    <input type="text" class="form-control text-center" value="<?php echo  AuthComponent::user('surname')?>" disabled = "disabled"/>
    </div>
		    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
</div>
<div class="form-group  has-feedback">
    <span class="sr-only">Nombre de usuario</span>
    <div class="input-group">
    	<div class="input-group-addon">
	    	<span class=" glyphicon glyphicon-user "></span>
	    </div>
	    <input type="text" class="form-control text-center" value="<?php echo  AuthComponent::user('username')?>" disabled = "disabled"/>
    </div>
		    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
</div>

<div class=" row">

<?php
	if (AuthComponent::user('authenticated') == 1){
		?><div class="container">
			<div class="form-group has-success has-feedback">
			    <div class="input-group">
			    	<div class="input-group-addon">
				    	<span class=" glyphicon glyphicon-envelope "></span>
				    </div>
				    <input type="text" class="form-control text-center" value="<?php echo  $email ?>" disabled = "disabled"/>
			    </div>
			    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
			</div>
		</div>
		<?php	 	
	}else{
		?><div class=" col-md-6 text-center">
		</br>
			
			<div class="form-group has-error has-feedback">
			    <span class="sr-only">Email</span>
			    <div class="input-group">
			    	<div class="input-group-addon">
				    	<span class=" glyphicon glyphicon-envelope "></span>
				    </div>
				    <input type="text" class="form-control text-center" value="<?php echo  $email ?>" disabled = "disabled"/>
			    </div>
			    <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
			
			<span class="sr-only">Escriba nuevo email</span>
		<?php	
	 	echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'changeEmail'))) ;?><br>
				<div class="input-group">
			    	<div class="input-group-addon">
				    	<span class=" glyphicon glyphicon-envelope "></span>
				    </div>
				    <?php
	 	 				echo $this->Form->Input('email',array('label' => '', 'class' => 'form-control text-center ', 'placeholder' => 'Escriba nuevo email' , 'type' => 'text'));?>
			    </div>

	 	</br><?php
	 		 echo $this->Form->End(array('label' => 'Modificar email', 'class' => 'btn btn-primary col-xs-12 col-sm-offset-4 col-sm-4 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4 '));
	 	?></br></br></div></div><?php
	 }
	 ?><div class="form-group ">
	 <?php if (AuthComponent::user('authenticated') == 0){
		?><br>
		 <div class="col-md-6 text-center">
		 <span class="sr-only">Cambiar contraseña</span>
				 <div class="form-group has-warning has-feedback">
				    <div class="input-group">
				    	<div class="input-group-addon">
					    	<span class=" glyphicon glyphicon-lock "></span>
					    </div>

					    	 <?php echo $this->Form->Input('password',array('label' => '', 'class' => 'form-control text-center', 'placeholder' => 'Cambiar Contraseña', 'type' => 'password'));?>
				    </div>
		    						
				<span class="sr-only">Repita la nueva contraseña</span><br>
				 <div class="form-group  has-feedback">
				    <div class="input-group">
				    	<div class="input-group-addon">
					    	<span class=" glyphicon glyphicon-lock "></span>
					    </div>
					<?php
				 		echo $this->Form->Input('password_2',array('label' => '', 'class' => 'form-control text-center', 'placeholder' => 'Repita la nueva Contraseña', 'type' => 'password'));?>
				    </div>
		    			

				</br><?php
				 echo $this->Form->End(array('label' => 'Modificar contraseña', 'class' => 'btn btn-primary col-xs-12 col-sm-offset-4 col-sm-4 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4 '));
			?></div></div></div>
	<?php
	}else{
			?></br><div class="container">
			 <div class="text-center"><?php
				 echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'changePass'))) ;
				 ?><span class="sr-only">Cambiar contraseña</span>
				 <div class="form-group  has-feedback has-warning">
				    <div class="input-group">
				    	<div class="input-group-addon">
					    	<span class=" glyphicon glyphicon-lock "></span>
					    </div>

					    	 <?php echo $this->Form->Input('password',array('label' => '', 'class' => 'form-control text-center', 'placeholder' => 'Cambiar Contraseña', 'type' => 'password'));?>
				    </div>
		    		
				
				<span class="sr-only">Repita la nueva contraseña</span><br>
				 <div class="form-group  has-feedback">
				    <div class="input-group">
				    	<div class="input-group-addon">
					    	<span class=" glyphicon glyphicon-lock "></span>
					    </div>
					<?php
				 		echo $this->Form->Input('password_2',array('label' => '', 'class' => 'form-control text-center', 'placeholder' => 'Repita la nueva Contraseña', 'type' => 'password'));?>
				    </div>
		    		

				</br><?php
				 echo $this->Form->End(array('label' => 'Modificar contraseña', 'class' => 'btn btn-primary col-xs-12 col-sm-offset-4 col-sm-4 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4 '));
			?></div></div></br></br>
		</div>
		<?php
	}?>
	</div>
</div>



