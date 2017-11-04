@extends('admin.master')
@section('title')
    POS || supplier Info
@endsection
@section('content')
    <section class="content-header" id="shadow">
        {{--<div id="shadow">--}}
        <h1>
            <i class="fa fa-table"></i>
            supplier Info
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">supplier</li>
        </ol>
        {{--</div>--}}
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    {{--<div class="box-header with-border">--}}
                        {{--<div class="well text-center text-bold text-blue" style="margin-top:2px">ADD supplier Form</div>--}}
                    {{--</div>--}}
                    <div class="box-body">
                        <form class="form-horizontal" action="{{url('/supplier/new')}}" method="post">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="supplierName" class="col-sm-4 control-label">supplier Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="supplier_name" id="supplierName" placeholder="supplier Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="EmailAddress" class="col-sm-4 control-label">Email Address</label>
                                        <div class="col-sm-8">
                                            <input type="email" class="form-control" name="email_address" id="EmailAddress" placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="MobileNumber" class="col-sm-4 control-label">Mobile Number</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" name="mobile_number" id="MobileNumber" placeholder="Mobile Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address" class="col-sm-2 control-label">Address</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="address" name="address" rows="3" placeholder="Address"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-primary">Save supplier info</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                <div class="box box-primary">
                    <div class="box-header">
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Si no</th>
                                <th>Supplier Name</th>
                                <th>Email Address</th>
                                <th>Mobile Number</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            {{--@foreach($allSizesInfo as $allSizeInfo)--}}
                                <tr>
                                    <td>01</td>
                                    <td>demo</td>
                                    <td>demo</td>
                                    <td>demo</td>
                                    <td>demo</td>
                                    <td>
                                        <a href="{{ url('/size/unpublished/') }}" class="btn btn-success btn-xs" title="Published">
                                                <span class="glyphicon glyphicon-arrow-up"></span>
                                            </a>

                                            <a href="{{ url('/size/published/') }}" class="btn btn-warning btn-xs" title="UnPublished">
                                                <span class="glyphicon glyphicon-arrow-down"></span>
                                            </a>

                                        <a href="{{ url('/edit-size-info/') }}" class="btn btn-primary btn-xs" title="Edit">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                    </td>
                                </tr>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
                    <!-- /.col-lg-12 -->
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
@endsection