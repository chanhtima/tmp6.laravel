@php
    $mainMenu = [
        [
            'id'=> '0',
            'name'=> 'Home',
            'url'=> '',
            'subMenu'=> [],
        ],
        [
            'id'=> '2',
            'name'=> 'About',
            'url'=> 'about',
            'subMenu'=> [],
        ],
        [
            'id'=> '3',
            'name'=> 'Products',
            'url'=> 'products',
            'subMenu'=> [],
        ],

        [
            'id'=> '4',
            'name'=> 'News & Events',
            'url'=> 'new-events',
            'subMenu'=> [],
        ],
        [
            'id'=> '5',
            'name'=> 'Contact Us',
            'url'=> 'contacts',
            'subMenu'=> [],
        ],
    ]
@endphp

@include('frontend::layouts._assets.header.Topbar01Basic')
<header class="la-header-01-basic">
    <div class="xl:container">
        <div class="navbar">
            <div class="flex-none">
                <a href={{url('')}}>
                    <img src="{{ Module::asset('frontend:img/LOGO.png') }}" class="header-logo">
                </a>
            </div>
            <div class="space-x-2 sm:space-x-4 search-wrapper unactive flex-1 flex flex-row justify-end">
                <div class="hidden xl:block">
                    <x-frontend::menu.MenuHorizontal :menuData="$mainMenu"></x-frontend>
                </div>
                <x-frontend::language.LanguageToggleSwitch></x-frontend>
                <x-frontend::menu.MenuMobileNavigation :menuData="$mainMenu"></x-frontend>
            </div>
        </div>
    </div>
</header>