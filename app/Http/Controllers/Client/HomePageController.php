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
        return view('logined');
    }

    public function news(){
        return view('login');
    }

    public function contact(){
        return view('contact.contactus');
    }

    public function notification(){
        return view('register');
    }

    public function login(Request $request){
        return redirect()->route('client.homeindex');
    }

    public function logined(Request $request){
        return redirect()->route('client.account');
    }

    public function account () {
        return view('logined');
    }
    

    public function editAccout () {
        return view('editAccount');
    }

    public function changePassword () {
        return view('changePassword');
    }

    public function history_order() {
        return view('history_order');
    }

    public function nilestill () {
        return view('nilestill');
    }

    public function jeans ($id) {
       return view('jeans');
    }

    
    public function carrier ($id) {
        return view('carrier');
     }

    public function petuntse ($id) {
    return view('petuntse');
    }

    public function nilesilt ($id) {
        return view('nilesilt');
    }

    public function jesmonite ($id) {
        return view('jesmonite');
    }

    public function clothes () {
        return view('clothes');
    }

    public function geopolymer () {
        return view('geopolymer');
    }

    public function lumicera () {
        return view('lumicera');
    }

    public function sea_pottery () {
        return view('sea_pottery');
    }

    public function pitchers () {
        return view('pitchers');
    }

    public function details () {
        return view('details');
    }

    public function girl () {
        return view('girls');
    }

    public function kurti () {
        return view('kurti');
    }

}