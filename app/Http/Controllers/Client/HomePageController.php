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
        if($id=='page=2'){
            return view('petuntse_page_2');
        }
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
        if($id=='aliquam+quaerat+voluptatem'){
            return view('list_products.p1');
        }
        if($id=='south+vietnamese+pajama'){
            return view('list_products.p2');
        }
        if($id=='cool+fabric+wide+cheesecloth'){
            return view('list_products.p3');
        }
        if($id=='aspetur+autodit+autfugit'){
            return view('list_products.p4');
        }
        if($id=='magni+dolores+eosquies'){
            return view('list_products.p5');
        }
        if($id=='neque+porro+quisquam'){
            return view('list_products.p6');
        }
        if($id=='gray+hoodie'){
            return view('list_products.p7');
        }
        if($id=='nostrum+exercitationem'){
            return view('list_products.p8');
        }
        if($id=='perspiciatis+unde+omnis'){
            return view('list_products.p9');
        }
        if($id=='quaerat+outt+voluptatem'){
            return view('list_products.p10');
        }
        if($id=='similique+suntin+culpaqui'){
            return view('list_products.p11');
        }
        if($id=='sint+incidunt+utlabore'){
            return view('list_products.p12');
        }
        if($id=='tempora+incidunt+utlabore'){
            return view('list_products.p13');
        }
        if($id=='voluptas+nulla+pariatur'){
            return view('list_products.p14');
        }
        if($id=='voluptas+sit+aspernatur'){
            return view('list_products.p15');
        }
        if($id=='voluptate+velit+esse'){
            return view('list_products.p16');
        }
        if($id=='suscipit+laboriosam+nisi'){
            return view('list_products.p17');
        }
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

    public function wishlist ($id) {
        return view('wishlist');
    }

}