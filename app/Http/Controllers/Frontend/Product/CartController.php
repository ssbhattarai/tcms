<?php

namespace App\Http\Controllers\Frontend\Product;

use App\Http\Controllers\BaseController;
use App\Models\Product;

class CartController extends BaseController
{
    public function viewCart()
    {

        // dd($cart);
        return view('frontend_pages.product.cart');
    }

    public function getAllCartItems()
    {
        $cart = array_values(session()->get('cart'));
        $cart = json_encode($cart);
        if ($cart) {
            return $this->reportSuccess('Data Retrived Succesfully', $cart);
        } else {
            return json_encode($this->reportError('No product Added yet.'));
        }

    }

    public function deleteItem($id)
    {
        // session()->forget('cart');
        $cart = session()->get('cart');
        unset($cart[$id]);
        session()->put('cart', $cart);
        return json_encode($this->reportSuccess('Item removed from cart.'));
    }

    public function addToCart($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect('/');
        }
        $cart = session()->get('cart');
        if (!$cart) {

            $cart = [
                $id => [
                    'item_id' => $id,
                    'name' => $product->name,
                    'quantity' => 1,
                    'price' => $product->price,
                    'photo' => $product->image,
                ],
            ];

            session()->put('cart', $cart);

            return json_encode($this->reportSuccess('Item added to cart.'));

        }

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return json_encode($this->reportSuccess('Item added to cart.'));
        }

        $cart[$id] = [
            'item_id' => $id,
            'name' => $product->name,
            'quantity' => 1,
            'price' => $product->price,
            'photo' => $product->image,
        ];

        session()->put('cart', $cart);

        return json_encode($this->reportSuccess('Item added to cart.'));

    }
}