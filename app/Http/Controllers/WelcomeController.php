<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\Http\Controllers;

class WelcomeController extends Controller {

    public function _construct(){
        $this->middleware('guest');
    }


    public function index() {
//        return 'hello world';
        return view('welcome');
    }
    
    public function contact(){
//        return 'Contact me';
        return view('pages.contact');
    }

}
