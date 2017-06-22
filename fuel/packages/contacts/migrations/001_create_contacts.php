<?php

namespace Fuel\Migrations;

class Create_contacts
{
	public function up()
	{
		\DBUtil::create_table('contacts', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'fullname' => array('constraint' => 255, 'type' => 'varchar'),
			'message' => array('type' => 'text'),
			'email' => array('constraint' => 75, 'type' => 'varchar'),
			'phone' => array('constraint' => 20, 'type' => 'varchar'),
			'preference' => array('constraint' => ['phone', 'email', 'none'], 'type' => 'enum'),
			'available' => array('constraint' => 255, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'deleted_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('contacts');
	}
}