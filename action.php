<?php

require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\FullName;
use App\classes\Calculator;
use App\classes\Series;
use App\classes\SeriesSum;
use App\classes\Auth;
use App\classes\Primary;
$home = new Home();

/*
echo '<pre>';
print_r($_POST);
echo '</pre>';
*/

if (isset($_GET['page']))

{
    if ($_GET['page'] == 'home')
    {
        $home->index();
    }

    elseif ($_GET['page'] == 'product')
    {
        $home->product();
    }

    elseif ($_GET['page'] == 'category')
    {
        $home->category();
    }
    elseif ($_GET['page'] == 'category-product')
    {
        $home->categoryProduct($_GET['id']);
    }
    elseif ($_GET['page'] == 'show-full-name-form')
    {
        $home->fullNameForm();
    }
    elseif ($_GET['page'] == 'get-full-name')
    {
        $fullName = new FullName($_POST);
        $fullName->getFullName();
    }

    elseif ($_GET['page'] == 'calculator')
    {
        $home->calculator();
    }
    elseif ($_GET['page'] == 'series')
    {
        $home->series();
    }
    elseif ($_GET['page'] == 'series-sum')
    {
        $home->seriesSum();
    }
    elseif ($_GET['page'] == 'login')
    {
        $home->login();
    }
    elseif ($_GET['page'] == 'primary')
    {
        $home->primary();
    }



}

elseif (isset($_POST['calculator_btn']))
{
    $calculator = new Calculator($_POST);
    $calculator->index();
}
elseif (isset($_POST['series_btn']))
{
    $series = new Series($_POST);
    $series->index();
}
elseif (isset($_POST['series_sum_btn']))
{
    $seriesSum = new SeriesSum($_POST);
    $seriesSum->index();
}
elseif (isset($_POST['login_btn']))
{
    $auth = new Auth($_POST);
    $auth->login($post);
}
elseif (isset($_POST['primary_btn']))
{
    $primary = new Primary($_POST);
    $primary->index();
}
