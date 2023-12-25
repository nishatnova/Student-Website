<?php


namespace App\classes;


class Product
{
    public $products=[], $data=[];

    public function __construct()
    {
        $this->products=[
            0 => [
                'id' => 1,
                'category_id' => 1,
                'name' => "New Plant",
                'price' => "550 Tk",
                'description' => "New Plant Description",
                'image' => "assets/img/c22.jpg"

            ],
            1 => [
                'id' => 2,
                'category_id' => 2,
                'name' => "New Plant",
                'price' => "450 Tk",
                'description' => "New Plant Description",
                'image' => "assets/img/c23.jpg"

            ],
            2 => [
                'id' => 3,
                'category_id' => 3,
                'name' => "New Plant",
                'price' => "350 Tk",
                'description' => "New Plant Description",
                'image' => "assets/img/c24.jpg"

            ],
            3 => [
                'id' => 4,
                'category_id' => 4,
                'name' => "New Plant",
                'price' => "250 Tk",
                'description' => "New Plant Description",
                'image' => "assets/img/c25.jpg"

            ],



        ];
    }

    public function getAllProduct()
    {
        return $this->products;
    }

    public function getProductByCategoryId($id)
    {
       foreach ($this->products as $product)
       {
           if ($product['category_id'] == $id)
           {
               array_push($this->data, $product);
           }
       }

       return $this->data;
    }


}