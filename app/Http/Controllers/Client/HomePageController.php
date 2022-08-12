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
    // public function petuntseSearch (Request $request) {
    //     $idss = $request->only('filter');
    //     $check ='';
    //     $a=0;
    //     foreach ($idss as $ids){
           
    //         foreach ($ids as $id){
    //             $a=$a+1;
    //             if($a==1){
    //                 $check = $check.$id;
    //             }
    //             else{
    //                 $check = $check.'+'.$id;
    //             }
               
    //         }
          
    //     }
    //     // dd($check);
    // return redirect()->route('client.product.petuntse',['id'=>$check]);
    // }
  
    public function nilesilt ($id) {
        return view('nilesilt');
    }

    public function jesmonite ($id) {
        return view('jesmonite');
    }

    public function clothes ($id) {
        return view('clothes');
    }

    public function geopolymer ($id) {
        return view('geopolymer');
    }

    public function lumicera ($id) {
        return view('lumicera');
    }

    public function sea_pottery ($id) {
        return view('sea_pottery');
    }

    public function pitchers ($id) {
        return view('pitchers');
    }

    public function details ($id) {
        return view('details');
    }

    public function girl ($id) {
        return view('girls');
    }

    public function kurti ($id) {
        return view('kurti');
    }

    public function product_compatible ($id) {
        return view('product_compatible');
    }

    public function remove ($id) {
        return view('remove');
    }

    public function back () {
        return redirect()->back();
    }
    
}