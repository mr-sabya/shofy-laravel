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
    <li class="{{ Route::is('blog.index') ? 'active' : '' }}">
        <a href="{{ route('blog.index') }}">Blog</a>
    </li>
    <li><a href="contact.html">Contact</a></li>
</ul>