<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <div id="scroll-nav">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/adminAssets/')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..." />
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->

        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="{{url('/home')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user-plus"></i>
                    User Info
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/add-user')}}"><i class="fa fa-circle-o"></i> Add User</a></li>
                    <li><a href="{{url('/manage-user')}}"><i class="fa fa-circle-o"></i> Manage User</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cog"></i>
                    Settings Module
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/category-info')}}"><i class="fa fa-circle-o"></i> Category Info</a></li>
                    <li><a href="{{url('/brand-info')}}"><i class="fa fa-circle-o"></i>Brand Info</a></li>
                    <li><a href="{{url('/color-info')}}"><i class="fa fa-circle-o"></i>Color Info</a></li>
                    <li><a href="{{url('/size-info')}}"><i class="fa fa-circle-o"></i>Size Info</a></li>
                    <li><a href="{{url('/unit-info')}}"><i class="fa fa-circle-o"></i>Unit Info</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="{{url('/item-info')}}">
                    <i class="fa fa-table"></i> <span>Item Info</span>
                </a>
            </li>
            <li class="treeview">

                <a href="{{url('/supplier-info')}}">
                    <i class="fa fa-download"></i> <span>Suppliers Info</span>
                </a>
                {{--<a href="#">--}}
                    {{--<i class="fa fa-download"></i>--}}
                    {{--Suppliers Module--}}
                    {{--<i class="fa fa-angle-left pull-right"></i>--}}
                {{--</a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li><a href="{{url('/add-brand')}}"><i class="fa fa-circle-o"></i> Add Brand</a></li>--}}
                    {{--<li><a href="{{url('/manage-brand')}}"><i class="fa fa-circle-o"></i> Manage Brand</a></li>--}}
                {{--</ul>--}}
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-database"></i>
                    Stock Module
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/add-product')}}"><i class="fa fa-circle-o"></i> Add Product</a></li>
                    <li><a href="{{url('/manage-product')}}"><i class="fa fa-circle-o"></i> Manage Product</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cart-plus "></i>
                    Sales Module
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/add-slider')}}"><i class="fa fa-circle-o"></i> Add Slider</a></li>
                    <li><a href="{{url('/manage-slider')}}"><i class="fa fa-circle-o"></i> Manage Slider</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-credit-card "></i>
                    Accounts Module
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/add-feature')}}"><i class="fa fa-circle-o"></i> Add  Feature</a></li>
                    <li><a href="{{url('/manage-feature')}}"><i class="fa fa-circle-o"></i> Manage  Feature</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    Customer Module
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/add-notice')}}"><i class="fa fa-circle-o"></i> Add  Notice</a></li>
                    <li><a href="{{url('/manage-notice')}}"><i class="fa fa-circle-o"></i> Manage  Notice</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-desktop"></i>
                    Reports Module
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/add-client-message')}}"><i class="fa fa-circle-o"></i> Add  Client Message</a></li>
                    <li><a href="{{url('/manage-client-message')}}"><i class="fa fa-circle-o"></i> Manage  Client Message</a></li>
                </ul>
            </li>
        </ul>
        </div>
    </section>
    <!-- /.sidebar -->
</aside>