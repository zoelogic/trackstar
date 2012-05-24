<?php


class ProjectTest extends CDbTestCase
{
	public $fixtures=array
	(
			// from fixture name projects to model class Project
			// This refers to AR class named Project. If not AR use :tbl_name. p.88
			'projects'=>'Project',
	);
	
	/* testCRUD()
	 * This method is from Agile Yii web app devel P.69-70.
	 * 
	 */
	public function testCRUD()
	{
		
			//Create a new project
			$newProject=new Project;
			$newProjectName = 'Test Project 1';
			$newProject->setAttributes(
					array(
							// Note setAttributes() sets attributes in bulk way.
							'name' => $newProjectName,
							'description' => 'Test project number one',
							'create_time' => '2010-01-01 00:00:00',
							'create_user_id' => 1,
							'update_time' => '2010-01-01 00:00:00',
							'update_user_id' => 1,
							)
					);
			// We pass the optional false parameter into the save() method to tell it to bypass 
 			// any data validation of the attributes. We then test to make sure the returned value from 
			// saving the new record is true, which indicates a successful save.
			// p. 69-70
			$this->assertTrue($newProject->save(false));
			
			//READ back the newly created project
			$retrievedProject=Project::model()->findByPk($newProject->id); /* $newProject->id retrieves the id of the latest insert.*/
			$this->assertTrue($retrievedProject instanceof Project);
			$this->assertEquals($newProjectName,$retrievedProject->name);  /* $retrievedProject->name get Table row name record. */

			//UPDATE the newly created project
			$updatedProjectName = 'Updated Test Project 1';
			$newProject->name = $updatedProjectName;  /* This will update the $newProject->name
														 which is the name value of new Project Object
														 made in the create project section.
														 */
			$this->assertTrue($newProject->save(false)); /*asserts record was saved.*/
			
			//DELETE the project p.72 for details.
			$newProjectId = $newProject->id;  /* Put project id into a variabe before deleting it.*/
			$this->assertTrue($newProject->delete());/*Delete the project based on it's id.*/
			$deletedProject=Project::model()->findByPk($newProjectId); /*Try to find project with that id*/
			$this->assertEquals(NULL,$deletedProject); /*Assert result to find project was NULL.*/
				
				
									
	}
	
	/* testRetrieveRecord()
	 * I built this test method to learn how 
	 * to build my own test methods.
	 * 
	 * 
	 */
	public function testRetrieveRecord()
	{
		//READ back the newly created project
		//$retrievedProject=Project::model()->findByPk($newProject->id);
		/* This test worked.  You can retreive a Project object by primary key
		 * Then, you can access elements in that row based on the primar key.   
		 * This is pretty nice :-)
		 */
		$newProjectName = 'Test Project 1';
		$retrievedProject=Project::model()->findByPk(1);
		$this->assertTrue($retrievedProject instanceof Project);
		$this->assertEquals($newProjectName,$retrievedProject->name);
		
		
	} 
	
	public function testRead()
	{
		$retrievedProject = $this->projects('project1');
		$this->assertTrue($retrievedProject instanceof Project);
		$this->assertEquals('Test Project 1',$retrievedProject->name);
	}
	
	
	

}


?>
