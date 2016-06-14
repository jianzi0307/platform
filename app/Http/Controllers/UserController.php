<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{

    public function index()
    {
        echo "v1/index";
    }

    public function create()
    {
        echo "v1/create";
    }

    public function store()
    {
        echo "v1/store";
    }

    public function show()
    {
        echo "v1/show";
    }

    public function edit()
    {
        echo "v1/edit";
    }

    public function update()
    {
        echo "v1/update";
    }

    public function destroy()
    {
        echo "v1/destroy";
    }
}
