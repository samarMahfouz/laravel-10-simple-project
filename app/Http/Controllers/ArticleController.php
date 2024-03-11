<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
     public function index(){
        $articles = Article::all();
        return view('admin.articles.index', compact('articles'));
    }
    
    
     public function create(){
        return view('admin.articles.create');
    }

       
         public function store(Request $request) {

        $image = $request->file('imgpath');
        $image_name = $image->hashName();
        $image->move(public_path('/storage/adminimages/'),$image_name);  
        $image_path = "storage/adminimages/" . $image_name;
            
            
        $article = new Article();
        $article->imgpath    = $image_path;
         
        $article->save();
         
        return redirect()->back()->with('status', 'Photo created successfully');
    }
    
     
    public function destroy(Article $article){
        $article->delete();
        return redirect()->back()->with('status', 'Photo deleted successfully');
    }
}
