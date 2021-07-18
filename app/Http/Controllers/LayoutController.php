<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function create(){
        return view('users/form');
    }
    public function list(){
        return view('users/list');
    }
    public function masterLayout(){
        return view('layout/master-layout');
    }
}
