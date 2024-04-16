<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
 
    public function aboutMe()
    {
        return view('about-me', [
            'title' => 'Faisal',
            'descrizione' => 'Sono un giornalista fidati'
        ]);
    }
    public function articles()
    {
        $articles=[
            ['title' => 'i vaccini fanno male?', 'category' => 'Fake medicina', 'descrizione' => 'SI!'],
            ['title' => 'la terra è piatta?', 'category' => 'Fake scienza', 'descrizione' => 'SI!'],
            ['title' => 'esistevano i giganti?', 'category' => 'Fake storia', 'descrizione' => 'SI!'], 
        ];
        return view('articles', [ 'articles' => $articles ]);
    }
    public function article($article)
    {
        $index = $article;

        $articles=[
            ['title' => 'i vaccini fanno male?', 'category' => 'Fake medicina', 'descrizione' => 'SI!'],
            ['title' => 'la terra è piatta?', 'category' => 'Fake scienza', 'descrizione' => 'SI!'],
            ['title' => 'esistevano i giganti?', 'category' => 'Fake storia', 'descrizione' => 'SI!'], 
        ];

        return view('article', [ 'article' => $articles[$index]]);
    }
}