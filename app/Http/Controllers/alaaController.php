<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class alaaController extends Controller
{
    //

    public function getname(){

        
        return view ('welcome')->with('name','alaa');

    }
}
