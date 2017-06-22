<?php
/**
 * Created by PhpStorm.
 * User: Rodas
 * Date: 3/30/2016
 * Time: 4:19 PM
 */

namespace Contacts\Validation;

use Contacts\Validation;
//use Contacts\Model\Contact as ModelContact;

class Contact extends Validation
{
    /**
     * Creates a new validation instance for contact create.
     *
     * @return Validation
     */
    public static function create()
    {
        $validation = Validation::forge('create');
        $validation->add_field('fullname', 'Full Name', 'required|max_length[255]');
        $validation->add_field('message', 'Message', 'required|min_length[3]');
//        $validation->add_field('email', 'Email', 'valid_email|max_length[75]');
//        $validation->add_field('phone', 'Phone', 'max_length[20]');
//        $validation->add_field('preference', 'Preference', 'max_length[5]');
//        $validation->add_field('available', 'Available', 'max_length[255]');

        return $validation;
    }
}