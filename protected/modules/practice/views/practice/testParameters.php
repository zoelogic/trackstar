<?php

/* testParameters.php
 * managePractice.php
 * This view page shows the following:
* -How to pass parameters to the view file testParameters.php
*  through the /practice/practice/testParameters method in 
*  the PracticeController file. 
* - The parameters param1 and param2 are passed and this 
*   view page displays those values using $param1 & $param2.
*   
*    @author Jon Swenson
*/

$this->breadcrumbs=array(
	'Practice'=>array('practice/index'),
	'Manage Practice'=>array('practice/managePractice'),
	'TestPractice',
);?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<?php 
 echo "Here is param1: $param1<br />";
 echo "Here is param2: $param2<br />";
?>
<p>You may change the content of this page by modifying the file <tt><?php echo __FILE__; ?></tt>.</p>
