<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Info;

class FrontController extends Controller
{
     public function index(){
        $infoo = Info::where('id', 1)->get();
        $articles = Article::orderBy('id', 'desc')->take(6)->get();
        return view('front.homepage', compact('articles', 'infoo'));
    }
    
     public function gallery(){
        $articles = Article::latest()->get();
        return view('front.gallery', compact('articles'));
    }
}
