<?php

namespace Skills\Validation;

/**
 * Validation product class.
 */
class Skill
{
	/**
	 * Creates a new validation instance for product create.
	 *
	 * @return Validation
	 */
	public static function create()
	{
		$validator = Validation::forge('skill');
		
		$validator->add('name', 'Name')->add_rule('required');
		
		return $validator;
	}
	
	/**
	 * Creates a new validation instance for product update.
	 *
	 * @return Validation
	 */
	public static function update()
	{
		$validator = Validation::forge('skill');
		
		$input = Input::param();
		
		if (array_key_exists('name', $input)) {
			$validator->add('name', 'Name')->add_rule('required');
		}
		
		return $validator;
	}
}
