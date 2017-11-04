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
                        {{--<div class="well text-bold text-blue text-center" style="margin-top:2px">ADD Category Form</div>--}}
                        <h3 class=" text-bold text-blue text-center" style="margin-top: 25px">{{session('message')}}</h3>
                        <form class="form-horizontal" action="{{url('/itme/new')}}" method="post">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="CategoryName" class="col-sm-4 control-label">Category</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="CategoryName" name="category_id">
                                                <option>Select Category</option>
                                                @foreach($publishedcategories as $publishedcategory)
                                                    <option value="{{$publishedcategory->id}}">{{$publishedcategory->category_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="BrandName" class="col-sm-4 control-label">Brand</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="BrandName" name="brand_id">
                                                <option>Select Brand</option>
                                                @foreach($publishedbrands as $publishedbrand)
                                                    <option value="{{$publishedbrand->id}}">{{ $publishedbrand->brand_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ColorName" class="col-sm-4 control-label">Color</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="ColorName" name="color_id">
                                                <option>Select Color</option>
                                                @foreach($publishedcolors as $publishedcolor)
                                                    <option value="{{$publishedcolor->id}}">{{$publishedcolor->color_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="SizeName" class="col-sm-4 control-label">Size</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="SizeName" name="size_id">
                                                <option>Select Size</option>
                                                @foreach($publishedsizes as $publishedsiz)
                                                    <option value="{{$publishedsiz->id}}">{{$publishedsiz->size_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="UnitName" class="col-sm-4 control-label">Unit</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="UnitName" name="unit_id">
                                                <option>Select Unit</option>
                                                @foreach($publishedUnits as $publishedUnit)
                                                    <option value="{{$publishedUnit->id}}">{{$publishedUnit->unit_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6  ">

                                    <div class="form-group">
                                        <label for="ItemName" class="col-sm-4 control-label">Itme Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="item_name" id="ItemName" placeholder="Itme Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ItemCode" class="col-sm-4 control-label">Itme Code</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="item_code" id="ItemCode" placeholder="Itme Code">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ItemNewCode" class="col-sm-4 control-label">Itme New Code</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="item_new_code" id="ItemNewCode" placeholder="Itme New Code">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="AttachFile" class="col-sm-4 control-label">Attach file</label>
                                        <div class="col-sm-8">
                                            <input type="file" name="item_new_code" id="AttachFile">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="MinimumStockAmount" class="col-sm-4 control-label">Minimum Stock Amount</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" name="minimum_stock_amount" id="MinimumStockAmount" placeholder="Minimum Stock Amount">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-4 col-sm-8">
                                            <button type="submit" class="btn btn-primary btn-block">Save Item info</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
@endsection