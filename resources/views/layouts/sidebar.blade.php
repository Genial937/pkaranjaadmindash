<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="" class="logo logo-dark">
            {{-- <span class="logo-sm">
                <img src="{{ asset('images/logo.png') }}" alt="" width="60%" height="80px">
            </span> --}}
            <span class="logo-lg">
                <img src="{{ asset('images/logo.png') }}" alt="" width="60%" height="80px">
            </span>
        </a>

        <a href="{{ route('index') }}" class="logo logo-light">
            {{-- <span class="logo-sm">
                <img src="{{ asset('images/logo.png') }}" alt="" width="60%" height="80px">
            </span> --}}
            <span class="logo-lg">
                <img src="{{ asset('images/logo.png') }}" alt="" width="60%" height="80px">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li>
                    <a href="{{ route('index') }}">
                        <i class="uil-home-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                @role('customerService')
                <li>
                    <a href="{{ route('offers.index') }}">
                        <i class="uil-invoice"></i>
                        <span>Offers</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('customers.index') }}">
                        <i class="uil-chart"></i>
                        <span>Customers</span>
                    </a>
                </li>
               

                <li>
                    <a href="{{ route('updates.index') }}">
                        <i class="uil-store"></i>
                        <span>Updates</span>
                    </a>
                </li>
                @endrole
                @role('superAdmin|customerService')
                <li>
                    <a href="{{ route('orders.index') }}">
                        <i class="uil-invoice"></i>
                        <span>Orders</span>
                    </a>
                </li>
                @endrole
                @role('superAdmin')
                <li>
                    <a href="{{ route('users.index') }}">
                        <i class="uil-shopping-cart-alt"></i>
                        <span>Users</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-store"></i>
                        <span>Roles</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('roles.index') }}">Roles</a></li>
                        <li><a href="{{ route('permissions.index') }}">Permissions</a></li>
                    </ul>
                </li>
                @endrole
                {{-- <li>
                    <a href="{{ route('organizations.index') }}">
                        <i class="uil-invoice"></i>
                        <span>Organizations</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-store"></i>
                        <span>Sales Area</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('sales-area.index') }}">Sales Area</a></li>
                        <li><a href="{{ route('collection-points.index') }}">Collection Points</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-store"></i>
                        <span>Categories</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('categories.index') }}">Categories</a></li>
                        <li><a href="{{ route('sub_categories.index') }}">Sub Categories</a></li>
                    </ul>
                </li> --}}
                @role('marketingManager')
                <li>
                <a href="{{ route('survey.index') }}">
                    <i class="uil-credit-card"></i>
                    <span>Surveys</span>
                </a>
            </li>
            @endrole

                <hr>
                <li class="menu-title">About Me</li>
                <li>
                    <a href="{{ route('profile.index') }}">
                        <i class="uil-user-circle"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pin.index') }}">
                        <i class="uil-lock-alt"></i>
                        <span>Change Pin</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout.index') }}">
                        <i class="uil-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
