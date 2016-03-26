<h1 align = 'center'> Lista de asignaturas</h1>
<script>
	$(function() {
      $("#datepicker").datepicker();
	});

	$(function() {
      $("#datepicker2").datepicker();
	});
</script>

<?php
	echo $this->Form->create('Subject', array('url' => array('controller' => 'tutorials', 'action' => 'getCalendar')));
?>

</br>
<div class="row">
	<div class="form-group  has-feedback col-xs-12 col-sm-6 col-md-6 vol-lg-6">
	    <span class="sr-only">Fecha inicio</span>
	    <div class="input-group">
	    	<div class="input-group-addon">
		    	<span class="glyphicon glyphicon-calendar "></span>
		    </div>
		    <?php
		    	echo $this->Form->input('startDate', array('class' => 'form-control text-center', 'id'=>'datepicker','type'=>'text', 'label' => '', 'placeholder' => 'Fecha de inicio del calendario'));
		    ?>
		</div>
	</div>
	<div class="form-group  has-feedback col-xs-12 col-sm-6 col-md-6 vol-lg-6">
	    <span class="sr-only">Fecha fin</span>
	    <div class="input-group">
	    	<div class="input-group-addon">
		    	<span class="glyphicon glyphicon-calendar "></span>
		    </div>
		    <?php
		    	echo $this->Form->input('finishDate', array('class' => 'form-control text-center', 'id'=>'datepicker2','type'=>'text', 'label' => '', 'placeholder' => 'Fecha de fin del calendario'));
		    ?>
		</div>
	</div>

<?php 
	$num = 1;
	foreach ($subjects as $row){
		if(sizeof($subjects) == 1){
			?>
				<div class="col-md-3 col-lg-3"></div>
			<?php
		}

		?>
		<div class="form-group  has-feedback col-xs-12 col-sm-12 col-md-6 col-lg-6">
		    <span class="sr-only">Lugar o despacho</span>
		    <div class="input-group">
		    	<div class="input-group-addon">
			    	<?php
			    		echo $this->Form->checkbox($num++, array('value' => $row['Subject']['id'],'hiddenField' => false));
			    	?>
			    </div>			    
			    <span class = "form-control text-center"> 
			    	<?php
			    		echo $row['Subject']['name'];
			    	?>
				</span>
			</div>
		</div>
		<?php
		
	}
    echo $this->Form->input('numRows', array('value' => $num,'type' => 'hidden'));
	?><div class="container">
		<div class="col-sm-3 col-md-4 col-lg-4"></div>
	<?php
	echo $this->Form->end(array('label' => 'descargar calendario de las asignaturas seleccionadas', 'class' => 'btn btn-primary col-xs-12 col-sm-6 col-md-4 col-lg-4'));
?> 
</div>
</div>