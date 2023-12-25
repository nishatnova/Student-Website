<?php


namespace App\classes;


class SeriesSum
{
    public $startingNumber, $endingNumber, $result, $i, $resultString, $res;

    public function __construct($post)
    {
        $this->startingNumber = $post['starting_number'];
        $this->endingNumber = $post['ending_number'];

    }

    public function index()
    {

        $this->result = 0;
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            $this->resultString = $this->resultString.$this->i.'+';
            $this->result += $this->i;
        }



        $this->res = rtrim($this->resultString,'+').' = '.$this->result;
        //echo $this->res;
        //exit();
        header('Location: action.php?page=series-sum&&result=' . base64_encode($this->res));

    }

}