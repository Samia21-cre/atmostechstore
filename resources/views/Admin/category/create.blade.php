@extends('admin.app')
@section('content')
<div class="content-wrapper">
    <section class="content">
    <section class="content-header">
       <h1>
           Add Category
       </h1>
   </section>
   <section class="content">
       <form action="{{ url('category/store') }}" method="POST">
           {{ csrf_field() }}
           @if(count($errors) >0)
               <ul>
               @foreach($errors->all() as $error)
                   <li class="text-danger">{{ $error }}</li>
               @endforeach
               </ul>
           @endif
           <div class="box">
               <div class="box-body row">
                   <div class="form-group col-md-12">
                       <label>Name</label>
                       <input type="text" name="txtName" class="form-control" value="{{ old('txtName') }}">
                   </div>
                   <div class="form-group col-md-12">
                       <label>Slug</label>
                       <input type="text" name="txtSlug" class="form-control"  value="{{ old('txtSlug') }}">
                   </div>
                   <div class="form-group col-md-12">
                       <label>Desc</label>
                       <textarea name="txtDesc" class="form-control">{{ old('txtDesc') }}</textarea>
                   </div>
                   <div class="form-group col-md-12">
                       <label>Category</label>
                       <select class="form-control" name="parent_id"  value="{{ old('parent_id') }}">
                       	<option value="0">---</option>
                           @foreach($listCate as $cate)
                           	<option value="{{ $cate->id }}">{{ $cate->name }}</option>
                           @endforeach
                       </select>
                   </div>
               </div>
               <div class="box-footer row">
                   <button type="submit" class="btn btn-success">
                       <i class="fa fa-save"></i>
                       <span>Save and back</span>
                   </button>
               </div>
           </div>
       </form>
   </section>
@endsection