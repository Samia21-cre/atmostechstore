@extends('Admin.app')
@section('content')
<div class="wrapper">


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Product</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add Product</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
  <form action="{{ url('product/store') }}" method="POST">
           {{ csrf_field() }}
           @if(count($errors) >0)
               <ul>
               @foreach($errors->all() as $error)
                   <li class="text-danger">{{ $error }}</li>
               @endforeach
               </ul>
           @endif
    <div class="row">
      <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">General</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
          </div>
          <div class="card-body">
            <div class="form-group" >
              <label for="inputName">Product Name</label>
              <input type="text" name="txtName" id="inputName" class="form-control">
            </div>
            <div class="form-group">
              <label for="inputDescription">Product Description</label>
              <textarea id="inputDescription" name="txtDesc" class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group">
              <label for="inputSlug">Slug</label>
              <input type="text" name="slug" id="inputSlug" class="form-control">
            </div>
            <div class="form-group">
              <label for="inputStatus">Category</label>
              <select class="form-control" name="parent_id"  value="{{ old('parent_id') }}">
                    <option value="0">---</option>
                    @foreach($listCate as $cate)
                        <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                    @endforeach
                </select>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Budget</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
            <div class="form-group">
                <label for="inputEstimatedBudget">SKU</label>
                <input type="number" name="sku" id="inputEstimatedBudget" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputEstimatedBudget">Price</label>
                <input type="number" name="price" id="inputEstimatedBudget" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputSpentBudget">Sale Price</label>
                <input type="number" name="saleprice" id="inputSpentBudget" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">Quantity</label>
                <input type="number" name="quantity" id="inputEstimatedDuration" class="form-control">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-success">
            <i class="fa fa-save"></i>
            <span>Save and back</span>
        </button>
       </div>
    </div>
    </form>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection