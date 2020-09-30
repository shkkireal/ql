<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BordController extends Controller
{
     public $last;

    public function index($last){


        Redis::get('post', $this->last);
        return view('welcome', $data=[$last]);
    }
}
