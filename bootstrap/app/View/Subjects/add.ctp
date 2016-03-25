<h1 align="center"> REGISTRO ASIGNATURA</h1>
<?php echo $this->Form->create('Subject', array('url' => array('controller' => 'subjects', 'action' => 'add'))) ;
	?>
	<div class="form-group  has-feedback">
	    <span class="sr-only">Nombre de la asignatura</span>
	    <div class="input-group">
	    	<div class="input-group-addon">
		    	<span class="glyphicon glyphicon-tags "></span>
		    </div>
		    
		   <?php echo $this->Form->Input('name',array('class' => 'form-control text-center','label' => '', 'placeholder' => 'Nombre de la asignatura', 'type' => 'text'));?>
	    </div>   
	</div>

	<div class="form-group  has-feedback">
	    <span class="sr-only">Número de créditos</span>
	    <div class="input-group">
	    	<div class="input-group-addon">
		    	<span class="glyphicon glyphicon-tags "></span>
		    </div>
		    
		   <?php  echo $this->Form->Input('credits',array('class' => 'form-control text-center','label' => '', 'placeholder' => 'Número de créditos', 'type' => 'text'));?>
	    </div>   
	</div>

	<div class="form-group  has-feedback">
	    <span class="sr-only">Cuatrimeste (1-2)</span>
	    <div class="input-group">
	    	<div class="input-group-addon">
		    	<span class="glyphicon glyphicon-tags "></span>
		    </div>
		    
		   <?php echo $this->Form->Input('quarter',array('class' => 'form-control text-center','label' => '', 'placeholder' => 'Cuatrimeste (1-2)', 'type' => 'text'));?>
	    </div>   
	</div>

	<div class="form-group  has-feedback">
	    <span class="sr-only">Código asignado a la asignatura</span>
	    <div class="input-group">
	    	<div class="input-group-addon">
		    	<span class="glyphicon glyphicon-tags "></span>
		    </div>
		    
		   <?php echo $this->Form->Input('code',array('class' => 'form-control text-center','label' => '', 'placeholder' => 'código asignado a la asignatura', 'type' => 'text'));?>
	    </div>   
	</div>
	</br>
	<div class="row container text-center">
	 	<?php
	 		echo $this->Form->End(array('label' => 'Dar de alta asignatura', 'class' => 'btn btn-primary col-xs-12 col-sm-offset-4 col-sm-4 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4'));
		?>	
	 </div>