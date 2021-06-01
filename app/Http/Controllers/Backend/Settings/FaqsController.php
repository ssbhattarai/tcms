<?php

namespace App\Http\Controllers\Backend\Settings;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Faqs;
use Illuminate\Http\Request;


class FaqsController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin_pages.faqs');
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate([
            'question' => 'required|string',
            'description' => 'required',
        ]);

        $faqs = Faqs::create([
            'question' => $request->question,
            'description' => $request->description,
            'status' => $request->status == 'true' ? true : false
        ]);

        if ($faqs) {
            return json_encode($this->reportSuccess('Faqs Created successfully'));
        } else {
            return json_encode($this->reportError('Failed to create'));
        }
    }



    public function destroy($id)
    {
        $faqs = Faqs::findOrFail($id);
        $faqs->delete();

        if ($faqs) {
            return json_encode($this->reportSuccess('Deleted'));
        } else {
            return json_encode($this->reportError('Failed to delete'));
        }
    }

    public function getAllFaqs(Request $request)
    {
        // dd($request->all());
        if ($request->keywords !== '') {
            $key = $request->keywords;
            $searchBy = $request->search_by;
            $service = Faqs::where('question', 'like', '%' . $key . '%')
                ->whereOr('description', 'like', '%' . $key . '%')
                ->orderBy('id', 'desc')->paginate(10);
        } else {
            $service = Faqs::orderBy('id', 'desc')->paginate(10);
        }

        return json_encode($this->reportSuccess('Data retrived successfully', $service));
    }


    public function updateFaqs(Request $request)
    {
        // dd($request->all());

        $validate = $request->validate([
            'question' => 'required|string',
            'description' => 'required',
        ]);


        $id = $request->id;

        $faqs = Faqs::findOrFail($id);

        $faqs->update([
            'question' => $request->question,
            'description' => $request->description,
            'status' => $request->status == 'true' ? true : false
        ]);

        if ($faqs) {
            return json_encode($this->reportSuccess('Faqs Updated successfully'));
        } else {
            return json_encode($this->reportError('Failed to Update'));
        }
    }
}