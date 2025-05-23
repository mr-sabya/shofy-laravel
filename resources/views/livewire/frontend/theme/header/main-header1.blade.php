<div class="tp-header-main tp-header-sticky">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-2 col-lg-2 col-md-4 col-6">
                <livewire:frontend.theme.logo.light wire:key="top-header-1-logo" />
            </div>
            <div class="col-xl-6 col-lg-7 d-none d-lg-block">
                <div class="tp-header-search pl-70">
                    <form action="#">
                        <div class="tp-header-search-wrapper d-flex align-items-center">
                            <div class="tp-header-search-box">
                                <input type="text" placeholder="Search for Products...">
                            </div>
                            <div class="tp-header-search-category">
                                <select>
                                    <option>Select Category</option>
                                    <option>Mobile</option>
                                    <option>Digital Watch</option>
                                    <option>Computer</option>
                                    <option>Watch</option>
                                </select>
                            </div>
                            <div class="tp-header-search-btn">
                                <button type="submit">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M19 19L14.65 14.65" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-4 col-lg-3 col-md-8 col-6">
                <div class="tp-header-main-right d-flex align-items-center justify-content-end">
                    <div class="tp-header-login d-none d-lg-block">
                        @if(Auth::user())
                        <a href="profile.html" class="d-flex align-items-center">
                            <div class="tp-header-login-icon">
                                <span>
                                    <svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="8.57894" cy="5.77803" r="4.77803" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.00002 17.2014C0.998732 16.8655 1.07385 16.5337 1.2197 16.2311C1.67736 15.3158 2.96798 14.8307 4.03892 14.611C4.81128 14.4462 5.59431 14.336 6.38217 14.2815C7.84084 14.1533 9.30793 14.1533 10.7666 14.2815C11.5544 14.3367 12.3374 14.4468 13.1099 14.611C14.1808 14.8307 15.4714 15.27 15.9291 16.2311C16.2224 16.8479 16.2224 17.564 15.9291 18.1808C15.4714 19.1419 14.1808 19.5812 13.1099 19.7918C12.3384 19.9634 11.5551 20.0766 10.7666 20.1304C9.57937 20.2311 8.38659 20.2494 7.19681 20.1854C6.92221 20.1854 6.65677 20.1854 6.38217 20.1304C5.59663 20.0773 4.81632 19.9641 4.04807 19.7918C2.96798 19.5812 1.68652 19.1419 1.2197 18.1808C1.0746 17.8747 0.999552 17.5401 1.00002 17.2014Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                            <div class="tp-header-login-content d-none d-xl-block">
                                <span>Hello, Sign In</span>
                                <h5 class="tp-header-login-title">Your Account</h5>
                            </div>
                        </a>
                        @else
                        <a href="user.login" class="d-flex align-items-center">
                            <div class="tp-header-login-icon">
                                <span style="font-size: 20px;">
                                    <i class="far fa-user"></i>
                                </span>
                            </div>
                            <div class="tp-header-login-content d-none d-xl-block">
                                <span>Hello, Sign In</span>
                                <h5 class="tp-header-login-title">Your Account</h5>
                            </div>
                        </a>
                        @endif
                    </div>
                    <!-- action start -->
                    <div class="tp-header-action d-flex align-items-center ml-50">
                        <livewire:frontend.theme.menu.action wire:key="top-header-1-menu-action" />
                    </div>
                    <!-- action end -->
                </div>
            </div>
        </div>
    </div>
</div>