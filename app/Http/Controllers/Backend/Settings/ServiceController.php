<?php

namespace App\Http\Controllers\Backend\Settings;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Storage;
use Cocur\Slugify\Slugify;




class ServiceController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin_pages.settings.services');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validation = $request->validate([
            'title' => 'required|string',
            'service_intro' => 'required|max:150',
            'status' => 'required',
            'description' => 'required|string',
            'image' => 'required',
        ]);

        if ($request->hasfile('image')) {

            $i = Storage::disk('public')->put('services', $request->image[0]);

            $slugify = new Slugify();

            $service = Service::Create([
                'title' => $request->title,
                'slug' => $slugify->slugify($request->title),
                'service_intro' => $request->service_intro,
                'image' => $i,
                'status' => $request->status == 'false' ? 0 : 1,
                'is_featured' => $request->is_featured,
                'description' => $request->description
            ]);

            if ($service) {
                return json_encode($this->reportSuccess('Service added successfully'));

            } else {
                return json_encode($this->reportError('Failed'));

            }
    }
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    public function updateService(Request $request)
    {
        // dd($request->all());
        $validation = $request->validate([
            'title' => 'required|string',
            'service_intro' => 'required|max:150',
            'status' => 'required',
            'description' => 'required|string',
            'image' => 'required',
            'prev_image' => 'required',
        ]);

        $id = $request->id;

        if ($request->hasfile('image')) {
            $i = Storage::disk('public')->put('services', $request->image[0]);
            Storage::delete('/public/' . $request->prev_image);
        } else {
            $i = $request->prev_image;
        }


        $store = Service::find($id);
        $slugify = new Slugify();

        $store->update([
            'title' => $request->title,
            'slug' => $slugify->slugify($request->title),
            'service_intro' => $request->service_intro,
            'image' => $i,
            'status' => $request->status == 'false' ? 0 : 1,
            'is_featured' => $request->is_featured,
            'description' => $request->description
        ]);

        if ($store) {
            return json_encode($this->reportSuccess('Service updated successfully'));

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
        $store = Service::findOrFail($id);
        Storage::delete('public/' . $store->image);
        $deleted = $store->delete();

        return json_encode($this->reportSuccess('Service deleted successfully'));

    }

    public function getAllServices(Request $request)
    {

        if ($request->keywords !== '') {
            $key = $request->keywords;
            $searchBy = $request->search_by;
            $service = Service::where('title', 'like', '%' . $key . '%')
                        ->whereOr('description', 'like', '%' . $key. '%')
                        ->orderBy('id', 'desc')->paginate(10);

        } else {
            $service = Service::orderBy('id', 'desc')->paginate(10);

        }

        return json_encode($this->reportSuccess('Data retrived successfully', $service));
    }
}
