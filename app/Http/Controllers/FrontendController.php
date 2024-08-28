<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function home(){
        return view ('frontend.home.index');
    }
    public function contact(){
        return view ('frontend.contact.index');
    }
    public function teams(){
        return view ('frontend.our-teams.index');
    }
}