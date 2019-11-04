<?php

namespace App\Http\Controllers\Api;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Article as ArticleResource;

class ArticleController extends Controller
{
    public function getArticles(Request $request)
    {
        /* TODO dummy data. To be deleted. */

        return ArticleResource::collection(Article::query()->paginate(10));

        /* TODO dummy data. To be deleted. */
    }
}
