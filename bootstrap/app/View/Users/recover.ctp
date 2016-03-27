<h1 align="center"> RECUPERAR DATOS</h1>
<b>
	<div class="form-group  has-feedback">
		    <span class="sr-only">Email</span>
		    <div class="input-group">
		    	<div class="input-group-addon">
			    	<span class="glyphicon glyphicon-envelope "></span>
			    </div>
			    <?php 
			    	echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'recover'))) ;
					echo $this->Form->Input('email',array('class' => 'form-control text-center', 'label' => '', 'placeholder' => 'introduce tu email', 'type' => 'text'));
				?>
		    </div>   
	</div>
	
	<div class="col-sm-3 col-md-4 col-lg-4"></div>
	<?php
		echo $this->Form->End(array('label' => 'recuperar datos', 'class' => 'btn btn-primary col-xs-12 col-sm-6 col-md-4 col-lg-4'));
	?>
</b>