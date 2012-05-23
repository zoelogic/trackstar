<?php
/* managePractice.php
 * This view page shows the following:
 * -How to set the page title for display
 * 	in the browser title bar.
 * -How to set bread crumbs with parameters set in the 
 *  get link value.   
 * -The bread crumb with link values are passed to
 *  the practice/practice/testParameter controller.  
 *  @author Jon Swenson
 */

# In view file set the pageTitle attribute to 
# control the pageTitle displayed by the browser. 
$this->pageTitle = Yii::app()->name . ' - Manage Practice';

# Set bread crumbs value here.
# ?param1=test
$this->breadcrumbs=array(
	'Index'=>array('practice/index'),
	'Test Parameters'=>array('practice/testParameters', 
			'param1' => 'test', 
			'param2'=>'test2'),
	'ManagePractice',
		# 'Practice'=>array('practice/testPractice', 'param1'=>'test'),
		#  'Sample post'=>array('post/view', 'id'=>12),
);?>

<?php /* $this->pageTitle=Yii::app()->controller->module->name . 'Manage Practice';  */

	// This is how you access the module name. 
   /* $moduleName = Yii::app()->controller->module->name . ' Manage Practice'; */

   	// This is how you access the application name. 
	/* $name = Yii::app()->name; */
	// Page Title is:
	/* echo "App name is $this->pageTitle <br /> "; */
	// Module name is:
	/* echo "Module name is $moduleName <br />"; */
?>

<h1>Manage Practice Main Page<?php /* echo $this->id . '/' . $this->action->id; */ ?></h1>

<div id="">

</div>

<img src="images/starLogo.gif" alt="starLogo"/>
		<img src="images/starLogo2.gif" alt="starLogo2"/>

<p>You may change the content of this page by modifying the file <tt><?php /* echo __FILE__; */ ?></tt>.</p>

<br /><br />
<p>Click Test Parameters link in bread crumbs to see how <br />
parameters are past through a bread crumb link.</p>
