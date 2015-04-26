<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        
//        return view('pages.about')->with([
//            'first'=>'Janaka',
//            'last'=>'Bandara'
//        ]);
        
//        $data = [];
//        $data['first'] = 'Lashan';
//        $data['last'] = 'Fernando';
//        
//        return view('pages.about',$data);
        
        $first = 'Janaka';
        $last = 'Bandara';
        
        return view('pages.about',  compact('first','last'));
    }
}
