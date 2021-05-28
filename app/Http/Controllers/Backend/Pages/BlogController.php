<?php

namespace App\Http\Controllers\Backend\Pages;

use App\Http\Controllers\BaseController;
use App\Models\Blog;
use App\Models\Category;
use Cocur\Slugify\Slugify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Artesaos\SEOTools\Facades\SEOTools;

class BlogController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin_pages.blogs.blogs');
    }

    public function getAllBlogs(Request $request)
    {
        // dd($request);
        // if ($request->sort_by == 'is_seen') {
        //     $contact = Blog::where('is_seen', '=', 1)->orderBy('id', 'desc')->paginate(10);
        // } elseif ($request->sort_by == 'is_not_seen') {
        //     $contact = Blog::where('is_seen', '=', 0)->orderBy('id', 'desc')->paginate(10);
        // } else {
        if ($request->keywords !== '') {
            $key = $request->keywords;
            $searchBy = $request->search_by;
            $contact = Blog::with('category')->where($searchBy, 'like', '%' . $key . '%')->orderBy('id', 'desc')->paginate(10);

        } else {
            $contact = Blog::orderBy('id', 'desc')->paginate(10);

        }

        // }
        return json_encode($this->reportSuccess('Data retrived successfully', $contact));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validation = $request->validate([
            'title' => 'required|string',
            'category_id' => 'required',
            'featured' => 'required',
            'written_by' => 'required|string',
            'description' => 'required|string',
            'blog_introduction' => 'required|string|max:100',
            'image' => 'required',
        ]);
        // dd($request->hasfile('image'));
        if ($request->hasfile('image')) {

            $i = Storage::disk('public')->put('blogs', $request->image[0]);
            $store = new Blog();
            $slugify = new Slugify();

            // dd("hey");
            $store->slug = $slugify->slugify($request->title);
            $store->title = $request->title;
            $store->featured = $request->featured;
            $store->category_id = $request->category_id;
            $store->description = $request->description;
            $store->written_by = $request->written_by;
            $store->blog_introduction = $request->blog_introduction;
            $store->image = $i;

            $store->save();
            // dd($store);
            if ($store) {
                return json_encode($this->reportSuccess('Blog added successfully'));

            } else {
                return json_encode($this->reportError('Failed'));

            }
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateBlog(Request $request)
    {
        // dd($request->all());

        $validate = $request->validate([
            'title' => 'required|string',
            'category_id' => 'required',
            'featured' => 'required',
            'blog_introduction' => 'required|string|max:150',
            'written_by' => 'required|string',
            'description' => 'required|string',
            'prev_image' => 'required|string',
        ]);

        $id = $request->id;

        if ($request->hasfile('image')) {
            $i = Storage::disk('public')->put('blogs', $request->image[0]);
            Storage::delete('/public/' . $request->prev_image);
        } else {
            $i = $request->prev_image;
        }
        $store = Blog::find($id);
        $slugify = new Slugify();
        $store->slug = $slugify->slugify($request->title);
        $store->title = $request->title;
        $store->category_id = $request->category_id;
        $store->featured = $request->featured;

        $store->blog_introduction = $request->blog_introduction;

        $store->description = $request->description;
        $store->written_by = $request->written_by;
        $store->image = $i;

        $store->update();
        if ($store) {
            return json_encode($this->reportSuccess('Blog updated successfully'));

        } else {
            return json_encode($this->reportError('Failed !!'));

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $store = Blog::find($id);
        Storage::delete('public/' . $store->image);
        $deleted = $store->delete();
        if ($deleted) {
            return json_encode($this->reportSuccess('Blog deleted successfully'));
        } else {
            return json_encode($this->reportError('Failed !!'));

        }

    }
}
