<?php

namespace App\Http\Controllers\Frontend\Payment;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart');
        // dd($cart);
        return view('frontend_pages.payment.checkout', [
            'cart' => $cart,
        ]);
    }

    public function saveCheckout(Request $request)
    {
        // dd($request->all());
        $validate = $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'state' => 'required|string',
            'address' => 'required|string',
        ]);

        $user_id = auth()->user()->id;
        $user_save = User::find($user_id);
        $user_save->state = $request->state;
        $user_save->address = $request->address;
        $user_save->save();

        $cart = session()->get('cart');

        // dd($cart);

        if (isset($cart)) {

            foreach ($cart as $key => $value) {
                $store = new Order();
                $store->product_id = $value['item_id'];
                $store->user_id = $user_id;
                $store->quantity = $value['quantity'];
                $store->save();
            }

            if ($store) {
                session()->forget('cart');
                return redirect('/')->with('success', 'Order has Been Placed Successfully');
            } else {
                return redirect()->back()->with('error', 'Order Failed!');
            }

        }

    }
}