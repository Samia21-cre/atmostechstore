@extends('Admin.customer.app')
@section('content')
<div class="wrapper">


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Customer</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add Customer</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
  <form action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
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
          
          <div class="card-body">
          <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror"
                           id="first_name"
                           placeholder="First Name" value="{{ old('first_name') }}">
                    @error('first_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror"
                           id="last_name"
                           placeholder="Last Name" value="{{ old('last_name') }}">
                    @error('last_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                           placeholder="Email" value="{{ old('email') }}">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone"
                           placeholder="Phone" value="{{ old('phone') }}">
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"
                           id="address"
                           placeholder="Address" value="{{ old('address') }}">
                    @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="avatar">Avatar</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="avatar" id="avatar">
                        <label class="custom-file-label" for="avatar">Choose file</label>
                    </div>
                    @error('avatar')
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
<script src="{{ asset('Admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script>
    $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>
@endsection
