<?php

namespace App\Http\Controllers;

use App\Telegram\GetReuestwebhook;

class BordController extends Controller
{


    public function index(){



        return view('welcome');
    }

    public function updatetelegrame(){


        $this->updateanswer();

    }


}
