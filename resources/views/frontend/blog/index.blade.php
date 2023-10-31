@extends('frontend.layouts.base')

@section('title', 'Cupons')

@section('links')
<span>@yield('title')</span>
@endsection

@section('content')
<!-- blog grid area start -->
<section class="tp-blog-grid-area pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">


                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="tp-blog-grid-item p-relative mb-30">
                            <div class="tp-blog-grid-thumb w-img fix mb-30">
                                <a href="blog-details.html">
                                    <img src="{{ url('assets/frontend/img/blog/grid/blog-grid-1.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="tp-blog-grid-content">
                                <div class="tp-blog-grid-meta">
                                    <span>
                                        <span>
                                            <i class="far fa-clock"></i>
                                        </span>
                                        24 April, 2023
                                    </span>
                                    <span>
                                        <span>
                                            <i class="far fa-comments"></i>
                                        </span>
                                        Comments (0)
                                    </span>
                                </div>
                                <h3 class="tp-blog-grid-title">
                                    <a href="blog-details.html">Hiring the Right Sales Team at the Right Time</a>
                                </h3>
                                <p>Cursus mattis sociis natoque penatibus et magnis montes,nascetur ridiculus.</p>

                                <div class="tp-blog-grid-btn">
                                    <a href="blog-details.html" class="tp-link-btn-3">
                                        Read More
                                        <span>
                                            <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16 7.5L1 7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M9.9502 1.47541L16.0002 7.49941L9.9502 13.5244" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>


                <div class="row">
                    <div class="col-xl-12">
                        <div class="tp-blog-pagination mt-30">
                            <div class="tp-pagination">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="blog-grid.html" class="tp-pagination-prev prev page-numbers">
                                                <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1.00017 6.77879L14 6.77879" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M6.24316 11.9999L0.999899 6.77922L6.24316 1.55762" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-grid.html">1</a>
                                        </li>
                                        <li>
                                            <span class="current">2</span>
                                        </li>
                                        <li>
                                            <a href="blog-grid.html">3</a>
                                        </li>
                                        <li>
                                            <a href="blog-grid.html" class="next page-numbers">
                                                <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.9998 6.77883L1 6.77883" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M8.75684 1.55767L14.0001 6.7784L8.75684 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="tp-sidebar-wrapper">
                    <div class="tp-sidebar-widget mb-35">
                        <div class="tp-sidebar-search">
                            <form action="#">
                                <div class="tp-sidebar-search-input">
                                    <input type="text" placeholder="Search...">
                                    <button type="submit">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.11111 15.2222C12.0385 15.2222 15.2222 12.0385 15.2222 8.11111C15.2222 4.18375 12.0385 1 8.11111 1C4.18375 1 1 4.18375 1 8.11111C1 12.0385 4.18375 15.2222 8.11111 15.2222Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M16.9995 17L13.1328 13.1333" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- about -->
                    <div class="tp-sidebar-widget mb-35">
                        <h3 class="tp-sidebar-widget-title">About me</h3>
                        <div class="tp-sidebar-widget-content">
                            <div class="tp-sidebar-about">
                                <div class="tp-sidebar-about-thumb mb-25">
                                    <a href="#">
                                        <img src="{{ url('assets/frontend/img/users/user-11.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="tp-sidebar-about-content">
                                    <h3 class="tp-sidebar-about-title">
                                        <a href="#">Ravi O'Leigh</a>
                                    </h3>
                                    <span class="tp-sidebar-about-designation">Photographer & Blogger</span>
                                    <p>Lorem ligula eget dolor. Aenean massa. Cum sociis que penatibus magnis dis parturient</p>
                                    <div class="tp-sidebar-about-signature">
                                        <img src="{{ url('assets/frontend/img/blog/signature/signature.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- about end -->

                    <!-- latest post start -->
                    <div class="tp-sidebar-widget mb-35">
                        <h3 class="tp-sidebar-widget-title">Latest Posts</h3>
                        <div class="tp-sidebar-widget-content">
                            <div class="tp-sidebar-blog-item-wrapper">
                                <div class="tp-sidebar-blog-item d-flex align-items-center">
                                    <div class="tp-sidebar-blog-thumb">
                                        <a href="blog-details.html">
                                            <img src="{{ url('assets/frontend/img/blog/sidebar/blog-sidebar-1.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="tp-sidebar-blog-content">
                                        <div class="tp-sidebar-blog-meta">
                                            <span>12 April, 2023</span>
                                        </div>
                                        <h3 class="tp-sidebar-blog-title">
                                            <a href="blog-details.html">Sweeten your summer Wardrobes</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="tp-sidebar-blog-item d-flex align-items-center">
                                    <div class="tp-sidebar-blog-thumb">
                                        <a href="blog-details.html">
                                            <img src="{{ url('assets/frontend/img/blog/sidebar/blog-sidebar-2.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="tp-sidebar-blog-content">
                                        <div class="tp-sidebar-blog-meta">
                                            <span>8 July, 2023</span>
                                        </div>
                                        <h3 class="tp-sidebar-blog-title">
                                            <a href="blog-details.html">Exploring the English Countryside</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="tp-sidebar-blog-item d-flex align-items-center">
                                    <div class="tp-sidebar-blog-thumb">
                                        <a href="blog-details.html">
                                            <img src="{{ url('assets/frontend/img/blog/sidebar/blog-sidebar-3.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="tp-sidebar-blog-content">
                                        <div class="tp-sidebar-blog-meta">
                                            <span>12 April, 2023</span>
                                        </div>
                                        <h3 class="tp-sidebar-blog-title">
                                            <a href="blog-details.html">Freelancer Days 2023, What’s new?</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- latest post end -->

                    <!-- categories start -->
                    <div class="tp-sidebar-widget widget_categories mb-35">
                        <h3 class="tp-sidebar-widget-title">Categories</h3>
                        <div class="tp-sidebar-widget-content">
                            <ul>
                                <li><a href="blog-grid.html">Farming <span>(12)</span></a></li>
                                <li><a href="blog-grid.html">Crisp Bread & Cake <span>(6)</span></a></li>
                                <li><a href="blog-grid.html">Milk & Meat <span>(2)</span></a></li>
                                <li><a href="blog-grid.html">Organic Fruits <span>(8)</span></a></li>
                                <li><a href="blog-grid.html">Sea Foods <span>(0)</span></a></li>
                                <li><a href="blog-grid.html">Vegetable <span>(3)</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- categories end -->

                    <!-- tag cloud start -->
                    <div class="tp-sidebar-widget mb-35">
                        <h3 class="tp-sidebar-widget-title">Popular Tags</h3>
                        <div class="tp-sidebar-widget-content tagcloud">
                            <a href="#">Summer</a>
                            <a href="#">Vintage</a>
                            <a href="#">Sunglasses</a>
                            <a href="#">Organic Food</a>
                            <a href="#">Lifesttyle</a>
                            <a href="#">Nature</a>
                        </div>
                    </div>
                    <!-- tag cloud end -->

                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog grid area end -->
@endsection