<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin')}}" class="brand-link">
        <h4 class="brand-text font-weight-light">Admin Finder Helper</h4>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-tree-view">
                    <a href="{{route('admin')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Trang chủ</p>
                    </a>
                </li>
                <li class="nav-item has-tree-view">
                    <a href="{{ route('categories.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>@lang('messages.category')</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('posts.index') }}" class="nav-link ">
                        <i class="fas fa-newspaper"></i>
                        <p>
                            @lang('messages.postJob')
                            <span class="right badge badge-danger">Bài viết mới</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{route('list-user')}}" class="nav-link">
                        <i class="fas fa-user"></i>
                        <p>@lang('messages.user')</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{route('coins.index')}}" class="nav-link">
                        <i class="fas fa-dollar-sign"></i>
                        <p>
                            @lang('messages.coin')
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{route('contact.list-contact')}}" class="nav-link">
                        <i class="fas fa-envelope"></i>
                        <p>
                            @lang('messages.contact')
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item has-tree-view">
                    <a href="{{route('logoutAdmin')}}" class="nav-link">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>@lang('messages.logout')</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>@yield('titlePage')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
