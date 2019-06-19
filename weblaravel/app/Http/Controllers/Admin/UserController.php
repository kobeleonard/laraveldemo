<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    //
    public function index()
    {
        dump(Input::has('age'));
//        return '道理我都懂，就是奋不顾身';
    }
}
