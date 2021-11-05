<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class Page extends Controller
{
    public function showOne($arg)
    {
        $pages = [
            1 => 'страница 1',
            2 => 'страница 2',
            3 => 'страница 3',
            4 => 'страница 4',
            5 => 'страница 5',
        ];
        if(isset($pages[$arg])){
            return $pages[$arg];
        }else{
            return 'такой страницы не существует';
        }
    }
    public function showAll()
    {
        return 'Page: showAll';
    }
}
