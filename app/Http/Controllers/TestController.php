<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function show()
    {
        return view('test.show', [
            'arr' => [1, 2],
            'city' => 'Москва',
            'str' => '<b>строка</b>',
            'date' => date('l'),
            'numbers' => [1,2,3,4,5,6,7,8,9],
            'users' => [[1, 2, 3, 4], [5,6,7,8], [9,10,11,12]],
            'employees' => [
                [                    'name' => 'user1',                    'surname' => 'surname1',                    'salary' => 1000,                ],
                [                    'name' => 'user2',                    'surname' => 'surname2',                    'salary' => 2000,                ],
                [                    'name' => 'user3',                    'surname' => 'surname3',                    'salary' => 3000,                ],
            ],
        ]);
    }
    public function sum($arg1, $arg2)
    {
        return ($arg1 * $arg2);
    }

}
