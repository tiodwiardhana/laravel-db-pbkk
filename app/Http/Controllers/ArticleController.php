<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    //
    public function index(){
        return view('article', [
            "name" => "Tio Dwi Ardhana",
            "email" => "ardhanatio@its.ac.id",
            "title" => "Halaman Artikel Berita",
            // "articles" => Article::all(),
            "articles" => Article::latest()->get()
        ]);
    }

    public function content(Article $article){
        return view('content', [
            "article" => $article
        ]);
    }

}
