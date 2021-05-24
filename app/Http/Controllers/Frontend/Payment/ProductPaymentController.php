<?php

namespace App\Http\Controllers\Frontend\Payment;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceProduct;

class ProductPaymentController extends Controller
{

    public function productPayment($slug)
    {
        $service_name = "";
        $product = ServiceProduct::select('has_topup', 'topup_amount', 'name', 'slug', 'image', 'status', 'service_id')
            ->where('slug', $slug)
            ->where('status', 1)
            ->first();
        if ($product) {
            $service = Service::select('slug')
                ->where('id', $product->service_id)
                ->where('status', 1)
                ->first();
            $service_name = $service->slug;
        } else {
            return redirect('/');
        }
        // dd($product);
        return view('frontend_pages.payment.product-payment', [
            'product' => $product,
            'service_name' => $service_name,
        ]);
    }
}