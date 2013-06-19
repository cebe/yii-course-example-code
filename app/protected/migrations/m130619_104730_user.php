<?php

class m130619_104730_user extends CDbMigration
{
	public function up()
	{
		$this->createTable('users', array(
			'id' => 'pk',
			'username' => 'string NOT NULL',
			'password' => 'string NOT NULL',
			'profile'  => 'text',
			'employed' => 'boolean NOT NULL DEFAULT 0',
			'company'  => 'string',
			'created'  => 'datetime NOT NULL',
			'updated'  => 'datetime',
		));
	}

	public function down()
	{
		$this->dropTable('users');
	}
}
