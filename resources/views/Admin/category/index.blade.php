@extends('Admin.app')
@section('content')
<div class="content-wrapper">
    <section class="content">
<div class="card-body">
<div class="container-fluid">
        <!-- Content Header (Page header) -->
<section >
    <h1>
        Categories
    </h1>
    <!-- Main content -->

    <a href="{{ url('category/create') }}" class="btn btn-success">
        <i class="fa fa-plus"></i>
        <span>Add Category</span>
    </a>
    <p style="height: 5px"></p>
    @if (Session::has('message'))
        <div class="alert alert-info"> {{ Session::get('message') }}</div>
    @endif
    <input type="text" id="myInput" onkeyup="searchByColumnNo('1')" placeholder="Search for names.." class="form-control">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <div class="row">
                <div class="col-sm-12">
                    <table id="myTable" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                        <thead>
                        <tr role="row">
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">ID</th>
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="">Name</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Slug</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Actions</th></tr>
                        </thead>
                        <tbody>
                        @if (isset($listCate) && count($listCate) >0)
                            @foreach($listCate as $cate)
                                <tr role="row" class="odd">
                                    <td>{{ $cate->id }}</td>
                                    <td class="sorting_1">{{ $cate->name }}</td>
                                    <td>{{ $cate->slug }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ url('category')}}/{{ $cate->id }}/edit" class="btn btn-default bg-purple">
                                                <i class="fa fa-edit"></i>
                                                <span>Edits</span>
                                            </a>
                                            <!--<a href="#" class="btn btn-default bg-red" onclick="delUser('{{ $cate->id }}');"></a>-->
                                            <a href="{{ url('category')}}/{{ $cate->id }}/delete" class="btn btn-default bg-red btnDelete" data-value="{{ $cate->id }}">
                                                <i class="fa fa-edit"></i>
                                                <span>Delete</span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                    <div style="float:right">
                        {!! $listCate->render() !!}
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.box -->
<!-- /.content -->
<form action="" method="post" id="formDelete">
    <input type="hidden" name="_method" value="DELETE">
    {{ csrf_field() }}
</form>
<div id="confirm" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Confirm delete</h4>
            </div>
            <div class="modal-body">
                <p> Are you sure?</p>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-primary" id="delete">Delete</button>
                <button type="button" data-dismiss="modal" class="btn">Cancel</button>
            </div>
        </div>
    </div>
</div>
</section>
</div>

@endsection

@section('page-js-script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.btnDelete').click(function(){
                var userId = $(this).attr('data-value');
                $('#confirm')
                    .modal({ backdrop: 'static', keyboard: false })
                    .one('click', '#delete', function (e) {
                        //delete function
                        var actionLink = "{{ url('/category')}}/"+ userId;
                        $('#formDelete').attr('action', actionLink).submit();
                    });
            });
        });
    </script>
@endsection