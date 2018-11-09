<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        
        return view('main', [
            'foo' => 'bar'
            ]);
    }

    public function help(){
        
        return view('help', [
            'foo' => 'bar'
            ]);
    }

    public function messages(){
        
        return view('messages', [
            'foo' => 'bar'
            ]);
    }
    
    public function signin(){
        
        return view('signin', [
            'foo' => 'bar'
            ]);
    }

    public function shopcar(){
        
        return view('shopcar', [
            'foo' => 'bar'
            ]);
    }
    
}
