<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class User1Service
{
    use ConsumesExternalService;

    public $baseUri;

        /**
     * The secret to consume the User1 Service
     * @var string
     */
    public $secret;

    public function __construct()
    {
        $this->baseUri= config('services.users1.base_uri');
        $this->secret = config('services.users1.secret');
    }

    //obtain users
    public function obtainUsers1()
    {
        return $this->performRequest('GET','/users');
    }

    //create, post
    public function createUser1($data)
    {
        return $this->performRequest('POST','/users',$data);
    }

    //show, get
    public function obtainUser1($id)
    {
        return $this->performRequest('GET',"/users/{$id}");
    }

    //update
    public function editUser1($data,$id)
    {
        return $this->performRequest('PUT',"/users/{$id}",$data);
    }

    //delete
    public function deleteUser1($id)
    {
        return $this->performRequest('DELETE', "/users/{$id}");
    }
}