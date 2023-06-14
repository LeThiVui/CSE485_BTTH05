<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class HomeController extends Controller
{
    //
    public function getAllArticles(){
        $articles=Article::all();
        return view('home',compact('articles'));//trả dữ liệu về trang chủ home và đóng dữ liệu bằng compact
    }
}
