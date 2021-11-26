<div class="col-12 col-lg-3 col-xl-2 vh-100 sidebar">
    <div class="d-flex justify-content-between align-items-center py-2 mt-3 nav-brand">
        <div class="d-flex align-items-center">
            <img src="{{asset(Base::$logo)}}" alt="" class="w-75">
        </div>
        <button class="hide-sidebar-btn btn btn-light d-block d-lg-none">
            <i class="feather-x text-primary" style="font-size: 2em;"></i>
        </button>
    </div>
    <div class="nav-menu">
        <ul>
            <x-menu-spacer></x-menu-spacer>

            <x-menu-item name="Home" link="{{route('home')}}" class="fas fa-home"></x-menu-item>

            <x-menu-spacer></x-menu-spacer>

            <x-menu-title title="Item Management"></x-menu-title>

            <x-menu-item name="Create New Item" link="" class="feather-plus-circle"></x-menu-item>
            <x-menu-item name="Item List" link="" class="fas fa-list" counter=5></x-menu-item>

            <x-menu-spacer></x-menu-spacer>

            <x-menu-title title="Article Manager"></x-menu-title>

            <x-menu-item name="Manage Category" link="{{route('category.index')}}" class="feather-layers"></x-menu-item>
            <x-menu-item name="Create Article" link="{{route('article.create')}}" class="feather-plus-circle"></x-menu-item>
            <x-menu-item name="Article List" link="{{route('article.index')}}" class="feather-list"></x-menu-item>


            <x-menu-spacer></x-menu-spacer>

            <x-menu-title title="User Profile"></x-menu-title>
            <x-menu-item name="Your Profile" class="feather-user" link="{{ route('profile') }}"></x-menu-item>
            <x-menu-item name="Change Password" class="feather-refresh-cw" link="{{ route('profile.edit.password') }}"></x-menu-item>
            <x-menu-item name="Update Name & Email" class="feather-message-square" link="{{ route('profile.edit.name.email') }}"></x-menu-item>
            <x-menu-item name="Update photo" class="feather-image" link="{{ route('profile.edit.photo') }}"></x-menu-item>
            <x-menu-spacer></x-menu-spacer>


            <x-menu-spacer></x-menu-spacer>
            <li class="menu-item">
                <a class="btn btn-outline-primary btn-block" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    Logout
                </a>
            </li>
        </ul>
    </div>
</div>
