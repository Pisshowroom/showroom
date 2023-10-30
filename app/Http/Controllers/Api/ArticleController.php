<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(4);
        return ArticleResource::collection($articles);
    }

    public function show($id)
    {
        $article = Article::where('id', $id)->firstOrFail();
        return new ArticleResource($article);
    }
}
