<?php


namespace App\classes;
use App\classes\User;


class Auth
{
    public $userName, $password, $user, $users;

    public function login($post)
    {
        $this->userName = $post['user_name'];
        $this->password = $post['password'];

        $this->user = new User();
        $this->users = $this->user->getAllUser();
        foreach ($this->users as $user)
        {
            if ($user['username'] == $this->userName && $user['password'] == $this->password )
            {
                echo 'ok';
                exit();
            }
        }
        header('Location: action.php?page=login&&msg=Sorry .. invalid cradential.');

    }

}