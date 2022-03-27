<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid pt-5 pb-3">
        <div class="header-body">
            <!-- Card stats -->
            <div class="row">
                <div class="col-xl-4 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0 ">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="text-left">
                                    <h5 class="text-lg text-uppercase mb-2 font-weight-700">Amount of investment</h5>
                                    <span class="h3 pr-1 font-weight-bold mb-0"> {{$invest_count}}    USD</span>
                                </div>
                                <div class="text-end">
                                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-md text-left font-weight-600">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{$progress}}%</span>
                                <span class="text-blue">Increase since last month</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="text-left">
                                    <h5 class="h2 card-title text-uppercase mb-2 font-weight-700"> Total investors </h5>
                                    <span class="h3 pr-1 font-weight-bold mb-0"> {{$user_count}}  investors </span>
                                </div>
                                <div class="text-end">
                                    <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-md text-left font-weight-600">
                                <span class="text-success mr-2"><i class="fas fa-arrow-up mx-1"></i>increase {{$user_this_month}} investor </span>
                                <span class="text-blue"> in this month </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0 ">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="text-left">
                                    <h5 class="h2 card-title text-uppercase mb-2 font-weight-700">Total Profit</h5>
                                    <span class="h3 pr-1 font-weight-bold mb-0"> {{$profit_count}}   USD</span>
                                </div>
                                <div class="text-end">
                                    <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                        <i class="fas fa-chart-pie"></i>
                                    </div>

                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-md text-left font-weight-600">
                                <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> {{$progress_win}}%</span>
                                <span class="text-blue">Increase since last month</span>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
