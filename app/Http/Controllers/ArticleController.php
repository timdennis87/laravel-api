<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Resources\Article as ArticleResources;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(5);
        return ArticleResources::collection($articles)->additional(['meta' => [
            'version' => '1.0.0',
            'API_BASE_URL' => url('/')
        ]]);
    }
}
