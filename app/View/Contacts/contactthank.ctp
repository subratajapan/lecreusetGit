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
	
	<h2><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;Thanks Page</h2>

	<div class="row padmarginleftright0 rowbgcolor">
		
		<div class="clearfix">&nbsp;</div>
		<div class="clearfix">&nbsp;</div>
		<div class="clearfix">&nbsp;</div>
		<div class="text-center">Thank you very much.</div>

		<div class="clearfix">&nbsp;</div>

		<div class="text-center">
			<?php

				echo $this->Html->link(
				'Top',
				'../',
				array('class' => 'btn btn-info btn-lg')
				);
			?>
		</div>
		
		<div class="clearfix">&nbsp;</div>
		<div class="clearfix">&nbsp;</div>
		<div class="clearfix">&nbsp;</div>
		
	</div>

</div>
<!-- main column block end -->

<div class="clearfix">&nbsp;</div>