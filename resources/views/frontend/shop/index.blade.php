@extends('frontend.layouts.base')

@section('title', 'Shop')

@section('links')
<span>@yield('title')</span>
@endsection

@section('content')
<!-- shop area start -->
<section class="tp-shop-area pb-120">
    <div class="container">
        <div class="row">

            <div class="col-xl-12 col-lg-12">
                <div class="tp-shop-main-wrapper">

                    <div class="tp-shop-top mb-45">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="tp-shop-top-left d-flex align-items-center ">
                                    <div class="tp-shop-top-tab tp-tab">
                                        <ul class="nav nav-tabs" id="productTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="grid-tab" data-bs-toggle="tab" data-bs-target="#grid-tab-pane" type="button" role="tab" aria-controls="grid-tab-pane" aria-selected="true">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.3327 6.01341V2.98675C16.3327 2.04675 15.906 1.66675 14.846 1.66675H12.1527C11.0927 1.66675 10.666 2.04675 10.666 2.98675V6.00675C10.666 6.95341 11.0927 7.32675 12.1527 7.32675H14.846C15.906 7.33341 16.3327 6.95341 16.3327 6.01341Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M16.3327 15.18V12.4867C16.3327 11.4267 15.906 11 14.846 11H12.1527C11.0927 11 10.666 11.4267 10.666 12.4867V15.18C10.666 16.24 11.0927 16.6667 12.1527 16.6667H14.846C15.906 16.6667 16.3327 16.24 16.3327 15.18Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M7.33268 6.01341V2.98675C7.33268 2.04675 6.90602 1.66675 5.84602 1.66675H3.15268C2.09268 1.66675 1.66602 2.04675 1.66602 2.98675V6.00675C1.66602 6.95341 2.09268 7.32675 3.15268 7.32675H5.84602C6.90602 7.33341 7.33268 6.95341 7.33268 6.01341Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M7.33268 15.18V12.4867C7.33268 11.4267 6.90602 11 5.84602 11H3.15268C2.09268 11 1.66602 11.4267 1.66602 12.4867V15.18C1.66602 16.24 2.09268 16.6667 3.15268 16.6667H5.84602C6.90602 16.6667 7.33268 16.24 7.33268 15.18Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="list-tab" data-bs-toggle="tab" data-bs-target="#list-tab-pane" type="button" role="tab" aria-controls="list-tab-pane" aria-selected="false">
                                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15 7.11108H1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M15 1H1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M15 13.2222H1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tp-shop-top-result">
                                        <p>Showing 1–14 of 26 results</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="tp-shop-top-right d-sm-flex align-items-center justify-content-xl-end">
                                    <div class="tp-shop-top-select">
                                        <select>
                                            <option>Default Sorting</option>
                                            <option>Low to Hight</option>
                                            <option>High to Low</option>
                                            <option>New Added</option>
                                            <option>On Sale</option>
                                        </select>
                                    </div>
                                    <div class="tp-shop-top-filter">
                                        <button type="button" class="tp-filter-btn filter-open-btn">
                                            <span>
                                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.9998 3.45001H10.7998" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M3.8 3.45001H1" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M6.5999 5.9C7.953 5.9 9.0499 4.8031 9.0499 3.45C9.0499 2.0969 7.953 1 6.5999 1C5.2468 1 4.1499 2.0969 4.1499 3.45C4.1499 4.8031 5.2468 5.9 6.5999 5.9Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M15.0002 11.15H12.2002" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M5.2 11.15H1" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M9.4002 13.6C10.7533 13.6 11.8502 12.5031 11.8502 11.15C11.8502 9.79691 10.7533 8.70001 9.4002 8.70001C8.0471 8.70001 6.9502 9.79691 6.9502 11.15C6.9502 12.5031 8.0471 13.6 9.4002 13.6Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                            Filter
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tp-shop-items-wrapper tp-shop-item-primary">
                        <div class="tab-content" id="productTabContent">
                            <div class="tab-pane fade show active" id="grid-tab-pane" role="tabpanel" aria-labelledby="grid-tab" tabindex="0">
                                <div class="row infinite-container">
                                    <div class="col-xl-3 col-md-6 col-sm-6 infinite-item">
                                        <div class="tp-product-item-2 mb-40">
                                            <div class="tp-product-thumb-2 p-relative z-index-1 fix w-img">
                                                <a href="product-details.html">
                                                    <img src="{{ url('assets/frontend/img/product/2/prodcut-1.jpg') }}" alt="">
                                                </a>
                                                <!-- product action -->
                                                <div class="tp-product-action-2 tp-product-action-blackStyle">
                                                    <div class="tp-product-action-item-2 d-flex flex-column">
                                                        <button type="button" class="tp-product-action-btn-2 tp-product-add-cart-btn">
                                                            <i class="fa-regular fa-cart-shopping"></i>
                                                            <span class="tp-product-tooltip tp-product-tooltip-right">Add to
                                                                Cart</span>
                                                        </button>
                                                        <button type="button" class="tp-product-action-btn-2 tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                            <i class="fa-regular fa-eye"></i>
                                                            <span class="tp-product-tooltip tp-product-tooltip-right">Quick
                                                                View</span>
                                                        </button>
                                                        <button type="button" class="tp-product-action-btn-2 tp-product-add-to-wishlist-btn">
                                                            <i class="fa-regular fa-heart"></i>
                                                            <span class="tp-product-tooltip tp-product-tooltip-right">Add To
                                                                Wishlist</span>
                                                        </button>
                                                        <button type="button" class="tp-product-action-btn-2 tp-product-add-to-compare-btn">
                                                            <i class="fa-regular fa-arrows-repeat"></i>
                                                            <span class="tp-product-tooltip tp-product-tooltip-right">Add To
                                                                Compare</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tp-product-content-2 pt-15">
                                                <div class="tp-product-tag-2">
                                                    <a href="#">Whitetails Store</a>
                                                </div>
                                                <h3 class="tp-product-title-2">
                                                    <a href="product-details.html">Whitetails Women's Open Sky</a>
                                                </h3>
                                                <div class="tp-product-rating-icon tp-product-rating-icon-2">
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                </div>
                                                <div class="tp-product-price-wrapper-2">
                                                    <span class="tp-product-price-2 new-price">$340.00</span>
                                                    <span class="tp-product-price-2 old-price">$475.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="tab-pane fade" id="list-tab-pane" role="tabpanel" aria-labelledby="list-tab" tabindex="0">
                                <div class="tp-shop-list-wrapper tp-shop-item-primary mb-70">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="tp-product-list-item d-md-flex">
                                                <div class="tp-product-list-thumb p-relative fix">
                                                    <a href="#">
                                                        <img src="{{ url('assets/frontend/img/product/list/product-list-1.jpg') }}" alt="">
                                                    </a>

                                                    <!-- product action -->
                                                    <div class="tp-product-action-2 tp-product-action-blackStyle">

                                                        <div class="tp-product-action-item-2 d-flex flex-column">
                                                            <button type="button" class="tp-product-action-btn-2 tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                                <i class="fa-regular fa-eye"></i>
                                                                <span class="tp-product-tooltip tp-product-tooltip-right">Quick
                                                                    View</span>
                                                            </button>
                                                            <button type="button" class="tp-product-action-btn-2 tp-product-add-to-wishlist-btn">
                                                                <i class="fa-regular fa-heart"></i>
                                                                <span class="tp-product-tooltip tp-product-tooltip-right">Add To
                                                                    Wishlist</span>
                                                            </button>
                                                            <button type="button" class="tp-product-action-btn-2 tp-product-add-to-compare-btn">
                                                                <i class="fa-regular fa-arrows-repeat"></i>
                                                                <span class="tp-product-tooltip tp-product-tooltip-right">Add To
                                                                    Compare</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tp-product-list-content">
                                                    <div class="tp-product-content-2 pt-15">
                                                        <div class="tp-product-tag-2">
                                                            <a href="#">Shirt, </a>
                                                            <a href="#">Branded</a>
                                                        </div>
                                                        <h3 class="tp-product-title-2">
                                                            <a href="product-details.html">Simple Modern School Boys</a>
                                                        </h3>
                                                        <div class="tp-product-rating-icon tp-product-rating-icon-2">
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                            <span><i class="fa-solid fa-star"></i></span>
                                                        </div>
                                                        <div class="tp-product-price-wrapper-2">
                                                            <span class="tp-product-price-2 new-price">$82.00</span>
                                                            <span class="tp-product-price-2 old-price">$99.00</span>
                                                        </div>
                                                        <p>Auctor urna nunc id cursus. Scelerisque purus semper eget duis at
                                                            pharetra vel turpis nunc eget.</p>
                                                        <div class="tp-product-list-add-to-cart">
                                                            <button class="tp-product-list-add-to-cart-btn">Add To Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tp-shop-pagination mt-20">
                        <div class="tp-pagination">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="shop.html" class="tp-pagination-prev prev page-numbers">
                                            <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.00017 6.77879L14 6.77879" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M6.24316 11.9999L0.999899 6.77922L6.24316 1.55762" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="shop.html">1</a>
                                    </li>
                                    <li>
                                        <span class="current">2</span>
                                    </li>
                                    <li>
                                        <a href="shop.html">3</a>
                                    </li>
                                    <li>
                                        <a href="shop.html" class="next page-numbers">
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
    </div>
</section>
<!-- shop area end -->

<div class="modal fade tp-product-modal" id="producQuickViewModal" tabindex="-1" aria-labelledby="producQuickViewModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="tp-product-modal-content d-lg-flex align-items-start">
                <button type="button" class="tp-product-modal-close-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal"><i class="fa-regular fa-xmark"></i></button>
                <div class="tp-product-details-thumb-wrapper tp-tab d-sm-flex">
                    <nav>
                        <div class="nav nav-tabs flex-sm-column " id="productDetailsNavThumb" role="tablist">
                            <button class="nav-link active" id="nav-1-tab" data-bs-toggle="tab" data-bs-target="#nav-1" type="button" role="tab" aria-controls="nav-1" aria-selected="true">
                                <img src="{{ url('assets/frontend/img/product/details/nav/product-details-nav-1.jpg') }}" alt="">
                            </button>
                            <button class="nav-link" id="nav-2-tab" data-bs-toggle="tab" data-bs-target="#nav-2" type="button" role="tab" aria-controls="nav-2" aria-selected="false">
                                <img src="{{ url('assets/frontend/img/product/details/nav/product-details-nav-2.jpg') }}" alt="">
                            </button>
                            <button class="nav-link" id="nav-3-tab" data-bs-toggle="tab" data-bs-target="#nav-3" type="button" role="tab" aria-controls="nav-3" aria-selected="false">
                                <img src="{{ url('assets/frontend/img/product/details/nav/product-details-nav-3.jpg') }}" alt="">
                            </button>
                            <button class="nav-link" id="nav-4-tab" data-bs-toggle="tab" data-bs-target="#nav-4" type="button" role="tab" aria-controls="nav-4" aria-selected="false">
                                <img src="{{ url('assets/frontend/img/product/details/nav/product-details-nav-4.jpg') }}" alt="">
                            </button>
                        </div>
                    </nav>
                    <div class="tab-content m-img" id="productDetailsNavContent">
                        <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab" tabindex="0">
                            <div class="tp-product-details-nav-main-thumb">
                                <img src="{{ url('assets/frontend/img/product/details/main/product-details-main-1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab" tabindex="0">
                            <div class="tp-product-details-nav-main-thumb">
                                <img src="{{ url('assets/frontend/img/product/details/main/product-details-main-2.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-3-tab" tabindex="0">
                            <div class="tp-product-details-nav-main-thumb">
                                <img src="{{ url('assets/frontend/img/product/details/main/product-details-main-3.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-4-tab" tabindex="0">
                            <div class="tp-product-details-nav-main-thumb">
                                <img src="{{ url('assets/frontend/img/product/details/main/product-details-main-4.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tp-product-details-wrapper">
                    <div class="tp-product-details-category">
                        <span>Computers & Tablets</span>
                    </div>
                    <h3 class="tp-product-details-title">Samsung galaxy A8 tablet</h3>

                    <!-- inventory details -->
                    <div class="tp-product-details-inventory d-flex align-items-center mb-10">
                        <div class="tp-product-details-stock mb-10">
                            <span>In Stock</span>
                        </div>
                        <div class="tp-product-details-rating-wrapper d-flex align-items-center mb-10">
                            <div class="tp-product-details-rating">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                            <div class="tp-product-details-reviews">
                                <span>(36 Reviews)</span>
                            </div>
                        </div>
                    </div>
                    <p>A Screen Everyone Will Love: Whether your family is streaming or video chatting with friends
                        tablet A8... <span>See more</span></p>

                    <!-- price -->
                    <div class="tp-product-details-price-wrapper mb-20">
                        <span class="tp-product-details-price old-price">$320.00</span>
                        <span class="tp-product-details-price new-price">$236.00</span>
                    </div>

                    <!-- variations -->
                    <div class="tp-product-details-variation">
                        <!-- single item -->
                        <div class="tp-product-details-variation-item">
                            <h4 class="tp-product-details-variation-title">Color :</h4>
                            <div class="tp-product-details-variation-list">
                                <button type="button" class="color tp-color-variation-btn">
                                    <span data-bg-color="#F8B655"></span>
                                    <span class="tp-color-variation-tootltip">Yellow</span>
                                </button>
                                <button type="button" class="color tp-color-variation-btn active">
                                    <span data-bg-color="#CBCBCB"></span>
                                    <span class="tp-color-variation-tootltip">Gray</span>
                                </button>
                                <button type="button" class="color tp-color-variation-btn">
                                    <span data-bg-color="#494E52"></span>
                                    <span class="tp-color-variation-tootltip">Black</span>
                                </button>
                                <button type="button" class="color tp-color-variation-btn">
                                    <span data-bg-color="#B4505A"></span>
                                    <span class="tp-color-variation-tootltip">Brown</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- actions -->
                    <div class="tp-product-details-action-wrapper">
                        <h3 class="tp-product-details-action-title">Quantity</h3>
                        <div class="tp-product-details-action-item-wrapper d-flex align-items-center">
                            <div class="tp-product-details-quantity">
                                <div class="tp-product-quantity mb-15 mr-15">
                                    <span class="tp-cart-minus">
                                        <svg width="11" height="2" viewBox="0 0 11 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <input class="tp-cart-input" type="text" value="1">
                                    <span class="tp-cart-plus">
                                        <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 6H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M5.5 10.5V1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="tp-product-details-add-to-cart mb-15 w-100">
                                <button class="tp-product-details-add-to-cart-btn w-100">Add To Cart</button>
                            </div>
                        </div>
                        <button class="tp-product-details-buy-now-btn w-100">Buy Now</button>
                    </div>
                    <div class="tp-product-details-action-sm">
                        <button type="button" class="tp-product-details-action-sm-btn">
                            <i class="fa-regular fa-arrows-repeat"></i>
                            Compare
                        </button>
                        <button type="button" class="tp-product-details-action-sm-btn">
                            <i class="fa-regular fa-heart"></i>
                            Add Wishlist
                        </button>
                        <button type="button" class="tp-product-details-action-sm-btn">
                            <i class="fa-light fa-circle-question"></i>
                            Ask a question
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


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

@endsection