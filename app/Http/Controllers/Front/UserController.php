<?php

namespace App\Http\Controllers\Front;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    public function showUserName(){
        return 'Ishaq Mohammed';
    }

    public function getIndex(){


        /* $obj = new \stdClass();
        $obj -> name = 'Ishaq';
        $obj -> id = 29;
        $obj -> gender = 'male'; */

        $data = ['Mariam','Ishaq', 'Menna'];

       # return view('welcome')-> with ('name','Ishaq Mohammed');

        return view('welcome', compact('data'));

    }
}
