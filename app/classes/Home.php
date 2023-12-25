<?php


namespace App\classes;
use App\classes\Product;
use App\classes\Category;


class Home
{
    public $msg, $product, $products, $category, $categories, $singleProduct;
    public function __construct()
    {
        $this->msg = "Hello Jubery";
    }

    public function index()
    {
        return view('home', [
            'msg' => $this->msg,
            'title' => "Home Page",
        ]);
    }
    public function product()
    {
        $this->product = new Product();
        $this->products = $this->product->getAllProduct();
        return view('product', [
            'msg' => $this->msg,
            'title' => "Product Page",
            'products' => $this->products]);
    }
    public function category()
    {

        $this->category = new Category();
        $this->categories = $this->category->getAllCategory();
        return view('category', [
            'msg' => $this->msg,
            'title' => "Category Page",
            'categories' => $this->categories
        ]);
    }

    public function categoryProduct($id)
    {
        $this->product = new Product();
        $this->products = $this->product->getProductByCategoryId($id);
         return view('category-product', [
             'products' => $this->products,
         ]);

    }

    public function fullNameForm()
    {
        return view('full-name-form',[
            'title' => 'Full Name Form'
        ]);
    }

    public function calculator()
    {
        return view('calculator',[
            'title' => 'Calculator'
        ]);
    }

    public function series()
    {
        return view('series',[
            'title' => 'Series'
        ]);
    }
    public function seriesSum()
    {
        return view('series-sum',[
            'title' => 'Series Sum'
        ]);
    }
    public function login()
    {
        return view('login',[
            'title' => 'Log in'
        ]);
    }
    public function primary()
    {
        return view('primary',[
            'title' => 'primary'
        ]);
    }



}