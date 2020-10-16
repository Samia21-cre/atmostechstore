@extends('Admin.app')

@section('content')
<div class="content-wrapper">
    <section class="content">
	 <section class="content-header">
        <h1>
            Update Setting
        </h1>
    </section>
    <section class="content">
    <form action="{{ route('settings.store') }}" method="post">
    @csrf
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Settings</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                    <label for="app_name">App name</label>
                    <input type="text" name="app_name" class="form-control @error('app_name') is-invalid @enderror" id="app_name"
                           placeholder="App name" value="{{ old('app_name', config('settings.app_name')) }}">
                    @error('app_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="app_description">App description</label>
                    <textarea name="app_description" class="form-control @error('app_description') is-invalid @enderror" id="app_description"
                              placeholder="App description">{{ old('app_description', config('settings.app_description')) }}</textarea>
                    @error('app_description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="currency_symbol">Currency symbol</label>
                    <input type="text" name="currency_symbol" class="form-control @error('currency_symbol') is-invalid @enderror" id="currency_symbol"
                           placeholder="Currency symbol" value="{{ old('currency_symbol', config('settings.currency_symbol')) }}">
                    @error('currency_symbol')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="box-footer row">
                    <button type="submit" class="btn btn-primary" style="margin:10">
                        <i class="fa fa-save"></i>
                        <span>Change Setting</span>
                    </button>
                </div>
            </div>
        </form>
    </section>
@endsection