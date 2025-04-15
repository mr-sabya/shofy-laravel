@extends('frontend.layouts.base')

@section('title', 'Shop')

@section('links')
<span>@yield('title')</span>
@endsection

@section('content')
<!-- banner area start -->
<livewire:frontend.components.ad.banner1 square="true" />
<!-- banner area end -->

<!-- category area start -->
<section class="tp-category-area pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="tp-category-main-box mb-25 p-relative fix" data-bg-color="#F3F5F7">
                    <div class="tp-category-main-thumb include-bg transition-3" data-background="{{ url('assets/frontend/img/category/main/category-main-1.jpg') }}"></div>
                    <div class="tp-category-main-content">
                        <h3 class="tp-category-main-title">
                            <a href="shop.html">Headphones</a>
                        </h3>
                        <span class="tp-category-main-item">23 Products</span>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="tp-category-main-result text-center mb-35 mt-35">
                    <p>Showing 12 of 46 products</p>
                    <div class="tp-category-main-result-bar">
                        <span data-width="40%"></span>
                    </div>
                </div>
                <div class="tp-category-main-more text-center">
                    <a href="shop.html" class="tp-load-more-btn">
                        Load More
                        <i class="fas fa-redo"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- category area end -->


<!-- subscribe area start -->
<llivewire:frontend.components.subscribe />
<!-- subscribe area end -->
@endsection