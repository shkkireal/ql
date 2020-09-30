<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BordController extends Controller
{
    public function index(){


        Redis::get('post', $this->last);
        return view::welcome($this->last);
    }
}
