<?php

namespace App\Http\Controllers\Clients\buyer;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private function categories()
    {
        return Category::all();
    }
    public function allArticle(Request $request)
    {
        $article = Article::when($request->filled('search'), function ($q) use ($request) {
            return $q->where('title', 'like', "%$request->search%");
        })->orderBy('id', $request->orderBy ?? 'desc')->paginate($request->per_page ?? 30);
        foreach ($article as $key => $value) {
            $value->date = Carbon::parse($value->created_at)->format('d M, Y') ?? null;
        }
        $data['categories'] = $this->categories();
        return view('clients.buyer.article.all', ['articles' => $article, 'data' => $data]);
    }

    public function detailArticle($id)
    {
        $article = Article::where('id', $id)->firstOrFail();
        $article->date = Carbon::parse($article->created_at)->format('d M, Y') ?? null;
        $data['categories'] = $this->categories();

        return view('clients.buyer.article.detail', ['article' => $article, 'data' => $data]);
    }
}
