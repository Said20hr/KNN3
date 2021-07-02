@extends('layouts.argon')

@section('content')

    <div class="main-content " id="panel">
        <!-- Topnav -->

        <!-- Header -->
        <div class="header bg-primary ">
            <div class="container-fluid">
                <div class="header-body py-6" dir="rtl">
                    <div class="d-flex justify-content-between align-items-center py-8">
                        <div class="">

                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">

                                    <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> الاستثمارات   </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="">
                            <a href="#" class="btn btn-lg btn-neutral">أضف مستثمر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--8" dir="rtl">


            <div class="card text-right">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">جدول الاستثمارات</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="name"> اسم المستثمر</th>
                            <th scope="col" class="sort" data-sort="budget">الباقة الاستثمارية</th>
                            <th scope="col" class="sort" data-sort="status">المبلغ</th>
                            <th scope="col" class="sort" data-sort="status">الحالة</th>
                            <th scope="col" class="sort" data-sort="completion">إجمالي الربح</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <a href="#" class="avatar rounded-circle ml-3">
                                        <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                                    </a>
                                    <div class="media-body">
                                        <span class="name mb-0 text-sm">Argon Design System</span>
                                    </div>
                                </div>
                            </th>
                            <td class="budget">
                               الدهبية
                            </td>
                            <td>
                                $2500 USD

                            </td>
                            <td>
                                 <span class="badge badge-dot ml-4">
                                    <i class="bg-warning"></i>
                                    <span class="status">معلق</span>
                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="completion ml-2">60%</span>
                                    <div>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow text-right">
                                        <a class="btn btn-sm btn-primary" href="#">شاهد</a>
                                        <a class="btn btn-sm btn-success" href="#">عدل</a>
                                        <a class="btn btn-sm btn-danger" href="#">حذف</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <a href="#" class="avatar rounded-circle ml-3">
                                        <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                                    </a>
                                    <div class="media-body">
                                        <span class="name mb-0 text-sm">Argon Design System</span>
                                    </div>
                                </div>
                            </th>
                            <td class="budget">
                                الدهبية
                            </td>
                            <td>
                                $2500 USD

                            </td>
                            <td>
                                 <span class="badge badge-dot ml-4">
                                    <i class="bg-warning"></i>
                                    <span class="status">معلق</span>
                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="completion ml-2">60%</span>
                                    <div>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow text-right">
                                        <a class="btn btn-sm btn-primary" href="#">شاهد</a>
                                        <a class="btn btn-sm btn-success" href="#">عدل</a>
                                        <a class="btn btn-sm btn-danger" href="#">حذف</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <a href="#" class="avatar rounded-circle ml-3">
                                        <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                                    </a>
                                    <div class="media-body">
                                        <span class="name mb-0 text-sm">Argon Design System</span>
                                    </div>
                                </div>
                            </th>
                            <td class="budget">
                                الدهبية
                            </td>
                            <td>
                                $2500 USD

                            </td>
                            <td>
                                 <span class="badge badge-dot ml-4">
                                    <i class="bg-warning"></i>
                                    <span class="status">معلق</span>
                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="completion ml-2">60%</span>
                                    <div>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow text-right">
                                        <a class="btn btn-sm btn-primary" href="#">شاهد</a>
                                        <a class="btn btn-sm btn-success" href="#">عدل</a>
                                        <a class="btn btn-sm btn-danger" href="#">حذف</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <a href="#" class="avatar rounded-circle ml-3">
                                        <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                                    </a>
                                    <div class="media-body">
                                        <span class="name mb-0 text-sm">Argon Design System</span>
                                    </div>
                                </div>
                            </th>
                            <td class="budget">
                                الدهبية
                            </td>
                            <td>
                                $2500 USD

                            </td>
                            <td>
                                 <span class="badge badge-dot ml-4">
                                    <i class="bg-warning"></i>
                                    <span class="status">معلق</span>
                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="completion ml-2">60%</span>
                                    <div>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow text-right">
                                        <a class="btn btn-sm btn-primary" href="#">شاهد</a>
                                        <a class="btn btn-sm btn-success" href="#">عدل</a>
                                        <a class="btn btn-sm btn-danger" href="#">حذف</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <a href="#" class="avatar rounded-circle ml-3">
                                        <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                                    </a>
                                    <div class="media-body">
                                        <span class="name mb-0 text-sm">Argon Design System</span>
                                    </div>
                                </div>
                            </th>
                            <td class="budget">
                                الدهبية
                            </td>
                            <td>
                                $2500 USD

                            </td>
                            <td>
                                 <span class="badge badge-dot ml-4">
                                    <i class="bg-warning"></i>
                                    <span class="status">معلق</span>
                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="completion ml-2">60%</span>
                                    <div>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow text-right">
                                        <a class="btn btn-sm btn-primary" href="#">شاهد</a>
                                        <a class="btn btn-sm btn-success" href="#">عدل</a>
                                        <a class="btn btn-sm btn-danger" href="#">حذف</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->
                <div class="card-footer py-4 text-center">
                    <nav aria-label="...">
                        <ul class="pagination justify-content-center mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">
                                    <i class="fas fa-angle-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="fas fa-angle-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>

        <!-- Footer -->
        <div class="container-fluid">
            @include('layouts.footers.auth')
        </div>
    </div>
    </div>
@endsection
