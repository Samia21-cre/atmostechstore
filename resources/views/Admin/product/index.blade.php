@extends('Admin.app')
@section('content')

<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <a href="{{ url('product/create') }}" class="btn btn-success">
                <i class="fa fa-plus"></i>
                <span>Add Product</span>
            </a>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>
    
    <!-- Main content -->
    <p style="height: 5px"></p>
    @if (Session::has('message'))
        <div class="alert alert-info"> {{ Session::get('message') }}</div>
    @endif
 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Products List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Barcode</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tbody>
                        @if (isset($listProd) && count($listProd) >0)
                            @foreach($listProd as $product)
                                <tr role="row" class="odd">
                                    <td>{{ $product->id }}</td>
                                    <td class="sorting_1">{{ $product->name }}</td>
                                    <td><img src="{{ Storage::url( $product->image)}}" alt="" width="100"></td>
                                    <td>{{ $product->barcode}}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    
                                    <td>
                                    <span class="right badge badge-{{ $product->status ? 'success' : 'danger' }}">{{$product->status ? 'Active' : 'Inactive'}}</span>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ url('product')}}/{{ $product->id }}/" class="btn btn-primary" style="margin:3px;"><i class="fa fa-eye"></i></a>
                                            <a href="{{ url('product')}}/{{ $product->id }}/edit" class="btn btn-info" style="margin:3px;"><i class="fa fa-edit"></i></a>
                                            <a href="{{ url('product')}}/{{ $product->id }}/delete" class="btn btn-danger " style="margin:3px;" data-value="{{ $product->id }}">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Barcode</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

@endsection




