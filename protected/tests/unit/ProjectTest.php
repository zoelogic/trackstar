<?php


class ProjectTest extends CDbTestCase
{
	/* testCRUD()
	 * This method is from Agile Yii web app devel P.69-70.
	 * 
	 */
	/* public function testCRUD()
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
									
	} */
	
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
	
	

}


?>
