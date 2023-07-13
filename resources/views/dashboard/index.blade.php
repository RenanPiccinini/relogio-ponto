@extends('layouts.admin')

@section('content')

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">
            <div class="header-bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 mb-4 pt-5">
                            <div id="morris-bar-example" class="morris-charts morris-chart-height" data-colors='["--bs-primary", "--bs-info"]'></div>

                            <div class="mt-4 text-center">
                                <button type="button" class="btn btn-outline-primary ms-1 waves-effect waves-light">Year
                                    2017</button>
                                <button type="button" class="btn btn-outline-info ms-1 waves-effect waves-light">Year
                                    2018</button>
                                <button type="button" class="btn btn-outline-primary ms-1 waves-effect waves-light">Year
                                    2019</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-center">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-info mt-2">15,852</h3> Monthly Statistics
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-center">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-purple mt-2">9,514</h3> New Orders
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-center">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-primary mt-2">289</h3> New Users
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-center">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-danger mt-2">5,220</h3> Unique Visitors
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Monthly Earnings</h4>

                                <div class="row text-center mt-4">
                                    <div class="col-6">
                                        <h5 class="mb-2 font-size-18">56241</h5>
                                        <p class="text-muted text-truncate">Marketplace</p>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="mb-2 font-size-18">23651</h5>
                                        <p class="text-muted text-truncate">Total Income</p>
                                    </div>
                                </div>

                                <div id="morris-donut-example" class="morris-charts morris-chart-height" data-colors='["#ebeff2", "--bs-primary", "--bs-info"]'></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Email Sent</h4>

                                <div class="row text-center mt-4">
                                    <div class="col-4">
                                        <h5 class="mb-2 font-size-18">56241</h5>
                                        <p class="text-muted text-truncate">Marketplace</p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="mb-2 font-size-18">23651</h5>
                                        <p class="text-muted text-truncate">Total Income</p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="mb-2 font-size-18">23651</h5>
                                        <p class="text-muted text-truncate">Total Month</p>
                                    </div>
                                </div>

                                <div id="morris-area-example" class="morris-charts morris-chart-height" data-colors='["rgb(200,200,200)", "--bs-primary", "--bs-info"]'></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Latest Transactions</h4>

                                <div class="table-responsive">
                                    <table class="table mt-4 mb-0 table-centered table-nowrap">

                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets/admin/images/users/avatar-2.jpg" alt="user-image') }}"
                                                        class="avatar-sm rounded-circle me-2" /> Herbert C. Patton
                                                </td>
                                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                    Confirm</td>
                                                <td>
                                                    $14,584
                                                    <p class="m-0 text-muted">Amount</p>
                                                </td>
                                                <td>
                                                    5/12/2016
                                                    <p class="m-0 text-muted">Date</p>
                                                </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets/admin/images/users/avatar-3.jpg" alt="user-image') }}"
                                                        class="avatar-sm rounded-circle me-2" /> Mathias N. Klausen
                                                </td>
                                                <td><i class="mdi mdi-checkbox-blank-circle text-warning"></i>
                                                    Waiting payment</td>
                                                <td>
                                                    $8,541
                                                    <p class="m-0 text-muted">Amount</p>
                                                </td>
                                                <td>
                                                    10/11/2016
                                                    <p class="m-0 text-muted">Date</p>
                                                </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets/admin/images/users/avatar-4.jpg" alt="user-image') }}"
                                                        class="avatar-sm rounded-circle me-2" /> Nikolaj S.
                                                    Henriksen
                                                </td>
                                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                    Confirm</td>
                                                <td>
                                                    $954
                                                    <p class="m-0 text-muted">Amount</p>
                                                </td>
                                                <td>
                                                    8/11/2016
                                                    <p class="m-0 text-muted">Date</p>
                                                </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets/admin/images/users/avatar-5.jpg" alt="user-image') }}"
                                                        class="avatar-sm rounded-circle me-2" /> Lasse C. Overgaard
                                                </td>
                                                <td><i class="mdi mdi-checkbox-blank-circle text-danger"></i>
                                                    Payment expired</td>
                                                <td>
                                                    $44,584
                                                    <p class="m-0 text-muted">Amount</p>
                                                </td>
                                                <td>
                                                    7/11/2016
                                                    <p class="m-0 text-muted">Date</p>
                                                </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <img src="{{ asset('assets/admin/images/users/avatar-6.jpg" alt="user-image') }}"
                                                        class="avatar-sm rounded-circle me-2" /> Kasper S. Jessen
                                                </td>
                                                <td><i class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                    Confirm</td>
                                                <td>
                                                    $8,844
                                                    <p class="m-0 text-muted">Amount</p>
                                                </td>
                                                <td>
                                                    1/11/2016
                                                    <p class="m-0 text-muted">Date</p>
                                                </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Recent Activity Feed</h4>

                                <ol class="activity-feed mb-0">
                                    <li class="feed-item">
                                        <span class="date">Sep 25</span>
                                        <span class="activity-text">Responded to need “Volunteer Activities”</span>
                                    </li>

                                    <li class="feed-item">
                                        <span class="date">Sep 24</span>
                                        <span class="activity-text">Added an interest “Volunteer Activities”</span>
                                    </li>
                                    <li class="feed-item">
                                        <span class="date">Sep 23</span>
                                        <span class="activity-text">Joined the group “Boardsmanship Forum”</span>
                                    </li>
                                    <li class="feed-item">
                                        <span class="date">Sep 21</span>
                                        <span class="activity-text">Responded to need “In-Kind Opportunity”</span>
                                    </li>
                                    <li class="feed-item">
                                        <span class="date">Sep 18</span>
                                        <span class="activity-text">Created need “Volunteer Activities”</span>
                                    </li>
                                    <li class="feed-item">
                                        <span class="date">Sep 17</span>
                                        <span class="activity-text">Attending the event “Some New Event”. Responded
                                            to needed.</span>
                                    </li>
                                    <li class="feed-item pb-0">
                                        <span class="activity-text">
                                            <a href="" class="text-primary">More Activities</a>
                                        </span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end row -->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


    </div>
    <!-- end main content-->

<!-- END layout-wrapper -->

<!-- Right Sidebar -->

{{-- LAYOUTS CANTO DIREITO --}}
<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title px-3 py-4">
            <a href="javascript:void(0);" class="right-bar-toggle float-end">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
            <h5 class="m-0">Settings</h5>
        </div>

        <!-- Settings -->
        <hr class="mt-0" />
        <h6 class="text-center mb-0">Choose Demo</h6>

        <div class="p-4">
            <div class="mb-2">
                <img src="{{ asset('assets/admin/images/layouts/layout-1.jpg') }}" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                <label class="form-check-label" for="light-mode-switch">Light Mode</label>
            </div>

            <div class="mb-2">
                <img src="{{ asset('assets/admin/images/layouts/layout-2.jpg') }}" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch" data-bsStyle="{{ asset('assets/admin/css/bootstrap-dark.min.css') }}" data-appStyle="{{ asset('assets/admin/css/app-dark.min.css') }}" />
                <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
            </div>

            <div class="mb-2">
                <img src="{{ asset('assets/admin/images/layouts/layout-3.jpg') }}" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch">
                <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch" data-appStyle="{{ asset('assets/admin/css/app-rtl.min.css') }}" />
                <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
            </div>

            <h6 class="mt-4">Select Custom Colors</h6>
            <div class="d-flex">

            <ul class="list-unstyled mb-0">
                <li class="form-check">
                    <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-default" value="default" onchange="document.documentElement.setAttribute('data-theme-mode', 'default')" checked>
                    <label class="form-check-label" for="theme-default">Default</label>
                </li>
                <li class="form-check">
                    <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-orange" value="orange" onchange="document.documentElement.setAttribute('data-theme-mode', 'orange')">
                    <label class="form-check-label" for="theme-orange">Orange</label>
                </li>
                <li class="form-check">
                    <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-teal" value="teal" onchange="document.documentElement.setAttribute('data-theme-mode', 'teal')">
                    <label class="form-check-label" for="theme-teal">Teal</label>
                </li>
            </ul>

            <ul class="list-unstyled mb-0 ms-4">
                <li class="form-check">
                    <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-purple" value="purple" onchange="document.documentElement.setAttribute('data-theme-mode', 'purple')">
                    <label class="form-check-label" for="theme-purple">Purple</label>
                </li>
                <li class="form-check">
                    <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-green" value="green" onchange="document.documentElement.setAttribute('data-theme-mode', 'green')">
                    <label class="form-check-label" for="theme-green">Green</label>
                </li>
                <li class="form-check">
                    <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-red" value="red" onchange="document.documentElement.setAttribute('data-theme-mode', 'red')">
                    <label class="form-check-label" for="theme-red">Red</label>
                </li>
            </ul>

            </div>
            <!-- <div class="form-check form-check-inline">
                <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-default" value="default" onchange="document.documentElement.setAttribute('data-theme-mode', 'default')" checked>
                <label class="form-check-label" for="theme-default">Default</label>
            </div> -->

            <!-- <div class="form-check form-check-inline">
                <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-teal" value="teal" onchange="document.documentElement.setAttribute('data-theme-mode', 'teal')">
                <label class="form-check-label" for="theme-teal">Teal</label>
            </div> -->

            <!-- <div class="form-check form-check-inline">
                <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-orange" value="orange" onchange="document.documentElement.setAttribute('data-theme-mode', 'orange')">
                <label class="form-check-label" for="theme-orange">Orange</label>
            </div> -->

            <!-- <div class="form-check form-check-inline">
                <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-purple" value="purple" onchange="document.documentElement.setAttribute('data-theme-mode', 'purple')">
                <label class="form-check-label" for="theme-purple">Purple</label>
            </div> -->

            <!-- <div class="form-check form-check-inline">
                <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-green" value="green" onchange="document.documentElement.setAttribute('data-theme-mode', 'green')">
                <label class="form-check-label" for="theme-green">Green</label>
            </div> -->

            <!-- <div class="form-check form-check-inline">
                <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-red" value="red" onchange="document.documentElement.setAttribute('data-theme-mode', 'red')">
                <label class="form-check-label" for="theme-red">Red</label>
            </div> -->
        </div>

    </div>
    <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

@endsection

