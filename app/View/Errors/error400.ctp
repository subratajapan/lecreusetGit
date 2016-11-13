
<div class="container-fluid globaltopborder"></div>

<!-- main column block start -->
<div class="container">

	<!--  col 12 start -->
	<div class="col-md-12 padleftright0 logopadtopbot1" >
		<?php
			echo $this->Html->image("common/logo.jpg", array(
			"alt" => "logo","class"=>"img-responsive overwhite",
			'url' => array('controller' => 'staticalls', 'action' => 'index')
			));
		?>
	</div><!--  col 12 end -->

	<div class="clearfix"></div>
	
	<div class="row padmarginleftright0 rowbgcolor">
		
		<div class="text-center">
	<h2>Error</h2>


<div class="alert alert-warning" role="alert" style="margin-left:15px;margin-right:15px;">
<h2><?php echo $message; ?></h2>
</div>


<div class="alert alert-danger" role="alert" style="margin-left:15px;margin-right:15px;">
	<strong><?php echo __d('cake', 'Error'); ?>: </strong>
	<?php printf(
		__d('cake', 'The requested address %s was not found on this server.'),
		"<strong>'{$url}'</strong>"
	); ?>
</div>
<div >
<?php
if (Configure::read('debug') > 0):
	echo $this->element('exception_stack_trace');
endif;
?>  
</div>   

		</div>

		<div class="clearfix">&nbsp;</div>

		<div class="text-center">
			<?php

				echo $this->Html->link(
				'Top',
				'../',
				array('class' => 'btn btn-warning btn-lg')
				);
			?>
		</div>
		
		<div class="clearfix">&nbsp;</div>
	
	</div>

</div>
<!-- main column block end -->

<div class="clearfix">&nbsp;</div>

   
