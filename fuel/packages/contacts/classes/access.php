<?php
/**
 * Created by PhpStorm.
 * User: Rodas
 * Date: 8/8/2015
 * Time: 12:54 AM
 */

namespace Contacts;

use Contacts\Model\Contact as ModelContact;
use Contacts\Validation\Contact as ValidationContact;

class Access
{
    // TODO https://en.wikipedia.org/wiki/Fluent_interface#PHP
    protected $id;
    protected $name;
    protected $description;
    protected $slug;
    protected $url;
    protected $parent_id;

    /*
     * @var $model will hold the value of Model\Skill
     */
    public $model;
    protected $validation;

    public function __construct()
    {
        $this->model = ModelContact::forge();
//        $this->validation = ValidationContact::forge();
    }

    public function set( $key, $value )
    {
            $this->$key = $value;
    }

    public function get( $identifier , $field = 'id' )
    {
            return $this->model = $this->model->query()->where( $field , $identifier )->get_one();
    }

    public function getAll()
    {
            return $this->model = $this->model->query()->get();
    }


    public function getAllBriefList()
    {
            return $this->model = $this->model->query()
                ->select( 'id', 'fullname', 'email', 'phone')->get();
    }

    /**
     * @param $name
     * @param $msg
     * @param $email
     * @param $phone
     * @param $preference
     * @param $available
     * @return static
     * @throws \Exception
     */
    public function create( $name , $msg , $email , $phone , $preference , $available )
    {
        $val = $this->model->validateCreate('create_contact');
        if ( $val->run( [ 'fullname' => $name , 'message' => $msg ]) )
        {
            $this->model->fullname = $name;
            $this->model->message = $msg;
            $this->model->email = $email;
            $this->model->phone = $phone;
            $this->model->preference = $preference;
            $this->model->available = $available;

            try {

                $this->model->save();
                return $this->model;

            } catch ( \Fuel\CoreValidation_Error $e) {
                // returns the individual ValidationError objects
                return $e;
            }

        } else
        {
            return $val->error();
        }

    }
}