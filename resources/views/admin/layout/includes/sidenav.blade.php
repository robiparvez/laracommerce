{{-- Side Navigation --}}

<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">

            <!-- Main menu -->
            <li class="current">
                <a href="{{route('admin.index')}}"><i class="glyphicon glyphicon-home"></i>Dashboard</a>
            </li>

            <li class="submenu">

                <a href="#"><i class="glyphicon glyphicon-menu-hamburger"></i></i>Products<span class="caret pull-right"></span></a>
                <ul>
                    <li>
                        <a href="{{route('products.index')}}">All Products</a>
                        <a href="{{route('products.create')}}"><i class="glyphicon glyphicon-plus"></i> Add Product</a>
                    </li>
                </ul>

                <a href="#"><i class="glyphicon glyphicon-menu-hamburger"></i></i>Categories<span class="caret pull-right"></span></a>
                <ul>
                    <li>
                        <a href="{{ route('categories.index') }}">All Categories</a>
                        <a href="{{ route('categories.create') }}"><i class="glyphicon glyphicon-plus"></i> Add Category </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- ADMIN SIDE NAV-->
