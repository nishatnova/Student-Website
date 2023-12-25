<?php


namespace App\classes;


class Series
{
    public $startingNumber, $endingNumber, $result, $i, $option, $number;

    public function __construct($post)
    {
        $this->startingNumber = $post['starting_number'];
        $this->endingNumber = $post['ending_number'];
        $this->option = $post['option'];
    }

    public function index()
    {
        switch ($this->option)
        {
            case 'odd':
                $this->result = $this->odd();
                break;
            case 'even':
                $this->result = $this->even();
                break;
            case 'all':
                $this->result = $this->getall();
                break;

        }

        header('Location: action.php?page=series&&result=' . $this->result);
    }

    public function even()
    {

        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {

            if ($this->i%2==0)
            {
                $this->number = $this->number . $this->i . ' ';
            }

        }
        return $this->number;

        /*

        for ($this->i = $this->startingNumber; $this->i >= $this->endingNumber; $this->i--)
        {


            if ($this->i % 2 == 0)
            {

                $this->number = $this->number . $this->i . ' ';
                //return $this->number;
            }
        }
        return $this->number;
        */

    }

    public function odd()
    {

        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            if ($this->i % 2 != 0)
            {
                $this->number = $this->number . $this->i . ' ';
            }
        }
        return $this->number;
        /*

        for ($this->i = $this->startingNumber; $this->i >= $this->endingNumber; $this->i--)
        {
            if ($this->i % 2 != 0)
            {
                $this->number = $this->number . $this->i . ' ';
                return $this->number;
            }
        }
        return $this->number;
        */

    }

    public function getall()
    {
        if($this->startingNumber < $this->endingNumber)
        {
            for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
            {
                $this->number = $this->number . $this->i . ' ';

            }


        }
        else
        {
            for ($this->i = $this->startingNumber; $this->i >= $this->endingNumber; $this->i--)
            {
                $this->number = $this->number . $this->i . ' ';

            }


        }
        return $this->number;


    }
}
