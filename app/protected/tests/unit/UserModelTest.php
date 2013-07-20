<?php
/**
 * Created by JetBrains PhpStorm.
 * User: cebe
 * Date: 21.06.13
 * Time: 12:17
 * To change this template use File | Settings | File Templates.
 */

class UserModelTest extends CTestCase
{
	/**
	 * @var User the user object we want to test
	 */
	protected $user;

	public function setUp()
	{
		// will run before a test
		$this->user = new User();
		parent::setUp();
	}

	public function tearDown()
	{
		// will run after a test
		$this->user = null;
		parent::tearDown();
	}

	public function testName()
	{
		$this->assertEquals('users', $this->user->tableName(),
		'the tablename is not correct');

		$user = User::model()->findByPk(1337);
		$this->assertNotNull($user, 'user should be in the database');

		$user = new User();
		$this->assertEquals('', $user->username, 'new users name should be empty');
	}

}