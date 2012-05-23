<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"
/>
<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<!-- <link rel="stylesheet" type="text/css" href=" --><?php /* echo Yii::app()->request->baseUrl; */ ?> <!-- /css/main.css" /> --> 
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	
	<!-- practice CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/practice/newlayout.css" />
	<link rel="shortcut icon" type="image/x-icon" href="/images/starLogo2.gif"/>
	<title>
		
			<?php 
			/*
			 * Must have this in order to display page titles in browser
			 */
	
			echo CHtml::encode($this->pageTitle); 
			
			?>
	</title>
	
</head>
<body>
<div id="header">
Header Content Here
</div>
<?php 
	/*
	 * Bread crumbs handling below:
	 */
	if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
<?php endif?>

<?php 
	// Main content placed by render() in controller.
	echo $content; 
?>
<div id="footer">
Some Footer Content Here
</div>
</body>
</html>

