<?php

namespace App\Http\Controllers\Backend\Service;

use App\Http\Controllers\BaseController;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin_pages.service.reservations');
    }

    public function getAllReservations(Request $request)
    {
        //dd($request);
        if ($request->sort_by == 'is_seen') {
            $contact = Reservation::where('is_seen', '=', 1)->orderBy('id', 'desc')->paginate(10);
        } elseif ($request->sort_by == 'is_not_seen') {
            $contact = Reservation::where('is_seen', '=', 0)->orderBy('id', 'desc')->paginate(10);
        } else {
            if ($request->keywords !== '') {
                $key = $request->keywords;
                $searchBy = $request->search_by;
                $contact = Reservation::where($searchBy, 'like', '%' . $key . '%')->orderBy('id', 'desc')->paginate(10);
            } else {
                $contact = Reservation::orderBy('id', 'desc')->paginate(10);
            }

        }
        return json_encode($this->reportSuccess('Data retrived successfully', $contact));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function setSeenReservations($id)
    {
        $update = Reservation::find($id);
        $update->is_seen = 1;
        $update->update();
        return json_encode($this->reportSuccess('Reservations Updated successfully'));
    }

    public function destroy($id)
    {
        $delete = Reservation::where('id', $id)->first();
        $delete->delete();
        if ($delete) {
            return json_encode($this->reportSuccess('Reservations deleted successfully'));
        } else {
            return json_encode($this->reportError('failed to delete'));
        }

    }

}