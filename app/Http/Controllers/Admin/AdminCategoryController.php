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

class AdminCategoryController extends Controller
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
        $this->data['title'] = 'List category';
        $listCate = DB::table('categories')
            ->orderBy('id', 'desc')
            ->paginate(10);//phan trang
        $this->data['listCate'] = $listCate;
        return view('Admin.category.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['title'] = "Add Category";
        $listCate = DB::table('categories')
            ->orderBy('id','desc')->get();
        $this->data['listCate'] = $listCate;
        return view('Admin.category.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'txtName' => 'required'
        ]);
 
        $category = new Category([
            'name' => $request->get('txtName'),
            'slug'=> $request->get('txtSlug'),
            'desc'=> $request->get('txtDesc'),
            'parent_id'=> $request->get('parent_id'),
        ]);
        $category->save();
        Session::flash('message', "Successfully created category");
        return Redirect::to('category');
        
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
        $category = Category::find($id);
        $this->data['title'] = 'Edit Category';
        $this->data['category'] = $category;
        $this->data['listCate'] = DB::table('categories')
            ->orderBy('id', 'desc')
            ->get();
        return view('Admin.category.edit', $this->data);
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
 
        $category = Category::find($id);
        $category->name = $request->get('txtName');
        $category->slug = $request->get('txtSlug');
        $category->desc = $request->get('txtDesc');
        $category->parent_id = $request->get('parent_id');

        $category->update();
       
        Session::flash('message', "Successfully Updated category");
        return Redirect::to('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        Session::flash('message', "Successfully delete category");
        return Redirect::to('category');
    }
}
