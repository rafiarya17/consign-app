<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormBayarController extends Controller
{
    public function index() 
    {
        return view('form.index');
    }

    public function wait() 
    {
        return view('form.wait');
    }
}
