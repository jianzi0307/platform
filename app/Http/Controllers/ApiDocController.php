<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/15
 * Time: 12:49
 */

namespace App\Http\Controllers;


class ApiDocController extends Controller
{
    public function getIndex()
    {
        return view('docs.api');
    }
}