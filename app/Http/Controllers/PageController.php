<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Session;
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
    public function wifipost(Request $request) {
  
        DB::table('wifis')->insert([
        'useremail' => Auth::user()->email,
        'address' => $request->address,
        'os'=> $request->os,
        'description'=> $request->description,
        ]);
        Session::flash('flash_message','successfully saved.');
        return redirect()->route("wifi");
        
    }
}
