<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

class ArticleController extends Controller
{
    public function create()
    {
   
        Article::create([
            'title' => 'i vaccini fanno male',
            'category' => 'fake medicina' ,
            'description' => 'si',
        ]);

        Article::create([
            'title' => 'la terra è piatta?',
            'category' => 'fake astronomia' ,
            'description' => 'si',
        ]);

        Article::create([
            'title' => 'esistevano i giganti?',
            'category' => 'fake storia' ,
            'description' => 'si',
        ]);

    }
}
/* ['title' => 'i vaccini fanno male?', 'category' => 'Fake medicina', 'descrizione' => 'SI!'],
            ['title' => 'la terra è piatta?', 'category' => 'Fake scienza', 'descrizione' => 'SI!'],
            ['title' => 'esistevano i giganti?', 'category' => 'Fake storia', 'descrizione' => 'SI!'], */