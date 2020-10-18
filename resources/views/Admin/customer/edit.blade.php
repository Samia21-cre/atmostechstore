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
        <form action="{{ url('admin/customer') }}/{{ $customer->id }}" method="POST">
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