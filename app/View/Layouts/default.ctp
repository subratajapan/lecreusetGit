<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title></title>
<meta name="Description" content="">
<meta name="keywords" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php 
echo $this->element('headerlink');
?>
</head>
<body>

<?php echo $this->fetch('content'); ?>

<?php 
echo $this->element('footer');
?>

<?php 
echo $this->element('footerlink');
echo $this->fetch('script');
echo $this->Js->writeBuffer(array('safe'=>true));
?>
</body>
</html>