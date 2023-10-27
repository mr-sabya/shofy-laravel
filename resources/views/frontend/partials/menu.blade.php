<ul class="main_menu">
    <li class="{{ Route::is('home') ? 'active' : '' }}">
        <a href="{{ route('home')}}">Home</a>
    </li>
    <li class="{{ Route::is('department.index') ? 'active' : '' }}">
        <a href="{{ route('department.index') }}">Departments</a>
    </li>
    <li class="{{ Route::is('shop.index') ? 'active' : '' }}">
        <a href="{{ route('shop.index')}}">Shop</a>
    </li>
    <li class="{{ Route::is('coupon.index') ? 'active' : '' }}">
        <a href="{{ route('coupon.index') }}">Coupons</a>
    </li>
    <li class="has-dropdown">
        <a href="blog.html">Blog</a>
        <ul class="tp-submenu">
            <li><a href="blog.html">Blog Standard</a></li>
            <li><a href="blog-grid.html">Blog Grid</a></li>
            <li><a href="blog-list.html">Blog List</a></li>
            <li><a href="blog-details-2.html">Blog Details Full Width</a></li>
            <li><a href="blog-details.html">Blog Details</a></li>
        </ul>
    </li>
    <li><a href="contact.html">Contact</a></li>
</ul>