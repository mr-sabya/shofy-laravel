<!-- filter offcanvas area start -->
<div class="tp-filter-offcanvas-area tp-filter-offcanvas-right">
    <div class="tp-filter-offcanvas-wrapper">
        <div class="tp-filter-offcanvas-close">
            <button type="button" class="tp-filter-offcanvas-close-btn filter-close-btn">
                <i class="fa-solid fa-xmark"></i>
                Close
            </button>
        </div>
        <div class="tp-shop-sidebar">
            <!-- filter -->
            <div class="tp-shop-widget mb-35">
                <h3 class="tp-shop-widget-title no-border">Price Filter</h3>

                <div class="tp-shop-widget-content">
                    <div class="tp-shop-widget-filter">
                        <div id="slider-range-offcanvas" class="mb-10"></div>
                        <div class="tp-shop-widget-filter-info d-flex align-items-center justify-content-between">
                            <span class="input-range">
                                <input type="text" id="amount-offcanvas" readonly>
                            </span>
                            <button class="tp-shop-widget-filter-btn" type="button">Filter</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- status -->
            <div class="tp-shop-widget mb-50">
                <h3 class="tp-shop-widget-title">Product Status</h3>

                <div class="tp-shop-widget-content">
                    <div class="tp-shop-widget-checkbox">
                        <ul class="filter-items filter-checkbox">
                            <li class="filter-item checkbox">
                                <input id="on_sale2" type="checkbox">
                                <label for="on_sale2">On sale</label>
                            </li>
                            <li class="filter-item checkbox">
                                <input id="in_stock2" type="checkbox">
                                <label for="in_stock2">In Stock</label>
                            </li>
                        </ul><!-- .filter-items -->
                    </div>
                </div>
            </div>
            <!-- categories -->
            <div class="tp-shop-widget mb-50">
                <h3 class="tp-shop-widget-title">Categories</h3>

                <div class="tp-shop-widget-content">
                    <div class="tp-shop-widget-categories">
                        <ul>
                            <li><a href="#">Leather <span>10</span></a></li>
                            <li><a href="#">Classic Watch <span>18</span></a></li>
                            <li><a href="#">Leather Man Wacth <span>22</span></a></li>
                            <li><a href="#">Trending Watch <span>17</span></a></li>
                            <li><a href="#">Google <span>22</span></a></li>
                            <li><a href="#">Woman Wacth <span>14</span></a></li>
                            <li><a href="#">Tables <span>19</span></a></li>
                            <li><a href="#">Electronics <span>29</span></a></li>
                            <li><a href="#">Phones <span>05</span></a></li>
                            <li><a href="#">Grocery <span>14</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- color -->
            <div class="tp-shop-widget mb-50">
                <h3 class="tp-shop-widget-title">Filter by Color</h3>

                <div class="tp-shop-widget-content">
                    <div class="tp-shop-widget-checkbox-circle-list">
                        <ul>
                            <li>
                                <div class="tp-shop-widget-checkbox-circle">
                                    <input type="checkbox" id="red2">
                                    <label for="red2">Red</label>
                                    <span data-bg-color="#FF401F" class="tp-shop-widget-checkbox-circle-self"></span>
                                </div>
                                <span class="tp-shop-widget-checkbox-circle-number">8</span>
                            </li>
                            <li>
                                <div class="tp-shop-widget-checkbox-circle">
                                    <input type="checkbox" id="dark_blue2">
                                    <label for="dark_blue2">Dark Blue</label>
                                    <span data-bg-color="#4666FF" class="tp-shop-widget-checkbox-circle-self"></span>
                                </div>
                                <span class="tp-shop-widget-checkbox-circle-number">14</span>
                            </li>
                            <li>
                                <div class="tp-shop-widget-checkbox-circle">
                                    <input type="checkbox" id="oragnge2">
                                    <label for="oragnge2">Orange</label>
                                    <span data-bg-color="#FF9E2C" class="tp-shop-widget-checkbox-circle-self"></span>
                                </div>
                                <span class="tp-shop-widget-checkbox-circle-number">18</span>
                            </li>
                            <li>
                                <div class="tp-shop-widget-checkbox-circle">
                                    <input type="checkbox" id="purple2">
                                    <label for="purple2">Purple</label>
                                    <span data-bg-color="#B615FD" class="tp-shop-widget-checkbox-circle-self"></span>
                                </div>
                                <span class="tp-shop-widget-checkbox-circle-number">23</span>
                            </li>
                            <li>
                                <div class="tp-shop-widget-checkbox-circle">
                                    <input type="checkbox" id="yellow2">
                                    <label for="yellow2">Yellow</label>
                                    <span data-bg-color="#FFD747" class="tp-shop-widget-checkbox-circle-self"></span>
                                </div>
                                <span class="tp-shop-widget-checkbox-circle-number">17</span>
                            </li>
                            <li>
                                <div class="tp-shop-widget-checkbox-circle">
                                    <input type="checkbox" id="green2">
                                    <label for="green2">Green</label>
                                    <span data-bg-color="#41CF0F" class="tp-shop-widget-checkbox-circle-self"></span>
                                </div>
                                <span class="tp-shop-widget-checkbox-circle-number">15</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- product rating -->
            <div class="tp-shop-widget mb-50">
                <h3 class="tp-shop-widget-title">Top Rated Products</h3>

                <div class="tp-shop-widget-content">
                    <div class="tp-shop-widget-product">
                        <div class="tp-shop-widget-product-item d-flex align-items-center">
                            <div class="tp-shop-widget-product-thumb">
                                <a href="product-details.html">
                                    <img src="{{ url('assets/frontend/img/product/shop/sm/shop-sm-1.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="tp-shop-widget-product-content">
                                <div class="tp-shop-widget-product-rating-wrapper d-flex align-items-center">
                                    <div class="tp-shop-widget-product-rating">
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star-half-stroke"></i></span>
                                    </div>
                                    <div class="tp-shop-widget-product-rating-number">
                                        <span>(4.2)</span>
                                    </div>
                                </div>
                                <h4 class="tp-shop-widget-product-title">
                                    <a href="product-details.html">Smart watches wood...</a>
                                </h4>
                                <div class="tp-shop-widget-product-price-wrapper">
                                    <span class="tp-shop-widget-product-price">$150.00</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- brand -->
            <div class="tp-shop-widget mb-50">
                <h3 class="tp-shop-widget-title">Popular Brands</h3>

                <div class="tp-shop-widget-content ">
                    <div class="tp-shop-widget-brand-list d-flex align-items-center justify-content-between flex-wrap">
                        <div class="tp-shop-widget-brand-item">
                            <a href="#">
                                <img src="{{ url('assets/frontend/img/product/shop/brand/logo_01.png') }}" alt="">
                            </a>
                        </div>
                        <div class="tp-shop-widget-brand-item">
                            <a href="#">
                                <img src="{{ url('assets/frontend/img/product/shop/brand/logo_02.png') }}" alt="">
                            </a>
                        </div>
                        <div class="tp-shop-widget-brand-item">
                            <a href="#">
                                <img src="{{ url('assets/frontend/img/product/shop/brand/logo_03.png') }}" alt="">
                            </a>
                        </div>
                        <div class="tp-shop-widget-brand-item">
                            <a href="#">
                                <img src="{{ url('assets/frontend/img/product/shop/brand/logo_04.png') }}" alt="">
                            </a>
                        </div>
                        <div class="tp-shop-widget-brand-item">
                            <a href="#">
                                <img src="{{ url('assets/frontend/img/product/shop/brand/logo_05.png') }}" alt="">
                            </a>
                        </div>
                        <div class="tp-shop-widget-brand-item">
                            <a href="#">
                                <img src="{{ url('assets/frontend/img/product/shop/brand/logo_06.png') }}" alt="">
                            </a>
                        </div>
                        <div class="tp-shop-widget-brand-item">
                            <a href="#">
                                <img src="{{ url('assets/frontend/img/product/shop/brand/logo_07.png') }}" alt="">
                            </a>
                        </div>
                        <div class="tp-shop-widget-brand-item">
                            <a href="#">
                                <img src="{{ url('assets/frontend/img/product/shop/brand/logo_08.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- filter offcanvas area end -->