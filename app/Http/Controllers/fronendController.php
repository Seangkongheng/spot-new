<?php

namespace App\Http\Controllers;

use App\Models\Atticle;
use Illuminate\Http\Request;

class fronendController extends Controller
{
    public function index()
    {
        $latestArticle = Atticle::orderBy('created_at', 'desc')->take(1)->get();
        $article=Atticle::take(4)->get();
        return view('frontend.index',compact('article','latestArticle')); 
    }
    public function detailpage()
    {
   
      
        return view('frontend.page.detailsport'); 
    }

    public function lottery()
    {
        return view('frontend.page.lottery'); 
    }
    public function kino(){
        return view('frontend.page.kino'); 
    }
    public function news() {
        return view('frontend.page.newsUpdate');  
    }
    public function cacino(){
        return view('frontend.page.livecacino');  
    }
    public function game(){
        return view('frontend.page.game');  
    }
    public function promotion(){
        return view('frontend.page.promotion');  
    }
    public function service(){
        return view('frontend.page.service');  
    }

}
