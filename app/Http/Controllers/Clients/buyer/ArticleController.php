<?php

namespace App\Http\Controllers\Clients\buyer;

use App\Http\Controllers\Controller;
use App\Http\Resources\NotificationResource;
use App\Models\Address;
use App\Models\Ads;
use App\Models\Article;
use App\Models\Category;
use App\Models\Notification;
use App\Models\Wishlist;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function getCommonData()
    {
        $data['categories'] = Category::withCount('products')->whereNull('deleted_at')->orderByDesc('products_count')->take(8)->get();
        $data['sub_categories'] = Category::withCount('products')->with('sub_categories:id,name,category_id')->whereNull('deleted_at')->latest()->get();

        if (Auth::guard('web')->user() && Auth::guard('web')->user()->id) {
            $data['addresses'] = $this->addresses();
            $data['userWishlist'] = Wishlist::where('user_id', Auth::guard('web')->user()->id)->whereNotNull('product_id')->count();
            $notifications = Notification::where('user_id', Auth::guard('web')->user()->id)->orderBy('created_at', 'desc')->take(4)->get();
            $data['notification'] = NotificationResource::collection($notifications);
            $data['notif_count'] = Notification::where('user_id', Auth::guard('web')->user()->id)->count();
        } else {
            $data['addresses'] = null;
            $data['userWishlist'] = 0;
            $data['notification'] = null;
            $data['notif_count'] = 0;
        }

        return $data;
    }

    private function addresses()
    {
        return Address::where('user_id', Auth::guard('web')->user()->id)->where('main', true)->where('for_seller', '!=', true)->whereNull('deleted_at')->first();
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
        $data['another_articles'] = $this->anotherArticles($id);
        $data['another_articles2'] = $this->anotherArticles($id);
        $data['articles'] = Article::where('id', '!=', $id)->orderByDesc('view')->take(4)->get();
        $data['ads'] = Ads::where('page', 'detail_article')
            ->whereNull('deleted_at')->select('id', 'image', 'page', 'section')
            ->orderByDesc('id')->latest()->first();

        return view('clients.buyer.article.detail', ['article' => $article, 'data' => $data]);
    }

    private function anotherArticles($i)
    {
        return Article::where('id', '!=', $i)->inRandomOrder()->take(4)->get();
    }
}
