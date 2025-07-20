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
                    <li class="active">
                        <a href="{{ route('home') }}" aria-expanded="true">
                            <i class="ti-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0)" aria-expanded="false">
                            <i class="ti-user"></i>
                            <span>Customers</span>
                        </a>
                        <ul class="collapse">
                            <li><a href="{{ route('superadmin.create_customer') }}">Add Customers</a></li>
                            <li><a href="#">View Customers</a></li> <!-- Replace with actual route -->
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0)" aria-expanded="false">
                            <i class="ti-shopping-cart"></i>
                            <span>Drugstores</span>
                        </a>
                        <ul class="collapse">
                            <li><a href="#">Create Drugstore</a></li> <!-- Replace with actual route -->
                            <li><a href="#">View Drugstore</a></li>   <!-- Replace with actual route -->
                            <li><a href="#">View Inventory</a></li>   <!-- Replace with actual route -->
                            <li><a href="#">Form</a></li>             <!-- Replace with actual route -->
                            <li><a href="#">Grid System</a></li>      <!-- Replace with actual route -->
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0)" aria-expanded="false">
                            <i class="ti-hummer"></i>
                            <span>Settings</span>
                        </a>
                        <ul class="collapse">
                            <li><a href="#">FontAwesome Icons</a></li> <!-- Replace with actual route -->
                            <li><a href="#">Themify Icons</a></li>      <!-- Replace with actual route -->
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
