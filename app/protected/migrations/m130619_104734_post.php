<?php

class m130619_104734_post extends CDbMigration
{
	/**
	 * This method contains the logic to be executed when applying this migration.
	 * @return boolean
	 */
	public function up()
	{
		$this->createTable('posts', array(
			'id' => 'pk',
			'title' => 'string NOT NULL',
			'content' => 'text',
			'tags' => 'string',
			'status' => 'integer',
			'authorId' => 'integer',
			'created' => 'datetime NOT NULL',
			'updated' => 'datetime',
			'FOREIGN KEY(authorId) REFERENCES users(id)'
		));
	}

	/**
	 * This method contains the logic to be executed when removing this migration.
	 * @return boolean
	 */
	public function down()
	{
		$this->dropTable('posts');
	}
}
