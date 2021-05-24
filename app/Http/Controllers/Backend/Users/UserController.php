<?php

namespace App\Http\Controllers\Backend\Users;

use App\Http\Controllers\BaseController;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin_pages.users.users');
    }

    public function getAllUsers(Request $request)
    {
        //dd($request);
        if ($request->sort_by == 'admin') {
            $contact = User::where('is_admin', '=', 1)->orderBy('id', 'desc')->paginate(10);
        } elseif ($request->sort_by == 'normal') {
            $contact = User::where('is_admin', '=', 0)->orderBy('id', 'desc')->paginate(10);
        } else {
            if ($request->keywords !== '') {
                $key = $request->keywords;
                $searchBy = $request->search_by;
                $contact = User::where($searchBy, 'like', '%' . $key . '%')->orderBy('id', 'desc')->paginate(10);
            } else {
                $contact = User::orderBy('id', 'desc')->paginate(10);
            }

        }
        return json_encode($this->reportSuccess('Data retrived successfully', $contact));
    }

    public function destroy($id)
    {
        $delete = User::where('id', $id)->first();
        $delete->delete();
        if ($delete) {
            return json_encode($this->reportSuccess('Users deleted successfully'));
        } else {
            return json_encode($this->reportError('failed to delete'));
        }

    }
}