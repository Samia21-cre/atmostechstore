@extends('Admin.app')
@section('content')
<div class="content-wrapper">
    <section class="content">
	 <section class="content-header">
        <h1>
            Edit Customer
        </h1>
    </section>
    <section class="content">
        <form action="{{ url('product') }}/{{ $product->id }}" method="POST">
        	<input type="hidden" name="_method" value="GET">
            {{ csrf_field() }}
            @if(count($errors) >0)
                <ul>
                @foreach($errors->all() as $error)
                    <li class="text-danger">{{ $error }}</li>
                @endforeach
                </ul>
            @endif
            <div class="box">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="txtName" class="form-control @error('name') is-invalid @enderror" id="name"
                    placeholder="Name" value="{{ old('name', $product->name) }}">
            </div>


            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="txtDesc" class="form-control @error('description') is-invalid @enderror"
                    id="description"
                    placeholder="description">{{ old('description', $product->description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" id="image">
                    <label class="custom-file-label" for="image">Choose file</label>
                </div>
            </div>

            <div class="form-group">
                <label for="barcode">Barcode</label>
                <input type="text" name="barcode" class="form-control @error('barcode') is-invalid @enderror"
                    id="barcode" placeholder="barcode" value="{{ old('barcode', $product->barcode) }}">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="price"
                    placeholder="price" value="{{ old('price', $product->price) }}">
            </div>

            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="text" name="quantity" class="form-control @error('quantity') is-invalid @enderror"
                    id="quantity" placeholder="Quantity" value="{{ old('quantity', $product->quantity) }}">
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" class="form-control @error('status') is-invalid @enderror" id="status">
                    <option value="1" {{ old('status', $product->status) === 1 ? 'selected' : ''}}>Active</option>
                    <option value="0" {{ old('status', $product->status) === 0 ? 'selected' : ''}}>Inactive</option>
                </select>
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