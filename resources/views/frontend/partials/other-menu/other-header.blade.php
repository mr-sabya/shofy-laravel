<header>
    <div class="tp-header-area tp-header-style-primary tp-header-height">
        <!-- header top start  -->
        @include('frontend.partials.header.top-header')

        
        <!-- header bottom start -->
        <div id="header-sticky" class="tp-header-bottom-2 tp-header-sticky">
            <div class="container">
                <div class="tp-mega-menu-wrapper p-relative">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-5 col-md-5 col-sm-4 col-6">
                            @include('frontend.partials.logo')
                        </div>
                        <div class="col-xl-5 d-none d-xl-block">
                            <div class="main-menu menu-style-2">
                                <nav class="tp-main-menu-content">
                                    @include('frontend.partials.menu')
                                </nav>
                            </div>
                            <div class="tp-category-menu-wrapper d-none">
                                <nav class="tp-category-menu-content">
                                    @include('frontend.partials.category')
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-7 col-md-7 col-sm-8 col-6">
                            <div class="tp-header-bottom-right d-flex align-items-center justify-content-end pl-30">
                                <div class="tp-header-search-2 d-none d-sm-block">
                                    <form action="#">
                                        <input type="text" placeholder="Search for Products...">
                                        <button type="submit">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M18.9999 19L14.6499 14.65" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                                <div class="tp-header-action d-flex align-items-center ml-30">
                                    @include('frontend.partials.action')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>