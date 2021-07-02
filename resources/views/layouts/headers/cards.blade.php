<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8" dir="rtl">
    <div class="container-fluid pt-5 pb-3">
        <div class="header-body">
            <!-- Card stats -->
            <div class="row">
                <div class="col-xl-4 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0 ">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="text-right">
                                    <h5 class="h2 card-title text-uppercase mb-2 font-weight-700">المبلغ الاجمالي للاستثمارات</h5>
                                    <span class="h3 pr-1 font-weight-bold mb-0"> {{$invest_count}}    دوﻻر</span>
                                </div>
                                <div class="text-end">
                                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm text-center font-weight-600">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{$progress}}%</span>
                                <span class="text-blue">زيادة منذ الشهر الفارط</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0 ">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="text-right">
                                    <h5 class="h2 card-title text-uppercase mb-2 font-weight-700"> عدد المستثمرين </h5>
                                    <span class="h3 pr-1 font-weight-bold mb-0"> {{$user_count}}  مستثمرين </span>
                                </div>
                                <div class="text-end">
                                    <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-md text-center font-weight-600">
                                <span class="text-success mr-2"><i class="fas fa-arrow-up mx-1"></i>زيادة {{$user_this_month}}مستثمر </span>
                                <span class="text-blue"> في هذا الشهر </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0 ">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="text-right">
                                    <h5 class="h2 card-title text-uppercase mb-2 font-weight-700">الارباح</h5>
                                    <span class="h3 pr-1 font-weight-bold mb-0"> {{$profit_count}}   دوﻻر</span>
                                </div>
                                <div class="text-end">
                                    <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                        <i class="fas fa-chart-pie"></i>
                                    </div>

                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm text-center font-weight-600">
                                <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> {{$progress_win}}%</span>
                                <span class="text-blue">زيادة منذ الشهر الفارط</span>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
