<script type="text/javascript">
$(document).ready(function() {
    $('#Reason').bind('change', function() {
        var elements = $('div.reserve1').children().hide(); // hide all the elements
        var value = $(this).val();
if(value!="other"){
		 document.getElementById('reason_other').value = '';
	}
        if (value.length) { // if somethings' selected
            elements.filter('.' + value).show(); // show the ones we want
        }
    }).trigger('change');
});

</script>

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
	
	<h2><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;Contact Page</h2>

	<div class="row padmarginleftright0 rowbgcolor">
			<div class="clearfix">&nbsp;</div>
			<div class="col-xs-11 text-right">
				（<span class="redcolor">※</span>Required）<br>
			</div>
			<div class="col-xs-1">&nbsp;</div>
      <div class="clearfix"></div>
	  <?php echo $this->Form->create('Contact', array('class'=>'form-horizontal'));?>
        <div class="form-group">
          <label for="input-name" class="col-sm-3 control-label">Name<span class="redcolor">※</span></label>
          <div class="col-sm-8">
            
			<?php echo $this->Form->input('name',array('label' =>false, 'class'=>'form-control', 'placeholder'=>'Ex：Name' ));?>
            </div>
          <div class="col-sm-1"> &nbsp; </div>
        </div>
        <div class="form-group">
          <label for="input-lastname" class="col-sm-3 control-label">Last Name<span class="redcolor">※</span></label>
          <div class="col-sm-8">
            
			<?php echo $this->Form->input('lastname',array('label' =>false, 'class'=>'form-control', 'placeholder'=>'Ex：lastname' ));?>
          </div>
          <div class="col-sm-1"> &nbsp; </div>
        </div>
		<div class="form-group">
          <label for="input-Organization" class="col-sm-3 control-label">Organization<span class="redcolor">※</span></label>
          <div class="col-sm-8">
            
			<?php echo $this->Form->input('organization',array('label' =>false, 'class'=>'form-control', 'placeholder'=>'Ex：organization' ));?>
          </div>
          <div class="col-sm-1"> &nbsp; </div>
        </div>

		<div class="form-group">
          <label for="input-Email" class="col-sm-3 control-label">Email<span class="redcolor">※</span></label>
          <div class="col-sm-8">
          
			<?php echo $this->Form->input('email',array('label' =>false, 'class'=>'form-control', 'placeholder'=>'Ex：email' ));?>
          </div>
          <div class="col-sm-1"> &nbsp; </div>
        </div>

        <div class="form-group">
          <label for="input-Reason" class="col-sm-3 control-label">Reason<span class="redcolor">※</span></label>
          <div class="col-sm-8">
            
			<?php
			$options = array('feedback' => 'Feedback', 'help' => 'Help','hr' => 'HR', 'other' => 'Other');
            echo $this->Form->input('reason', array('type'=>'select','class'=>'form-control', 'id'=>'Reason','label' => false,'options' => $options,'empty'=>'Select'));
			?>
			
				<!-- start Display show -->
				<div class="reserve1">
					<div class="other">
						Reason Other<span class="redcolor">※</span>
		
						<?php echo $this->Form->input('reason_other', array('label' =>false, 'type' => 'textarea', 'rows'=>'3' ,'cols'=>'30','class'=>'form-control','id'=>'reason_other' ,'placeholder'=>"Reason other text here"));?>

					</div>	
				</div>
				<!-- start Display end  -->
          </div>
          <div class="col-sm-1"> &nbsp; </div>
        </div>
       
        <div class="form-group">
          <label for="input-reason" class="col-sm-3 control-label">Content<span class="redcolor">※</span></label>
          <div class="col-sm-8">
			
			<?php echo $this->Form->input('content', array('label' =>false, 'type' => 'textarea', 'rows'=>'3' ,'cols'=>'30','class'=>'form-control' ,'placeholder'=>"Content text here"));?>

          </div>
          <div class="col-sm-1"> &nbsp; </div>
        </div>
        
       
        
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10 padleft0 text-center">
		  
		   <a class="btn btn-info" href="../">Back</a>

                    <?php echo $this->Form->submit(__('Confirm'), array(
                        'div' => false,
                        'class' => 'btn btn-info'
                    )); ?>
                
          </div>
        </div>
		<div class="clearfix">&nbsp;</div>
         <?php echo $this->Form->end(); ?>
  </div>

</div>
<!-- main column block end -->
<div class="clearfix">&nbsp;</div>

<?php 
echo $this->Js->buffer('
  jQuery("#ContactContactForm").validate({
        rules: {
            "data[Contact][name]": "required",
            "data[Contact][lastname]": "required",
            "data[Contact][organization]": "required",
            "data[Contact][email]": {
                required: true,
                email: true,
              },
              "data[Contact][reason]": "required",
              "data[Contact][reason_other]": "required",
              "data[Contact][content]": "required",
            
        },
        messages: {
            "data[Contact][name]": "Name field is required",
            "data[Contact][lastname]": "Last Name field is required",
            "data[Contact][organization]": "Organization field is required",
            "data[Contact][email]": {
                required: "Email field is required",
                email: "Please input a valid email address",

              },
              "data[Contact][reason]": "Reason field is required",
              "data[Contact][reason_other]": "Reason other field is required",
              "data[Contact][content]": "Content field is required",
              
        }
    });  
    ');

?>
<?php
echo $this->Html->script(array('jquery.validate'), array('inline' => false));
?>

