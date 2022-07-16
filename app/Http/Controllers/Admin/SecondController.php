<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class SecondController extends Controller
{
    public function __construct()
    {
         $this -> middleware ('auth')-> except('showString2');
    }
    public function showString(){
        return 'static string';
    }

    public function showString1(){
        return 'static string 1';
    }

    public function showString2(){
        return 'static string 2';
    }
}
