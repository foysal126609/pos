@extends('admin.master')
@section('title')
    POS || Item Info
@endsection
@section('content')
    <section class="content-header" id="shadow">
        {{--<div id="shadow">--}}
        <h1>
            <i class="fa fa-table"></i>
            Basic Item Info
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Item</li>
        </ol>
        {{--</div>--}}
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <a href="{{url('/add-item-info')}}" class="btn btn-primary pull-right" style="margin-top:2px">ADD Item Form</a>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Si no</th>
                                <th>Category Name</th>
                                <th>Brand Name</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tr>
                                <td>01</td>
                                <td>demo</td>
                                <td>demo</td>
                                <td>demo</td>
                                <td>demo</td>
                            </tr>
                        </table>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
@endsection