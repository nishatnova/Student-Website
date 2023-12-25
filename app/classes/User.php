<?php


namespace App\classes;


class User
{
    public function __construct()
    {
        $this->users = [
            0 => [
                'id' => 1,
                'name' => "Nishat",
                'username' => 'nova',
                'password' => '12345'
            ],
            1 => ['id' => 2,
                'name' => "Jubery",
                'username' => 'jahan',
                'password' => '12345'],
            2 => ['id' => 3,
                'name' => "Navid",
                'username' => 'salehin',
                'password' => '12345'],
        ];
    }

    public function getAllUser()
    {
        return $this->users;
    }

}