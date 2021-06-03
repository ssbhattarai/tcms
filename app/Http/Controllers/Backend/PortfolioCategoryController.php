<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Models\PortfolioCategory;

class PortfolioCategoryController extends BaseController
{


    public function getAllPortfolioCategories(Request $request)
    {
        if ($request->keywords !== '') {
            $key = $request->keywords;
            $searchBy = $request->search_by;
            $category = PortfolioCategory::where('title', 'like', '%' . $key . '%')->orderBy('id', 'desc')->paginate(10);
        } else {
            $category = PortfolioCategory::orderBy('id', 'desc')->paginate(10);
        }

        return json_encode($this->reportSuccess('Data retrived successfully', $category));
    }



    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);

        // dd($request);
        $store = PortfolioCategory::create([
            'title' => $request->title,
            'status' => $request->status = 'true' ? true : false
        ]);

        if ($store) {
            return json_encode($this->reportSuccess('Category Created Successfully'));
        } else {
            return json_encode($this->reportError('Failed to Create'));
        }
    }





    public function destroy($id)
    {
        $findcat = PortfolioCategory::findOrFail($id);
        $findcat->delete();
    }

    public function updatePortfolioCategory(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);
        $id = $request->id;
        $findcat = PortfolioCategory::findOrFail($id);
        $findcat->update([
            'title' => $request->title,
            'status' => $request->status == 'true' ? true : false
        ]);

        if ($findcat) {
            return json_encode($this->reportSuccess('Category updated Successfully'));
        } else {
            return json_encode($this->reportError('Failed to update'));
        }
    }

    public function getAllCategory()
    {
        $getAllData = PortfolioCategory::select('id', 'title')->where('status', 1)->orderBy('id', 'desc')->get();
        return json_encode($getAllData);
    }
}