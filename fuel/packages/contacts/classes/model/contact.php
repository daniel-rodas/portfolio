<?php
namespace Contacts\Model;
use Orm\Model_Soft;
use Contacts\Validation;

class Contact extends Model_Soft
{
	public static function _init()
	{
		// this is called upon loading the class
		\Package::load('contacts');
	}

	protected static $_properties = array(
		'id',
        'fullname',
        'message',
		'email',
		'phone',
		'preference',
		'available',
		'created_at',
		'updated_at',
		'deleted_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validateCreate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('fullname', 'Fullname', 'required');
		$val->add_field('message', 'Message', 'required');
//		$val->add_field('url', 'Url', 'required');
		return $val;
	}
}
