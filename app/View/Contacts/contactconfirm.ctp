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
	
	<h2><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;Confirm Page</h2>

	<div class="row padmarginleftright0 rowbgcolor">
		<div class="clearfix">&nbsp;</div>
		
		<?php echo $this->Form->create('Contact',array('url'=>'contact/preview','class'=>'form-horizontal'));?>

		<div class="form-group">
			<label for="input-name" class="col-sm-3 control-label2">Name:</label>
			<div class="col-sm-8">
			<?php echo $this->request->data['Contact']['name']; ?>
			<?php echo $this->Form->hidden('name');?>
			</div>
			<div class="col-sm-1"> &nbsp; </div>
		</div>
		
		<div class="form-group">
			<label for="input-lastname" class="col-sm-3 control-label2">Last Name:</label>
			<div class="col-sm-8">
			<?php echo $this->request->data['Contact']['lastname']; ?>
			<?php echo $this->Form->hidden('lastname');?>
			</div>
			<div class="col-sm-1"> &nbsp; </div>
		</div>
		
		<div class="form-group">
			<label for="input-Organization" class="col-sm-3 control-label2">Organization:</label>
			<div class="col-sm-8">
			<?php echo $this->request->data['Contact']['organization']; ?>
			<?php echo $this->Form->hidden('organization');?>
			</div>
			<div class="col-sm-1"> &nbsp; </div>
		</div>

		<div class="form-group">
			<label for="input-Email" class="col-sm-3 control-label2">Email:</label>
			<div class="col-sm-8">
			<?php echo $this->request->data['Contact']['email']; ?>
			<?php echo $this->Form->hidden('email');?>
			</div>
			<div class="col-sm-1"> &nbsp; </div>
		</div>

		<div class="form-group">
			<label for="input-Reason" class="col-sm-3 control-label2">Reason:</label>
			<div class="col-sm-8">
				<?php echo $this->request->data['Contact']['reason']; ?>
				<?php echo $this->Form->hidden('reason');?>
				<?php if( $this->request->data['Contact']['reason']=="other"){?>
				<br />
				<?php echo $this->request->data['Contact']['reason_other']; ?>
				<?php echo $this->Form->hidden('reason_other');?>
				<?php } ?>
			</div>
			<div class="col-sm-1"> &nbsp; </div>
		</div>

		<div class="form-group">
			<label for="input-reason" class="col-sm-3 control-label2">Content:</label>
			<div class="col-sm-8">
			<?php echo $this->request->data['Contact']['content']; ?>
			<?php echo $this->Form->hidden('content');?>
			</div>
			<div class="col-sm-1"> &nbsp; </div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10 padleft0 text-center">
			<button type="button" class="btn btn-info" onClick="window.history.go(-1)">Back</button>  

			<?php echo $this->Form->submit(__('Send'), array(
			'div' => false,
			'class' => 'btn btn-success'
			)); ?>
			</div>
		</div>

		<div class="clearfix">&nbsp;</div>
		<?php echo $this->Form->end(); ?>
	</div>

</div>
<!-- main column block end -->

<div class="clearfix">&nbsp;</div>