<?php

/**
 * Created by PhpStorm.
 * User: zjuzqj
 * Date: 15/7/22
 * Time: 上午9:45
 */

namespace App\Http\Controllers\Form;

use App\Http\Requests\Request;
use App\Http\Controllers\Controller;

class FormController extends Controller
{
    /*public function login(Request $request){
        //USED FOR DEBUG
        return view('template');

        //USED FOR RELEASE
        //TO DO
    }*/

    //USED FOR DEBUG
    public function login(){
        return view('index');
    }
}

