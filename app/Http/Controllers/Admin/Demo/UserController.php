<?php

namespace App\Http\Controllers\Admin\Demo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    public function  test(){
    	$name = Input::get("name");
    	return $name;
    }
}
