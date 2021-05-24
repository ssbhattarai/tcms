<?php

namespace App\Http\Controllers\Backend\Service;

use App\Http\Controllers\BaseController;
use App\Models\Product;
use Cocur\Slugify\Slugify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin_pages.service.product');
    }

    public function getAllProduct(Request $request)
    {
        if ($request->sort_by !== 'all') {
            if ($request->sort_by == 'active') {
                $key = $request->keywords;
                $searchBy = $request->search_by;
                $contact = Product::where($searchBy, 'like', '%' . $key . '%')
                    ->where('status', '=', 1)
                    ->orderBy('id', 'desc')
                    ->paginate(10);
            } else {
                $key = $request->keywords;
                $searchBy = $request->search_by;
                $contact = Product::where($searchBy, 'like', '%' . $key . '%')
                    ->where('status', '=', 0)
                    ->orderBy('id', 'desc')
                    ->paginate(10);
            }

        } else {
            if ($request->keywords !== '') {
                $key = $request->keywords;
                $searchBy = $request->search_by;
                $contact = Product::where($searchBy, 'like', '%' . $key . '%')
                    ->orderBy('id', 'desc')
                    ->paginate(10);
            } else {
                $contact = Product::orderBy('id', 'desc')
                    ->paginate(10);
            }

        }

        return json_encode($this->reportSuccess('Data retrived successfully', $contact));
    }

    public function getAllProductName()
    {
        $travel_category = Product::select('name', 'id')->get();
        return json_encode($this->reportSuccess('Product name retrived Successfully', $travel_category));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validation = $request->validate([
            'name' => 'required|string',
            'status' => 'required|string',
            'cat_id' => 'required|string',
            'units' => 'required|string',
            'price' => 'required|string',
            'image' => 'required',
        ]);

        if ($request->hasfile('image')) {
            $i = Storage::disk('public')->put('product', $request->image[0]);
            $store = new Product();
            $slugify = new Slugify();
            $store->slug = $slugify->slugify($request->name);
            $store->name = \strtolower($request->name);

            $store->cat_id = $request->cat_id;
            $store->description = $request->description;
            $store->price = $request->price;
            $store->units = $request->units;
            $store->status = $request->status;
            $store->image = $i;
            $store->save();
            if ($store) {
                return json_encode($this->reportSuccess('Product added successfully'));

            } else {
                return json_encode($this->reportError('Failed'));

            }
        }

    }

    public function updateProduct(Request $request)
    {
        // dd($request->all());

        $validate = $request->validate([
            'name' => 'required|string',
            'status' => 'required|string',
            'cat_id' => 'required|string',
            'units' => 'required|string',
            'price' => 'required|string',
            'prev_image' => 'required|string',
        ]);

        $id = $request->id;

        if ($request->hasfile('image')) {
            $i = Storage::disk('public')->put('product', $request->image[0]);
            Storage::delete('/public/' . $request->prev_image);
        } else {
            $i = $request->prev_image;
        }
        $store = Product::find($id);
        $slugify = new Slugify();
        $store->slug = $slugify->slugify($request->name);
        $store->name = \strtolower($request->name);

        $store->cat_id = $request->cat_id;
        $store->description = $request->description;
        $store->price = $request->price;
        $store->units = $request->units;
        $store->status = $request->status;
        $store->image = $i;

        $store->update();
        if ($store) {
            return json_encode($this->reportSuccess('Product updated successfully'));

        } else {
            return json_encode($this->reportError('Failed !!'));

        }

    }

    public function destroy($id)
    {
        $store = Product::find($id);
        // dd($store);
        Storage::delete('/public/' . $store->image);
        $deleted = $store->delete();
        if ($deleted) {
            return json_encode($this->reportSuccess('Product deleted successfully'));
        } else {
            return json_encode($this->reportError('Failed !!'));
        }
    }

}