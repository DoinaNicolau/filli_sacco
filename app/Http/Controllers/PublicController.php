<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PublicController extends Controller
{
    public function homepage()
    {
         $latestArticles = Article::where('is_published', true)
                                 ->latest() // Abbreviazione per orderBy('created_at', 'DESC')
                                 ->take(3)
                                 ->get();
        // Passiamo gli articoli alla vista                         
        return view('welcome',[
            'articles' => $latestArticles,
        ]);
    }
}
