@extends('layouts.argon')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--5">
        <div class="row">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card bg-gradient-default shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center justify-content-end">
                            <div class="col text-right">
                                <h6 class="text-uppercase text-light ls-1 mb-1">ملخص</h6>
                                <h2 class="text-white mb-0">قيمة الاستثمارات</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Chart -->
                        <div class="chart">
                            <!-- Chart wrapper -->
                            <canvas id="chart-sales" class="chart-canvas"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5" dir="rtl">
            <div class="col-xl-12 mb-5" >
                <div class="card shadow" >
                    <div class="card-header border-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="">
                                <h3 class="mb-0">ترتيب المستثمرين</h3>
                            </div>
                            <div class="">
                                <a href="{{route('investissements.index')}}" class="btn btn-sm btn-primary">شاهد الجميع</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush text-right">
                            <thead class="bg-gray">
                                <tr>
                                    <th scope="col" colspan="font-weight-700 h3">اسم المستثمر</th>
                                    <th scope="col" colspan="font-weight-700 h3">قيمة الاستثمار</th>
                                    <th scope="col" colspan="font-weight-700 h3">مرات الاستثمار</th>
                                    <th scope="col" colspan="font-weight-700 h3">اجمالى الربح</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($users_inv as $user)
                                <tr>
                                    <th scope="row">
                                   {{$user->name}}
                                    </th>
                                    <td>
                                        <i class="fas fa-money-bill text-success mr-3"></i> {{$user->invest->sum('price')}}   دوﻻر
                                    </td>
                                    <td>
                                        <i class="fas fa-business-time text-yellow-500 mr-3"></i> {{$user->invest->count()}} اسثمار
                                    </td>
                                    <td>
                                        <i class="fas fa-chart-line text-info mr-3"></i> {{$user->invest->sum('profit')}}  دوﻻر
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 mb-5" >
                <div class="card shadow" >
                    <div class="card-header border-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="">
                                <h3 class="mb-0">متتبعينا عبر التواصل الاجتماعي</h3>
                            </div>
                            <div class=" text-right">
                                <a href="#!" class="btn btn-sm btn-primary">تصفح</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush text-right">
                            <thead class="bg-gray">
                                <tr>
                                    <th scope="col">الموقع</th>
                                    <th scope="col">المتابعين</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        Facebook
                                    </th>
                                    <td>
                                        1,480
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="mr-2">60%</span>
                                            <div>
                                                <div class="progress">
                                                <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Facebook
                                    </th>
                                    <td>
                                        5,480
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="mr-2">70%</span>
                                            <div>
                                                <div class="progress">
                                                <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Google
                                    </th>
                                    <td>
                                        4,807
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="mr-2">80%</span>
                                            <div>
                                                <div class="progress">
                                                <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Instagram
                                    </th>
                                    <td>
                                        3,678
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="mr-2">75%</span>
                                            <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        twitter
                                    </th>
                                    <td>
                                        2,645
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="mr-2">30%</span>
                                            <div>
                                                <div class="progress">
                                                <div class="progress-bar bg-gradient-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')

    <script type="text/javascript">
        $('#something').click(function() {
            location.reload();
        });

    </script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
    <script type="text/javascript">
        function init($chart) {

            var salesChart = new Chart($chart, {
                type: 'line',
                options: {
                    scales: {
                        yAxes: [{
                            gridLines: {
                                color: Charts.colors.gray[900],
                                zeroLineColor: Charts.colors.gray[900]
                            },
                            ticks: {
                                callback: function(value) {
                                    if (!(value % 10)) {
                                        return '$' + value + 'k';
                                    }
                                }
                            }
                        }]
                    },
                    tooltips: {
                        callbacks: {
                            label: function(item, data) {
                                var label = data.datasets[item.datasetIndex].label || '';
                                var yLabel = item.yLabel;
                                var content = '';

                                if (data.datasets.length > 1) {
                                    content += '<span class="popover-body-label mr-auto">' + label + '</span>';
                                }

                                content += '<span class="popover-body-value">$' + yLabel + 'k</span>';
                                return content;
                            }
                        }
                    }
                },
                data: {
                    labels: ['Jan','Fev','Mars','Avr','May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                        label: 'Performance',
                        data: [0,0,0,0,0,0,{{$july}},0,0,0,0,0,0]
                    }]
                }
            });

            // Save to jQuery object

            $chart.data('chart', salesChart);

        };
    </script>
@endpush
