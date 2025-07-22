<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('superadmin.css')
</head>

<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>

    <div class="page-container">
        @include('superadmin.sidebar')

        <div class="main-content">
            @include('superadmin.header')

            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Customers</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><span>Customer List</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="{{ asset('admin/assets/images/author/avatar.png') }}" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                                {{ Auth::user()->username }} <i class="fa fa-angle-down"></i>
                            </h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Message</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                                    @csrf
                                </form>
                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="main-content-inner">
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Customer List</h4>
                            <div class="data-tables datatable-primary">
                                <table id="dataTable2" class="text-center">
                                    <thead class="text-capitalize">
                                        <tr>
                                            <th>Username</th>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th>Age</th>
                                            <th>Birthdate</th>
                                            <th>Sex</th>
                                            <th>Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($customers as $customer)
                                        <tr>
                                            <td>{{ $customer->user->username }}</td>
                                            <td>{{ $customer->firstname }}</td>
                                            <td>{{ $customer->middlename ?? 'N/A' }}</td>
                                            <td>{{ $customer->lastname }}</td>
                                            <td>{{ $customer->age }}</td>
                                            <td>{{ $customer->birthdate }}</td>
                                            <td>{{ $customer->sex }}</td>
                                            <td>{{ $customer->address }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Main Content -->
        </div>

        <footer>
            @include('superadmin.footer')
        </footer>
    </div>

    @include('superadmin.script')

    <script>
        $(document).ready(function () {
            $('#dataTable2').DataTable();
        });
    </script>
</body>

</html>
