<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function getIndex()
    {
        echo "index";
    }

    public function postLogin()
    {
    }

    public function getReg()
    {
        echo "reg";
    }

    public function getShow()
    {
        echo "show";
    }
}
