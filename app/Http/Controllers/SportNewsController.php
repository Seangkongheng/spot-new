<?php

namespace App\Http\Controllers;

use App\Models\Atticle;
use App\Models\User;
use Illuminate\Http\Request;

class SportNewsController extends Controller
{
    public function index()
    {
        $atticle=Atticle::paginate(6);
        return view('frontend.page.sportNews',compact('atticle')); 
    }

    public function  showPostView( string $id) {
        
        $post=Atticle::find($id);
        $allpost=Atticle::all();
        $latestArticle = Atticle::orderBy('created_at', 'desc')->take(6)->get();
        return View('frontend.page.detailsport',compact('post','allpost','latestArticle'));
    }
}
