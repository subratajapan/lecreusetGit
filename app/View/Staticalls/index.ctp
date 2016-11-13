<div class="container-fluid globaltopborder"></div>

<!-- main column block start -->
<div class="container">
<div class="row padmarginleftright0">
	<!--  col 6 start -->
	<div class="col-xs-6 padleftright0 logopadtopbot1" >
		<img src="<?php echo $this->webroot ?>img/common/logo.jpg" class="img-responsive" alt="contact"/>
	</div>
	<!--  col 6 end -->

	<!--  col 6 start -->
	<div class="col-xs-6 padleftright0 logopadtopbot2 text-right" >
	
		<?php			
				echo $this->Html->link(
				' Contact ',
				'/contacts/contact',
				array('class' => 'btn btn-warning')
				);
			?>
	</div>
	<!--  col 6 end -->
</div>	
	<div class="clearfix"></div>
	
	<div class="row padmarginleftright0">
		<img src="<?php echo $this->webroot ?>img/common/hyakunennabe_b1.jpg" class="img-responsive" alt="hyakunennabe_b1"/>

		<div class="clearfix">&nbsp;</div>
	</div>

</div>
<!-- main column block end -->

<div class="clearfix">&nbsp;</div>
