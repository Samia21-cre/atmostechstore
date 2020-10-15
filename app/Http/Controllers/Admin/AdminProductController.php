<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Product;

class AdminProductController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listProd =  DB::table('products')
                    ->orderBy('id','desc')->get();
        $this->data['listProd'] = $listProd;
        return view('Admin.product.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image_path = '';

        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('products');
        }
        $request->validate([
            'txtName' => 'required',
            'image' => 'nullable|image'
        ]);
 
        $product = new Product([
            'name' => $request->get('txtName'),
            'description'=> $request->get('txtDesc'),
            'image'=> $image_path,
            'quantity'=> $request->get('quantity'),
            'barcode'=> $request->get('barcode'),
            'price'=> $request->get('price'),
            'status'=> $request->get('status'),
        ]);

        $product->save();
        if (!$product) {
            return redirect()->back()->with('error', 'Sorry, there a problem while creating product.');
        }
        Session::flash('message', "Successfully created product");
        return Redirect::to('product');
        
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
        $product = Product::find($id);
        $this->data['title'] = 'Edit Product';
        $this->data['product'] = $product;

        $this->data['listPro'] = DB::table('products')
            ->orderBy('id', 'desc')
            ->get();

        return view('Admin.product.edit', $this->data);
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
        $request->validate([
            'txtName' => 'required'
        ]);

        $product = Product::find($id);
        
        $product->name = $request->get('txtName');
        $product->description = $request->get('txtDesc');
        $product ->barcode = $request->get('barcode');
        $product ->price = $request->get('price');
        $product ->quantity = $request->get('quantity');
        $product ->status = $request->get('status');

        if ($request->hasFile('image')) {
            // Delete old image
            if ($product->image) {
                Storage::delete($product->image);
            }
            // Store image
            $image_path = $request->file('image')->store('products');
            // Save to Database
            $product->image = $image_path;
        }

        if (!$product->save()) {
            return redirect()->back()->with('error', 'Sorry, there\'re a problem while updating product.');
        }
        Session::flash('message', "Successfully updated product");
        return Redirect::to('product');    
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if ($product->image) {
            Storage::delete($product->image);
        }
        
        $product->delete();
        Session::flash('message', "Successfully delete product");
        return Redirect::to('product');
    
    }
}
