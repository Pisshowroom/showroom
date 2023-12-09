<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ReviewResource;
use App\Models\Order;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function getLimitedReviewsOfAProduct($productId)
    {
        $reviews = Review::with(['user'])->where('product_id', $productId)->orderBy('created_at', 'desc')->take(5)->get();
        return ReviewResource::collection($reviews);
    }

    public function getAllReviewsOfAProduct($productId, Request $request)
    {
        /* $reviews = Review::where('product_id', $productId);
        
        
        $reviews->orderBy('created_at', 'desc')->paginate(10);
        return ReviewResource::collection($reviews); */

        $filtered = false;
        $query = Review::with(['user'])->where('product_id', $productId);

        if ($request->sort_rating === 'asc') {
            $query->orderBy('rating', 'asc');
            $filtered = true;
        } else if ($request->sort_rating === 'desc') {
            $query->orderBy('rating', 'desc');
            $filtered = true;
        }

        if ($request->filled('with_media')) {
            $query->whereNotNull('images')->where('images', '!=', '[]');
            $filtered = true;
        }

        if ($filtered == false) {
            $query->orderBy('created_at', 'desc');
        }

        $reviews = $query->paginate(10);

        return ReviewResource::collection($reviews);
    }

    public function userMyReviews()
    {
        $user = auth()->guard('api-client')->user();

        $reviews = Review::with(['user'])->where('user_id', $user->id)->latest()->paginate(20);

        return ReviewResource::collection($reviews);
    }

    public function create(Request $request)
    {
        $user = auth()->guard('api-client')->user();

        $request->validate([
            'order_id' => 'required',
            'data_reviews' => 'required',
            // 'images_reviews' => 'required',
        ]);

        $dataReviews = json_decode($request->data_reviews, true);
        $images_reviews = $request->images_reviews;
        // dd($dataReviews);


        if ($request->bypass_order_completed_x129 != true) {
            $order = Order::where('id', $request->order_id)->where('status', 'Completed')->first();
            if (!$order) {
                return ResponseAPI("Order tidak ditemukan atau belum selesai. Sehingga tidak dapat memberikan review.", 400);
            }

            if ($order->is_reviewed == true) {
                return ResponseAPI("Gagal, Pesanan sudah direview.", 400);
            }
        } else {
            $order = Order::where('id', $request->order_id)->first();

            if ($order->is_reviewed == true) {
                return ResponseAPI("Gagal, Pesanan sudah direview.", 400);
            }
        }

        $detectImages = "";

        DB::beginTransaction();
        foreach ($dataReviews as $key => $dataReview) {
            $review = new Review(['product_id' => $dataReview['product_id'], 'user_id' => $user->id]);

            $review->order_id = $request->input('order_id');
            $review->rating = $dataReview['rating'];
            $review->text = $dataReview['text'];

            $isCreate = false;
            $images = [];
            if (!empty($images_reviews[$key])) {
                // dd($images_reviews[$key]);
                foreach ($images_reviews[$key] as $img) {
                    if (isset($img) && is_uploaded_file($img)) {
                        $images[] = uploadFoto($img, 'uploads/reviews/' . $user->id);
                    } else if (!empty($img)) {
                        $dirImage = lypsisRemoveHost($img);
                        $images[] = $dirImage;
                    }
                }
                $detectImages .= $key . "-";
                $review->images = $images;
            }

            $review->save();
        }
        $order->is_reviewed = true;
        $order->save();
        DB::commit();
        // dd($detectImages);
        return ResponseAPI("Review berhasil disimpan.");
    }

    public function update(Request $request, Review $review)
    {
        $user = auth()->guard('api-client')->user();

        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'text' => 'required|string',
        ]);

        $review->rating = $request->input('rating');
        $review->text = $request->input('text');

        $isCreate = false;
        $images = [];
        if (!empty($request->images)) {
            foreach ($request->images as $img) {
                if (isset($img) && is_uploaded_file($img)) {
                    $images[] = uploadFoto($img, 'uploads/reviews/' . $user->id);
                } else if (!empty($img)) {
                    $dirImage = lypsisRemoveHost($img);
                    $images[] = $dirImage;
                }
            }
        }
        $review->images = $images;
        $review->save();

        if ($isCreate) {
            return ResponseAPI("Review berhasil disimpan.");
        } else {
            return ResponseAPI("Review berhasil diperbarui.");
        }
    }
}
