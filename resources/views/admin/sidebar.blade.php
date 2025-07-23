<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/img/logreglogowhite.png') }}" alt="logo" />
            </a>
        </div>
    </div>

    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                        <a href="{{ route('home') }}" aria-expanded="true">
                            <i class="ti-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    @auth
                        @if(Auth::user()->usertype === 'admin')
                            <li class="{{ request()->routeIs('admin.*') ? 'active' : '' }}">
                                <a href="javascript:void(0)" aria-expanded="false">
                                    <i class="ti-user"></i>
                                    <span>Customers</span>
                                </a>
                                <ul class="collapse">
                                    <li>
                                        <a href="{{ route('admin.create') }}">
                                            <i class="ti-user"></i>
                                            <span>Add Customer</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.view') }}">
                                            <i class="ti-user"></i>
                                            <span>View Customers</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    @endauth

                    <li>
                        <a href="javascript:void(0)" aria-expanded="false">
                            <i class="ti-shopping-cart"></i>
                            <span>Drugstores</span>
                        </a>
                        <ul class="collapse">
                            <li><a href="#">Create Drugstore</a></li>
                            <li><a href="#">View Drugstore</a></li>
                            <li><a href="#">View Inventory</a></li>
                            <li><a href="#">Form</a></li>
                            <li><a href="#">Grid System</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0)" aria-expanded="false">
                            <i class="ti-hummer"></i>
                            <span>Settings</span>
                        </a>
                        <ul class="collapse">
                            <li><a href="#">FontAwesome Icons</a></li>
                            <li><a href="#">Themify Icons</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>