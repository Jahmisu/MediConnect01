<!doctype html>
<html class="no-js" lang="en">

<head>
   @include('superadmin.css')
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
      @include('superadmin.sidebar')
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
        @include('superadmin.header')
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Customers</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span>Create Customers</span></li>
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

            <!-- Hidden logout form -->
            <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                @csrf
            </form>

            <!-- Visible Logout link that triggers the form -->
            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Log Out') }}
            </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
  <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Textual inputs</h4>
                                        <p class="text-muted font-14 mb-4">Here are examples of <code>.form-control</code> applied to each textual HTML5 <code>&lt;input&gt;</code> <code>type</code>.</p>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Text</label>
                                            <input class="form-control" type="text" value="Carlos Rath" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-search-input" class="col-form-label">Search</label>
                                            <input class="form-control" type="search" value="Where is google office" id="example-search-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email-input" class="col-form-label">Email</label>
                                            <input class="form-control" type="email" value="name@example.com" id="example-email-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-url-input" class="col-form-label">URL</label>
                                            <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-tel-input" class="col-form-label">Telephone</label>
                                            <input class="form-control" type="tel" value="+880-1233456789" id="example-tel-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword" class="">Password</label>
                                            <input type="password" class="form-control" id="inputPassword" value="inputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-number-input" class="col-form-label">Number</label>
                                            <input class="form-control" type="number" value="42" id="example-number-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-datetime-local-input" class="col-form-label">Date and time</label>
                                            <input class="form-control" type="datetime-local" value="2018-07-19T15:30:00" id="example-datetime-local-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-date-input" class="col-form-label">Date</label>
                                            <input class="form-control" type="date" value="2018-03-05" id="example-date-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-month-input" class="col-form-label">Month</label>
                                            <input class="form-control" type="month" value="2018-05" id="example-month-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-week-input" class="col-form-label">Week</label>
                                            <input class="form-control" type="week" value="2018-W32" id="example-week-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-time-input" class="col-form-label">Time</label>
                                            <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Select</label>
                                            <select class="form-control">
                                                <option>Select</option>
                                                <option>Large select</option>
                                                <option>Small select</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Custom Select</label>
                                            <select class="custom-select">
                                                <option selected="selected">Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input-lg" class="col-form-label">Large</label>
                                            <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" id="example-text-input-lg">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input-sm" class="col-form-label">Small</label>
                                            <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" id="example-text-input-sm">
                                        </div>
                                        <div class="form-group has-primary">
                                            <label for="inputHorizontalPrimary" class="col-form-label">Email</label>
                                            <input type="email" class="form-control form-control-primary" id="inputHorizontalPrimary" placeholder="name@example.com">
                                            <div class="form-control-feedback">Primary! You've done it.</div>
                                            <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                        </div>
                                        <div class="form-group has-warning">
                                            <label for="inputHorizontalWarning" class="col-form-label">Email</label>
                                            <input type="email" class="form-control form-control-warning" id="inputHorizontalWarning" placeholder="name@example.com">
                                            <div class="form-control-feedback">Shucks, check the formatting of that and try again.
                                            </div><small class="form-text text-muted">Example help text that remains unchanged.
                                            </small>
                                        </div>
                                        <div class="form-group mb-0 has-danger">
                                            <label for="inputHorizontalDnger" class="col-form-label">Email</label>
                                            <input type="email" class="form-control form-control-danger" id="inputHorizontalDnger" placeholder="name@example.com">
                                            <div class="form-control-feedback">Sorry, that username's taken. Try another?</div><small class="form-text text-muted">Example help text that remains unchanged.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
        </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
          @include('superadmin.footer')
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    <div class="offset-area">
        <div class="offset-close"><i class="ti-close"></i></div>
        <ul class="nav offset-menu-tab">
            <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
            <li><a data-toggle="tab" href="#settings">Settings</a></li>
        </ul>
        <div class="offset-content tab-content">
            <div id="activity" class="tab-pane fade in show active">
                <div class="recent-activity">
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Added</h4>
                            <span class="time"><i class="ti-time"></i>7 Minutes Ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You missed you Password!</h4>
                            <span class="time"><i class="ti-time"></i>09:20 Am</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Member waiting for you Attention</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You Added Kaji Patha few minutes ago</h4>
                            <span class="time"><i class="ti-time"></i>01 minutes ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Ratul Hamba sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Hello sir , where are you, i am egerly waiting for you.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                </div>
            </div>
            <div id="settings" class="tab-pane fade">
                <div class="offset-settings">
                    <h4>General Settings</h4>
                    <div class="settings-list">
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch1" />
                                    <label for="switch1">Toggle</label>
                                </div>
                            </div>
                            <p>Keep it 'On' When you want to get all the notification.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show recent activity</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch2" />
                                    <label for="switch2">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show your emails</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch3" />
                                    <label for="switch3">Toggle</label>
                                </div>
                            </div>
                            <p>Show email so that easily find you.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show Task statistics</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch4" />
                                    <label for="switch4">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch5" />
                                    <label for="switch5">Toggle</label>
                                </div>
                            </div>
                            <p>Use checkboxes when looking for yes or no answers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offset area end -->
    <!-- jquery latest version -->
   @include('superadmin.script')
</body>

</html>
