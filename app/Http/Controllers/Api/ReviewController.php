<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ReviewResource;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function getLimitedReviewsOfAProduct($productId)
    {
        $reviews = Review::where('product_id', $productId)->orderBy('created_at', 'desc')->take(5)->get();
        return ReviewResource::collection($reviews);
    }

    public function getAllReviewsOfAProduct($productId)
    {
        $reviews = Review::where('product_id', $productId)->orderBy('created_at', 'desc')->paginate(10);
        return ReviewResource::collection($reviews);
    }

    public function storeOrUpdate(Request $request)
    {
        $user = auth()->guard('api-client')->user();

        $request->validate([
            'id' => 'nullable|integer',
            'order_id' => 'required|integer',
            'product_id' => 'required|integer',
            'rating' => 'required|integer|min:1|max:5',
            'text' => 'required|string',
        ]);

        $review = Review::where('id', $request->id)->first();

        if (!$review) {
            $review = new Review(['product_id' => $request->product_id, 'user_id' => $user->id]);
        }

        $review->order_id = $request->input('order_id');
        $review->rating = $request->input('rating');
        $review->text = $request->input('text');

        $isCreate = false;
        $images = [];
        if (!empty($request->images)) {
            foreach ($request->images as $img) {
                if (isset($img) && is_uploaded_file($img)) {
                    $images[] = uploadFoto($img, 'uploads/reviews/' . $user->id);
                } else if (isset($img)) {
                    $images[] = $img;
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
