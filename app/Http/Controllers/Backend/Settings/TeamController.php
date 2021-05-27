<?php

namespace App\Http\Controllers\Backend\Settings;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::paginate(15);
        return view('admin_pages.settings.ourteam',compact('teams'));
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
        $validate = $request->validate([
            'name' => 'required|string',
            'post' => 'required|string',
            'image' =>'required|image|mimes:png,jpg'
        ]);

        // dd($request->all());

        if($request->hasfile('image')) {

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('assets/team/'), $imageName);
            $create['name'] = $request->name;
            $create['post'] = $request->post;
            $create['status'] = $request->status == 'on' ? true : false;
            $create['image'] = $imageName;

            Team::create($create);

            return back()->with(['success' => 'New Member added.']);

        } else {
            return back()->with(['error' => 'Something went wrong. ']);

        }
    }

    public function changeteamstatus($id) {

        $getTeam = Team::findOrFail($id);

        if($getTeam->status) {
            $getTeam->update(['status' => false]);
        } else {
            $getTeam->update(['status' => true]);
        }

        return back()->with(['success' => 'Status Changed Successfully.']);
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => 'required|string',
            'post' => 'required|string',
            'image' =>'nullable|image|mimes:png,jpg'
        ]);

        dd($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();

        return back()->with(['success' => 'Member Remove']);
    }
}
