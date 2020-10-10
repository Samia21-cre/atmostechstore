<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Category;
use App\Product;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listProd = \App\Product::with(['categories'])->get();
        return view('Admin.product.index',compact('listProd'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['title'] = "Add new Product";
        $listCate = DB::table('categories')
            ->orderBy('id','desc')->get();
        $this->data['listCate'] = $listCate;
        return view('Admin.product.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parent_id = $request->get('parent_id');
        $request->validate([
            'txtName' => 'required'
        ]);
 
        $product = new Product([
            'name' => $request->get('txtName'),
            'slug'=> $request->get('slug'),
            'description'=> $request->get('txtDesc'),
            'sku'=> $request->get('sku'),
            'price'=> $request->get('price'),
            'sale_price'=> $request->get('sale_price'),
            'quantity'=> $request->get('quantity'),
        ]);

        $product->save();
        $category = Category::find([$parent_id]);
        $product->categories()->attach($category);
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
        $category = Category::find($id);
        $this->data['title'] = 'Edit Product';
        $this->data['product'] = $product;
        $this->data['category'] = $category;
        $this->data['listPro'] = DB::table('products')
            ->orderBy('id', 'desc')
            ->get();
        $this->data['listCate'] = DB::table('categories')
            ->orderBy('id', 'desc')
            ->get();

        return view('admin.product.edit', $this->data);
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
        $parent_id = $request->get('parent_id');
        
        $request->validate([
            'txtName' => 'required'
        ]);
 
        $product = Product::find($id);
        $product->name = $request->get('txtName');
        $product->slug = $request->get('slug');
        $product->description = $request->get('txtDesc');
        $product ->sku = $request->get('sku');
        $product ->price = $request->get('price');
        $product ->sale_price = $request->get('sale_price');
        $product ->quantity = $request->get('quantity');

        $product->update();
       
        Session::flash('message', "Successfully updated product");
        return Redirect::to('product');
        $category = Category::find([$parent_id]);

        $product->categories()->attach($category);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parent_id = DB::table('category_product')->select('category_id')->where('product_id', $id)->get();
        return $parent_id;
        /*$product = Product::find($id);
        $product->categories()->detach($parent_id);
       /// $product->delete();
        Session::flash('message', "Successfully delete category");
        return Redirect::to('product');*/
    
    }
}
