<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class HolaMonController extends Controller
{
    public function hello()
    {
        $model = new \App\HolaMon();
        $data["hola"] = $model->getString();
        return view("holamon", $data);
    }
}
