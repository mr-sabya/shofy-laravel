<div id="header-sticky-2" class="tp-header-sticky-area">
    <div class="container">
        <div class="tp-mega-menu-wrapper p-relative">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <livewire:frontend.theme.logo.light :wire:key="'sticky-logo-' . uniqid()" />
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 d-none d-md-block">
                    <div class="tp-header-sticky-menu main-menu menu-style-1">
                        <nav id="mobile-menu">
                            <livewire:frontend.theme.menu.menu-item :wire:key="'sticky-menu-' . uniqid()" />
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="tp-header-action d-flex align-items-center justify-content-end ml-50">
                        <livewire:frontend.theme.menu.action :wire:key="'sticky-action-' . uniqid()" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>