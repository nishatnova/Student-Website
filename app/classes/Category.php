<?php


namespace App\classes;


class Category
{
    public $categories = [];

    public function __construct()
    {
        $this->categories = [
            0 => [
                'id' => 1,
                'name' => "Celling Plant",
            ],
            1 => [
                'id' => 2,
                'name' => "Flower Plant",
            ],
            2 => [
                'id' => 3,
                'name' => "Indoor Plant",
            ],
            3 => [
                'id' => 4,
                'name' => "Other Plant",
            ],
        ];
    }

    public function getAllCategory()
    {
        return $this->categories;
    }

}