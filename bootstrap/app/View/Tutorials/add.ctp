<h1 align="center"> REGISTRO Tutoría</h1>
<?php 
	$days = array('lunes' => 'lunes', 'martes' => 'martes', 'miercoles' => 'miercoles','jueves' => 'jueves', 'viernes' => 'viernes');
	
	echo $this->Form->create('Tutorial', array('url' => array('controller' => 'tutorials', 'action' => 'add'))) ;
	
	?>
	<div class="form-group  has-feedback">
	    <span class="sr-only">Código de la asignatura</span>
	    <div class="input-group">
	    	<div class="input-group-addon">
		    	<span class="glyphicon glyphicon-lock "></span>
		    </div>
		    <?php
		    	echo $this->Form->Input('subject_id',array('class' => 'form-control text-center','label' => '', 'placeholder' => 'código de la asignatura', 'type' => 'text'));
		    ?>
		</div>
	</div>
<?php
	
	if(AuthComponent::user('type') == 'admin'){
		?>
		<div class="form-group  has-feedback">
		    <span class="sr-only">Nombre de usuario del profesor</span>
		    <div class="input-group">
		    	<div class="input-group-addon">
			    	<span class="glyphicon glyphicon-user "></span>
			    </div>
			    <?php
			    	echo $this->Form->Input('user_id',array('class' => 'form-control text-center', 'label' => '', 'placeholder' => 'nombre usuario del profesor', 'type' => 'text'));
			    ?>
			</div>
		</div>
		<?php		
	}else{
		echo $this->Form->Input('user_id',array('type' =>'hidden','value' => AuthComponent::user('username')));
	}
	
	
	
	?>
	<div class="form-group  has-feedback">
	    <span class="sr-only">Lugar de la tutoría</span>
	    <div class="input-group">
	    	<div class="input-group-addon">
		    	<span class="glyphicon glyphicon-home "></span>
		    </div>
		    <?php
		    	echo $this->Form->Input('place',array('class' =>'form-control text-center', 'label' => '', 'placeholder' => 'número del despacho o lugar de la tutoría', 'type' => 'text'));
		    ?>
		</div>
	</div>
		
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">	
		    <span class="sr-only">Día</span>
		    <div class="input-group">
		    	<div class="input-group-addon">
			    	<span class="">Día</span>
			    </div>
			    
				<div class="input-group-addon">
			    
			    <?php
			    	echo $this->Form->input('day', array('label' => '','options' => $days, 'default' => 'l'));
				?></div>
				
		    </div>
		</div>
	
		
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">	
		    <span class="sr-only">Hora inicio</span>
		    <div class="input-group">
		    	<div class="input-group-addon">
			    	<span class="">Hora Inicio</span>
			    </div>
				<div class="input-group-addon">
			    
			    <?php
			    	echo $this->Form->hour('start_hour', 'true',  array('default' => '10'));
				?></div>
				<span  class="input-group-addon">:</span>
				
				<div class="input-group-addon">
			    
			    <?php
			    	echo $this->Form->minute('start_minute', array('interval' => 10, 'default' => '00', 'style' => 'widht:100%'));
				?></div>
		    </div>
		</div>
	
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">	
	    <div class="form-group  has-feedback">
		    <span class="sr-only">Hora final</span>
		    <div class="input-group">
		    	<div class="input-group-addon">
			    	<span class=""> Hora final&nbsp;&nbsp;</span>
			    </div>
				<div class="input-group-addon">
			    
			    <?php
			    	echo $this->Form->hour('finish_hour','true', array('default' => '12'));
				?></div>
				<span  class="input-group-addon">:</span>
				
				<div class="input-group-addon">
			    
			    <?php
			    	echo $this->Form->minute('finish_minute', array('interval' => 10,'default' => '00'));
				?></div>
		    </div>
		</div>
	</div>
</div>
</br>
<div class="row">
		<?php
 			echo $this->Form->End(array('label' => 'Crear nueva tutoría', 'class' => 'btn btn-primary col-xs-12 col-sm-offset-4 col-sm-4 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4' ));
		?>	
	</div>	