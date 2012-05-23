<?php

class PracticeController extends Controller
{
	// Overide default layout with custom layout for this controller.
	public $layout='newlayout';	
	
	public function actionManagePractice()
	{
		// If wanted you can test set $_GEt parameters this way.
		if (isset($_GET['param1'])){
			echo "Parameter test past.<br />The param1 value is: {$_GET['param1']}";
		} 
		
		$this->render('managePractice');
	}

	/* actionTestPractice
	 *
	 */
	public function actionTestPractice()
	{
		$this->render('testPractice');
	}
	
	/* actionTestParameters
	 * This forces the function to handle the parameter $param1.
	* If there is not a parameter called param1 it will not validate
	* and will fail. The parameter name must match or it fails.
	*/
	public function actionTestParameters($param1, $param2)
	{
		
		/*
		 * Example of how to pass parameters through a bread crumbs
		 * link to this method.  Then, we pass the parameters
		 * through to the view to dispaly. 
		 */
		$this->render('testParameters' , array(
						'param1'=>$param1 ,
						'param2'=>$param2
						));
		
	}

	public function actionIndex()
	{
		
		$this->render('index');
	}

	// -----------------------------------------------------------
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
	
	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			/* '1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			), */
			'page'=>array(
						'class'=>'CViewAction',
			),
		);
	}
	
}