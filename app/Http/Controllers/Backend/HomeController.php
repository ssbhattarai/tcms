<?php

namespace App\Http\Controllers\Backend;

use App\Models\Order;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $users = User::where('created_at', '>', Carbon::now()->subDays(30))->get();
        $total_users = User::all();

        // $new_order = Order::where('is_delivered', '=', 0)->get();
        // $month_order = Order::where('created_at', '>', Carbon::now()->subDays(30))->get();
        // $month_sales = Order::where('orders.updated_at', '>', Carbon::now()->subDays(30))
        //     ->join('products', 'products.id', '=', 'orders.product_id')
        //     ->where('orders.is_delivered', '1')
        //     ->get();
        // $today_sales = Order::whereDate('orders.updated_at', Carbon::today())
        //     ->join('products', 'products.id', '=', 'orders.product_id')
        //     ->where('orders.is_delivered', '1')
        //     ->get();

        // $new_reservations = Reservation::where('is_seen', 0)->get();
        // $month_res = Reservation::where('updated_at', '>', Carbon::now()->subDays(30))
        //     ->where('is_seen', 1)
        //     ->get();

        return view('admin_pages.index', [
            'users' => $users,
            'total_users' => $total_users,

        ]);
    }
}
