<?php

namespace App\Http\Controllers\Backend\Service;

use App\Http\Controllers\BaseController;
use App\Models\Category;
use Cocur\Slugify\Slugify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin_pages.service.category');
    }

    public function getAllCategory(Request $request)
    {
        // dd($request);
        if ($request->sort_by !== 'all') {
            if ($request->sort_by == 'active') {
                $key = $request->keywords;
                $searchBy = $request->search_by;
                $category = Category::where($searchBy, 'like', '%' . $key . '%')

                    ->select('categories.*')
                    ->where('categories.status', '=', 1)
                    ->orderBy('categories.id', 'desc')
                    ->paginate(10);
            } else {
                $key = $request->keywords;
                $searchBy = $request->search_by;
                $category = Category::where($searchBy, 'like', '%' . $key . '%')

                    ->select('categories.*')
                    ->where('categories.status', '=', 0)
                    ->orderBy('categories.id', 'desc')
                    ->paginate(10);
            }

        } else {
            if ($request->keywords !== '') {
                $key = $request->keywords;
                $searchBy = $request->search_by;
                $category = Category::where($searchBy, 'like', '%' . $key . '%')
                    ->select('categories.*')
                    ->orderBy('categories.id', 'desc')
                    ->paginate(10);
            } else {
                $category = Category::orderBy('categories.id', 'desc')
                    ->paginate(10);
            }

        }

        return json_encode($this->reportSuccess('Data retrived successfully', $category));
    }

    public function getAllCategoryName()
    {
        $category = Category::select('name', 'id')->get();
        return json_encode($this->reportSuccess('Category name retrived Successfully', $category));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validation = $request->validate([
            'name' => 'required|string',
            'status' => 'required|string',
        ]);

        if ($request->hasfile('image')) {
            $i = Storage::disk('public')->put('category', $request->image[0]);
            $store = new Category();
            $slugify = new Slugify();
            $store->slug = $slugify->slugify($request->name);
            $store->name = \strtolower($request->name);
            $store->status = $request->status;
            $store->description = $request->description;
            $store->image = $i;
            $store->save();
            if ($store) {
                return json_encode($this->reportSuccess('Category added successfully'));

            } else {
                return json_encode($this->reportError('Failed'));

            }
        } else {
            $store = new Category();
            $slugify = new Slugify();
            $store->slug = $slugify->slugify($request->name);
            $store->name = \strtolower($request->name);
            $store->status = $request->status;
            $store->description = empty($request->description);
            $store->save();
            if ($store) {
                return json_encode($this->reportSuccess('Category added successfully'));

            } else {
                return json_encode($this->reportError('Failed'));

            }
        }

    }

    public function updateCategory(Request $request)
    {
        // dd($request->all());

        $validate = $request->validate([
            'name' => 'required|string',
            'status' => 'required|string',
            'prev_image' => 'required|string',
        ]);

        $id = $request->id;

        if ($request->hasfile('image')) {
            $i = Storage::disk('public')->put('category', $request->image[0]);
            Storage::delete('/public/' . $request->prev_image);
        } else {
            $i = $request->prev_image;
        }
        $store = Category::find($id);
        $slugify = new Slugify();
        $store->slug = $slugify->slugify($request->name);
        $store->name = \strtolower($request->name);
        $store->status = $request->status;
        $store->description = $request->description;
        $store->image = $i;

        $store->update();
        if ($store) {
            return json_encode($this->reportSuccess('Category updated successfully'));

        } else {
            return json_encode($this->reportError('Failed !!'));

        }

    }

    public function destroy($id)
    {
        $store = Category::find($id);
        // dd($store);
        Storage::delete('/public/' . $store->image);
        $deleted = $store->delete();
        if ($deleted) {
            return json_encode($this->reportSuccess('Category deleted successfully'));
        } else {
            return json_encode($this->reportError('Failed !!'));
        }
    }

    public function getallcategories() {

        $categories = Category::where('status', 1)->get();
        return json_encode($this->reportSuccess('Data retrived successfully', $categories));
    }

}
