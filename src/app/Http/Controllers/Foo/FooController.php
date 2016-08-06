<?php

namespace App\Http\Controllers\Foo;

use View,
    Html,
    Form;
use App\Http\Controllers\Controller;

class FooController extends Controller
{

    public function getIndex()
    {
        return View::make('welcome');
    }

}
