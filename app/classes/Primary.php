<?php


namespace App\classes;


class Primary
{
    public $firstNumber, $lastNumber, $result, $i, $prime, $isPrime, $j;

    public function __construct($post)
    {
        $this->firstNumber = $post['first_number'];
        $this->lastNumber = $post['last_number'];

    }


    public function index()
    {
        for ($this->i = $this->firstNumber; $this->i <= $this->lastNumber; $this->i++)
        {
            $this->isPrime = true;

            for ($this->j = 2; $this->j <= ($this->i / 2); $this->j++)
            {
                if ($this->i % $this->j == 0)
                {
                    $this->isPrime = false;
                }
            }


            if($this->isPrime == true)
            {
                if($this->i > 1)
                {
                    $this->result = $this->result.$this->i." ";
                }
            }

//            return view('primary',[
//                'title' => 'primary',
//                'firstNumber' => $this->firstName,
//                'lastNumber' => $this->lastName,
//                'result' => $this->result
//            ]);


            header('Location: action.php?page=primary&&result=' . $this->result .'&&first=' . $this->firstNumber . '&&last=' . $this->lastNumber);


        }


    }


}