<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/14
 * Time: 19:20
 */

namespace App\Http\Controllers;


class UserController extends Controller
{
    public function showProfile($id)
    {
        echo "showprofile";
        //return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}