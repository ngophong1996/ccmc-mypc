<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function none(){
        return view('small.none');
    }
    public function new(){
        return view('small.new');
    }
    public function old(){
        return view('small.old');
    }
    public function rent(){
        return view('small.rent');
    }
    public function mypc(){
        return view('small.mypc');
    }
    public function wifi(){
        return view('small.wifi');
    }
    public function mess(){
        return view('small.mess');
    }
}
