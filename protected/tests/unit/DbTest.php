<?php

class DbTest extends CTestCase
{
	public function testConnection()
	{
		// Trivial test
		// $this->assertTrue(true);
		
		// Test for DB connection.
		$this->assertNotEquals(NULL, Yii::app()->db);
		
	}
}
