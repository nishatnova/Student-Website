<?php


namespace App\classes;


class Calculator
{
    public $firstNumber, $lastNumber, $choice, $result;

    public function __construct($post)
    {


            $this->firstNumber = $post['first_number'];
            $this->lastNumber = $post['last_number'];
            $this->choice = $post['choice'];
    }

    public function index()
    {
        switch ($this->choice)
        {
            case '+':
                $this->result = $this->add();
                break;
            case '-':
                $this->result = $this->sub();
                break;
            case '*':
                $this->result = $this->multi();
                break;
            case '/':
                $this->result = $this->division();
                break;
            case '%':
                $this->result = $this->reminder();
                break;
        }
        header('Location: action.php?page=calculator&&result='.$this->result);
    }
    public function  add()
    {
        return $this->firstNumber + $this->lastNumber;
    }
    public function  sub()
    {
        return $this->firstNumber - $this->lastNumber;
    }
    public function  multi()
    {
        return $this->firstNumber * $this->lastNumber;
    }
    public function  division()
    {
        return $this->firstNumber / $this->lastNumber;
    }
    public function  reminder()
    {
        return $this->firstNumber % $this->lastNumber;
    }

}