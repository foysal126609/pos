@extends('admin.master')
@section('title')
    POS || Category Info
@endsection
@section('content')
    <section class="content-header"id="shadow"style="margin-bottom: 25px">
        <h1>
            <i class="fa fa-cog"></i>
            Category Info
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Category</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        {{--<div class="well text-bold text-blue text-center" style="margin-top:2px">ADD Category Form</div>--}}
                        <h3 class=" text-bold text-blue text-center" style="margin-top: 25px">{{session('message')}}</h3>
                        <form class="form-horizontal" action="{{url('/category/new')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="CategoryName" class="col-sm-2 control-label">Category Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="category_name" id="CategoryName" placeholder="Category Name">
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
                                    <button type="submit" class="btn btn-primary">Save Category info</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="box box-primary">
                    <div class="box-header">
                        {{--<h3 class="box-title">All category information goes here</h3>--}}
                        {{--<h3 class=" text-bold text-blue text-center" style="margin-top: 25px">{{session('message')}}</h3>--}}

                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Si no</th>
                                <th>Category Name</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <?php $i = 1 ?>
                            @foreach($allCategoriesInfo as $allCategoryInfo)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{ $allCategoryInfo->category_name }}</td>
                                    <td>{{ $allCategoryInfo->publication_status == 1 ? 'Published':'Unpublished' }}</td>
                                    <td>
                                        @if($allCategoryInfo->publication_status == 1)
                                        <a href="{{ url('/category/unpublished/'.$allCategoryInfo->id) }}" class="btn btn-success btn-xs" title="Published Category">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                        @else
                                        <a href="{{ url('/category/published/'.$allCategoryInfo->id) }}" class="btn btn-warning btn-xs" title="UnPublished Category">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                        @endif
                                        <a href="{{ url('/edit-category-info/'.$allCategoryInfo->id) }}" class="btn btn-primary btn-xs" title="Edit Category">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                    </td>
                                </tr>
                                <?php $i++?>
                                @endforeach
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
@endsection