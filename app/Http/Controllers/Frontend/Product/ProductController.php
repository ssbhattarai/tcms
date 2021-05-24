<?php

namespace App\Http\Controllers\Frontend\Product;

use App\Http\Controllers\BaseController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends BaseController
{
    public function getAllProduct(Request $request)
    {
        // dd($request);
        $last_id = $request->last_id;

        if ($request->last_id == 0) {
            $last = Product::orderBy('id', 'desc')->first();
            $last_id = $last->id;
        }

        $number = 8;
        if ($request->category_slug == 'all') {
            $product = Product::select('image', 'cat_id', 'price', 'name', 'id', 'slug', 'description')
                ->where('status', 1)
                ->where('id', '<', $last_id)
                ->orderBy('id', 'desc')
                ->take($number)->get();
        } else {
            $product = Product::select('image', 'cat_id', 'price', 'name', 'id', 'slug', 'description')
                ->where('status', 1)
                ->where('id', '<', $last_id)
                ->where('cat_id', $request->category)
                ->orderBy('id', 'desc')
                ->take($number)->get();
        }

        return json_encode($this->reportSuccess('Data retrived successfully', $product));
    }

    public function getLatestRecipies()
    {
        $latest_recipie = Product::where('status', 1)
            ->orderBy('id', 'desc')->take(12)->get();
        return json_encode($this->reportSuccess('Data retrived successfully', $latest_recipie));

    }

    // for portfolio categories
    public function getCategories()
    {
        $travel_category = Category::select('name', 'id', 'slug')->get();
        return json_encode($this->reportSuccess('Category retrived Successfully', $travel_category));
    }
}