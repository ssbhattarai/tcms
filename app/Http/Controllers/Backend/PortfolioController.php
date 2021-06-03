<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Storage;


class PortfolioController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin_pages.portfolio');
    }


    public function getAllPortfolios(Request $request)
    {
        if ($request->keywords !== '') {
            $key = $request->keywords;
            $searchBy = $request->search_by;
            $service = Portfolio::where('company_name', 'like', '%' . $key . '%')
                ->whereOr('description', 'like', '%' . $key . '%')
                ->with('category')
                ->orderBy('id', 'desc')->paginate(10);
        } else {
            $service = Portfolio::with('category')->orderBy('id', 'desc')->paginate(10);
        }

        return json_encode($this->reportSuccess('Data retrived successfully', $service));
    }


    public function store(Request $request)
    {
        $validation = $request->validate([
            'company_name' => 'required|string',
            'used_technology' => 'required|max:150',
            'status' => 'required',
            'description' => 'required|string',
            'image' => 'required',
            'category_id' => 'required',
            'site_url' => 'required'
        ]);

        if ($request->hasfile('image')) {

            $i = Storage::disk('public')->put('portfolios', $request->image[0]);

            $portfolio = Portfolio::Create([
                'company_name' => $request->company_name,
                'used_technology' => $request->used_technology,
                'site_url' => $request->site_url,
                'image' => $i,
                'status' => $request->status == 'false' ? 0 : 1,
                'category_id' => $request->category_id,
                'description' => $request->description
            ]);

            if ($portfolio) {
                return json_encode($this->reportSuccess('Portfolio added successfully'));
            } else {
                return json_encode($this->reportError('Failed'));
            }
        }
    }

    public function destroy($id)
    {
        $findportfolio = Portfolio::findOrFail($id);
        // Storage::delete('public/' . $findportfolio->image); //due to soft delete

        $findportfolio->delete();

        if ($findportfolio) {
            return json_encode($this->reportSuccess('Deleted successfully'));
        } else {
            return json_encode($this->reportError('Failed to delete'));
        }
    }


    public function updatePortfolio(Request $request)
    {
        // dd($request->all());
        $validation = $request->validate([
            'company_name' => 'required|string',
            'used_technology' => 'required|max:150',
            'status' => 'required',
            'description' => 'required|string',
            'image' => 'required',
            'category_id' => 'required',
            'site_url' => 'required'
        ]);

        $id = $request->id;

        if ($request->hasfile('image')) {
            $i = Storage::disk('public')->put('portfolios', $request->image[0]);
            Storage::delete('/public/' . $request->prev_image);
        } else {
            $i = $request->prev_image;
        }


        $store = Portfolio::findOrFail($id);

        $store->update([
            'company_name' => $request->company_name,
            'used_technology' => $request->used_technology,
            'site_url' => $request->site_url,
            'image' => $i,
            'status' => $request->status == 'false' ? 0 : 1,
            'category_id' => $request->category_id,
            'description' => $request->description
        ]);

        if ($store) {
            return json_encode($this->reportSuccess('Portfolio updated successfully'));
        } else {
            return json_encode($this->reportError('Failed !!'));
        }
    }
}