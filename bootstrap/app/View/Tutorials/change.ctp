
<script>
$(function() {
      $("#datepicker").datepicker();
});

$(function() {
      $("#datepicker2").datepicker();
});
</script>
<?php 
	echo $this->Form->create('Change', array('url' => array('controller' => 'changes', 'action' => 'add')));
	
	?>
</br>
<b>
<div class = "row">
	<div class="form-group  has-feedback col-xs-12 col-sm-6 col-md-6 vol-lg-6">
	    <span class="sr-only">Fecha nueva</span>
	    <div class="input-group">
	    	<div class="input-group-addon">
		    	<span class="glyphicon glyphicon-calendar "></span>
		    </div>
		    <?php
		    	echo $this->Form->input('newDate', array('class' => 'form-control text-center', 'id'=>'datepicker','type'=>'text', 'label' => '', 'placeholder' => 'Fecha nueva'));
		    ?>
		</div>
	</div>
	
	<div class="form-group  has-feedback col-xs-12 col-sm-6 col-md-6 vol-lg-6">
	    <span class="sr-only">Fecha cambiada</span>
	    <div class="input-group">
	    	<div class="input-group-addon">
		    	<span class="glyphicon glyphicon-calendar "></span>
		    </div>
		    <?php
		    	echo $this->Form->input('date', array('class' => 'form-control text-center', 'id'=>'datepicker2','type'=>'text', 'label' => '', 'placeholder' => 'Fecha cambiada'));
		    ?>
		</div>
	</div>
</div>

	<?php
	echo $this->Form->input('tutorial_id', array('type' => 'hidden', 'value' => $id_tutorial));
	echo $this->Form->input('user_id', array('type' => 'hidden', 'value' => $id_user));
	
?>
<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">	
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
			    	echo $this->Form->minute('start_minute', array('interval' => 10, 'default' => '00'));
				?></div>
		    </div>
		</div>
	
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">	
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

<div class="form-group  has-feedback">
	    <span class="sr-only">Lugar o despacho</span>
	    <div class="input-group">
	    	<div class="input-group-addon">
		    	<span class="glyphicon glyphicon-home "></span>
		    </div>
		    <?php
		    	echo $this->Form->Input('place',array('class' => 'form-control text-center', 'label' => '', 'placeholder' => 'Lugar o despacho', 'type' => 'text'));
		    ?>
		</div>
	</div>

</br>
<div class="row container">
	<?php
		echo $this->Form->End(array('label' => 'Confirmar cambio puntual tutoría', 'class' => 'btn btn-primary col-xs-12 col-sm-offset-4 col-sm-4 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4'));	
	?>
</div>
</b>
