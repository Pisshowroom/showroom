<?php

namespace App\Http\Controllers\Clients\buyer;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Article;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function getCommonData()
    {
        $data['categories'] = Category::all();

        if (Auth::guard('web')->user() && Auth::guard('web')->user()->id) {
            $data['addresses'] = $this->addresses();
        } else {
            $data['addresses'] = null;
        }

        return $data;
    }

    private function addresses()
    {
        return Address::where('user_id', Auth::guard('web')->user()->id)->where('main', true)->whereNull('deleted_at')->first();
    }
    public function allArticle(Request $request)
    {
        $article = Article::when($request->filled('search'), function ($q) use ($request) {
            return $q->where('title', 'like', "%$request->search%");
        })->orderBy('id', $request->orderBy ?? 'desc')->paginate($request->per_page ?? 30);
        foreach ($article as $key => $value) {
            $value->date = parseDates2($value->created_at);
        }
        $data = $this->getCommonData();
        return view('clients.buyer.article.all', ['articles' => $article, 'data' => $data]);
    }

    public function detailArticle($id)
    {
        Article::where('id', $id)->update(['view' => DB::raw('view + 1')]);
        $article = Article::where('id', $id)->firstOrFail();
        $article->date = parseDates2($article->created_at);
        $data = $this->getCommonData();

        return view('clients.buyer.article.detail', ['article' => $article, 'data' => $data]);
    }
}
