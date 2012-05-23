<?php
$this->breadcrumbs=array(
	'Practice',
);?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>You may change the content of this page by modifying the file <tt><?php echo __FILE__; ?></tt>.</p>


<div class="practiceModuleLink ">
<?php echo CHtml::link('Manage Practice Section',array('/practice/practice/managePractice',
                   'param1'=>'value1'), array('target'=>'_target')); 
?>
</div>