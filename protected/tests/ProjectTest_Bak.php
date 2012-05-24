<?php


class ProjectTest extends CDbTestCase
{
	public $fixtures=array
	(
			// from fixture name projects to model class Project
			// This refers to AR class named Project. If not AR use :tbl_name. p.88
			'projects'=>'Project',
	);
	
	
	
	public function testRead()
	{
		$retrievedProject = $this->projects('project1');
		$this->assertTrue($retrievedProject instanceof Project);
		$this->assertEquals('Test Project 1',$retrievedProject->name);
	}
	
	
	

}


?>
