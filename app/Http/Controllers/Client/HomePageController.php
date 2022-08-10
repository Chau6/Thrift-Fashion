<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function homeindex(){
        return view('homeindex.body');
    }

    public function about(){
        
    }

    public function news(){
        
    }

    public function contact(){
        return view('contact.contactus');
    }

    public function notification(){
        
    }
}
