<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class DashboardController extends Controller
{
    public function index() {
        $articles = Article::orderBy('id', 'desc')->take(5)->get();
        
        return view('admin.dashboard', compact('articles'));
    }
}
