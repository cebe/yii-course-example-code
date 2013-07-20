<?php

class m130619_104730_user extends CDbMigration
{
	/**
	 * This method contains the logic to be executed when applying this migration.
	 * @return boolean
	 */
	public function up()
	{
		// create a 'users' table by using abstract types.
		$this->createTable('users', array(
			'id' => 'pk',
			'username' => 'string NOT NULL',
			'password' => 'string NOT NULL',
			'profile'  => 'text',
			'employed' => 'boolean NOT NULL DEFAULT 0', // default values are recognized by CActiveRecord
			'company'  => 'string',
			'created'  => 'datetime NOT NULL',
			'updated'  => 'datetime',
		));
		//$this->addColumn('users', 'employee', '...');
	}

	/**
	 * This method contains the logic to be executed when removing this migration.
	 * @return boolean
	 */
	public function down()
	{
		$this->dropTable('users');

		// you may cause a migration to fail by returning false:
//		return false; // this works in both, up() and down() method.
	}
}
