@extends('admin.master')
@section('title')
    POS || Unit Info
@endsection
@section('content')
    <section class="content-header"id="shadow">
        <h1>
            <i class="fa fa-cog"></i>
            Unit Info
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Unit</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                {{--<div class="well text-bold text-blue text-center" style="margin-top:2px">ADD Category Form</div>--}}
                                <h3 class=" text-bold text-blue text-center" style="margin-top: 25px">{{session('message')}}</h3>
                                <form class="form-horizontal" name="editUnitForm" action="{{url('/unit/update')}}" method="post">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="CategoryName" class="col-sm-2 control-label">Unit Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="{{ $unitInfoById->unit_name }}" name="unit_name" id="CategoryName" placeholder="Unit Name">
                                            <input type="hidden" value="{{ $unitInfoById->id }}" name="unit_id">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="publicationStatus" class="col-sm-2 control-label">publication Status</label>
                                        <div class="col-sm-10">
                                            {{--<select class="form-control" id="publicationStatus" name="publication_status">--}}
                                            {{--<option> -- Select publication Status--</option>--}}
                                            {{--<option value="1">Published</option>--}}
                                            {{--<option value="0">UnPublished</option>--}}
                                            {{--</select>--}}
                                            <input type="radio" name="publication_status" value="1"> Published  	&nbsp; 	&nbsp; 	&nbsp;
                                            <input type="radio" name="publication_status" value="0"> UnPublished<br>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-primary">Save Unit info</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="box box-primary">
                            <div class="box-body">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th>Unit</th>
                                    </tr>
                                    <tr>
                                        <td>demo</td>
                                    </tr>
                                    <tr>
                                        <td>demo</td>
                                    </tr>
                                    <tr>
                                        <td>demo</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box box-primary">
                    <div class="box-header">
                        {{--<h3 class="box-title">All category information goes here</h3>--}}
                        {{--<h3 class=" text-bold text-blue text-center" style="margin-top: 25px">{{session('message')}}</h3>--}}
                    </div><!-- /.box-header -->
                    <div class="box-body ">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Si no</th>
                                    <th>Unit Name</th>
                                    <th>Publication Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <?php $i = 1 ?>
                                @foreach($allUnitsInfo as $allUnitInfo)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{ $allUnitInfo->unit_name }}</td>
                                        <td>{{ $allUnitInfo->publication_status == 1 ? 'Published':'Unpublished' }}</td>
                                        <td>
                                            @if($allUnitInfo->publication_status == 1)
                                                <a href="{{ url('/unit/unpublished/'.$allUnitInfo->id) }}" class="btn btn-success btn-xs" title="Published color">
                                                    <span class="glyphicon glyphicon-arrow-up"></span>
                                                </a>
                                            @else
                                                <a href="{{ url('/unit/published/'.$allUnitInfo->id) }}" class="btn btn-warning btn-xs" title="UnPublished color">
                                                    <span class="glyphicon glyphicon-arrow-down"></span>
                                                </a>
                                            @endif
                                            <a href="{{ url('/edit-unit-info/'.$allUnitInfo->id) }}" class="btn btn-primary btn-xs" title="Edit color">
                                                <span class="glyphicon glyphicon-edit"></span>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php $i++?>
                                @endforeach
                            </table>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

    <script>
        document.forms['editUnitForm'].elements['publication_status'].value='{{ $allUnitInfo->publication_status }}';
    </script>

@endsection