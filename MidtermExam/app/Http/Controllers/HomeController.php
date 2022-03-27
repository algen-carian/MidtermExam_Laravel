<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home()
        {
            $info =array('name'=>'Algen','age'=>'21','gender'=>'male','weight'=>'Weight:59','height'=>'Height:5"4');

   return view('home', ['info'=> $info]);
        }
        public function Post()
        {
            $info =array('name'=>'Algen','age'=>'21','gender'=>'male','weight'=>'Weight:59','height'=>'Height:5"4');

   return view('post', ['info'=> $info]);
        }
    
}
