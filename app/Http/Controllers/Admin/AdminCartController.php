<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Product;

class AdminCartController extends Controller
{
    public function index(Request $request)
    {
        if($request->wantsJson()){
            return response(
                $request->user()->cart()->get()
            );
        }
        return view('Admin.cart.index');
        
    }

    public function store(Request $request) 
    {
        $request->validate([
            'barcode' => 'required|exists:products,barcode',
        ]);
        $barcode = $request->barcode;
        $cart = $request->user()->cart()->where('barcode', $barcode)->first();
        if ($cart) {
            // update only quantity
            $cart->pivot->quantity = $cart->pivot->quantity + 1;
            $cart->pivot->save();
        } else {
            $product = Product::where('barcode', $barcode)->first();
            $request->user()->cart()->attach($product->id, ['quantity' => 1]);
        }

        return response('', 204);
    }

}
