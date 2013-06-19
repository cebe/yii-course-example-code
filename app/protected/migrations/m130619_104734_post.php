<?php

class m130619_104734_post extends CDbMigration
{
	public function up()
	{
		$this->createTable('posts', array(
			'id' => 'pk',
			'title' => 'string',
			'content' => 'text',
			'tags' => 'string',
			'status' => 'integer',
			'authorId' => 'integer',
			'created' => 'datetime',
			'updated' => 'datetime',
			'FOREIGN KEY(authorId) REFERENCES users(id)'
		));
	}

	public function down()
	{
		$this->dropTable('posts');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}
