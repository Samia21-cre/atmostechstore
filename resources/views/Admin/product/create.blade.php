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
  <form action="{{ url('product/store') }}" method="POST" enctype="multipart/form-data">
           {{ csrf_field() }}
           @if(count($errors) >0)
               <ul>
               @foreach($errors->all() as $error)
                   <li class="text-danger">{{ $error }}</li>
               @endforeach
               </ul>
           @endif
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary" style="">
          <div class="card-header">
            <h3 class="card-title">General</h3>
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
                <label for="image">Image</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" id="image">
                    <label class="custom-file-label" for="image">Choose file</label>
                </div>
                @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="barcode">Barcode</label>
                <input type="text" name="barcode" class="form-control @error('barcode') is-invalid @enderror"
                    id="barcode" placeholder="barcode" value="{{ old('barcode') }}">
                @error('barcode')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="price"
                    placeholder="price" value="{{ old('price') }}">
                @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Quantity</label>
                <input type="text" name="quantity" class="form-control @error('price') is-invalid @enderror" id="price"
                    placeholder="price" value="{{ old('price') }}">
                @error('quantity')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" class="form-control @error('status') is-invalid @enderror" id="status">
                    <option value="1" {{ old('status') === 1 ? 'selected' : ''}}>Active</option>
                    <option value="0" {{ old('status') === 0 ? 'selected' : ''}}>Inactive</option>
                </select>
                @error('status')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-success" >
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
<script src="{{ asset('Admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script>
    $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>
@endsection
