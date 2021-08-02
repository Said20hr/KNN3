@extends('layouts.layout')

@section('content')
    <main class="main" id="top">

        <section class="py-lg-4 py-sm-5 py-md-5 py-xl-4" id="home">

            <!--/.bg-holder-->

            <div class="bg-holder d-sm-none"
                 style="background-image:url({{asset('assets/img/illustrations/hero-bg.png')}});background-position:right top;background-size:contain;">
            </div>
            <!--/.bg-holder-->

            <div class="container text-right ">
                <div class="row align-items-center min-vh-75 min-vh-md-100 justify-content-center text-center ">
                    <div class="col-md-7 col-lg-9 text-sm-start text-center justify-content-center">
                        <h1 class="mt-5 mb-sm-4 display-2 fw-bold fs-lg-5 fs-xl-5 fs-md-4 fs-sm-3 ">  من هي شركة كنَّع؟  وما الهدف من وجودها؟  </h1>
                        <p class="mb-4 fs-lg-2 fs-xl-2 fs-md-2 fs-sm-2">
                            هي شركة تكنولوجية تقدم ثلاث برامج الكترونية بصنع فلسطيني عربي الهدف منها أن نثبت للعالم أن الشعب الفلسطيني قادر على
                            التغيير وقادر على الإبداع وإنتاج أفكار جديدة التي من شأنها تغيير أشخاص أو شعوب،
                            وللابتعاد عن التبعية قدر المستطاع والنهوض من القاع الى القمة.
                        </p>
                        <div class="pt-3 d-flex justify-content-center">
                            <div class="col-md-6 col-sm-9">
                            <form>
                                <div class="input-group d-flex flex-star-center">
                                    <input class="form-control rounded-pill shadow-lg border-0 text-right p-r-26"
                                           id="formGroupExampleInput" type="text"
                                           placeholder="ابحث في الموقع" style="height: 70px"/>
                                    <img class="input-box-icon mr-5"
                                         src="assets/img/illustrations/search.png" width="70" alt="" />
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5">
            <div class="bg-holder" style="background-image:url({{asset('assets/img/illustrations/bg.png')}});background-position:left top;background-size:initial;margin-top:-180px;">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row flex-center">
                    <div class="col-md-4 order-md-0 text-center text-md-start">
                        <img class="img-fluid mb-4" src="assets/img/illustrations/passion.png" width="450" alt="" /></div>
                    <div class="col-md-8 text-center text-md-center">
                        <h6 class="fw-bold fs-2 fs-lg-5 display-2 lh-sm"> لسنا مجرّد حكاية! نحوَ تيّار التكنولوجيا... </h6>
                        <p class="my-4 text-right fs-20">
                            منذ أن وطئنا الأرض ونحن في مَرحلة إثباتِ الوجود،
                            في أن نكون أو لا نكون، سلسلة غير منتهية من التحدّيات التي حاولت نَهشَ الفكرة، ولكنَّنا فكرة،
                            والفكرة لا تموت، ومن هذا المنطلق اتّحدنا وتكاتفتنا لإنشاء مشاريع ريادية تكنولوجية حقيقية تخدمُ
                            الإنسان بشكلٍ نقيّ دون مصالح وسياسات مقيتة، تلك السياسات التي قد سئِمَ منها شعبنا وواقعنا،
                            إنَّ مشاريعنا قد وُجِدت حلولاً وإثباتاً وجذوراً، على قُدرة السَّاعد الأسمر الفلسطيني،
                            ودليلاً شامخاً راسخاً على عدم استسلامنا للقضايا المعاصرة التي باتت مشاكلَ صعبَة المواجهة.
                            نحنُ مِنَ الشَّعب وإلى الشَّعب، أشخاصاً طبيعيين ولكن بأفكار غير طبيعية، نحوَ التطوّر التكنولوجي، نَمُدّ يدنا إليك.. لنقول لك، لسنا مجرّد حكاية، رافقنا نحو تيّار التكنولوجيا، هل ستُلَبِّي النداء؟
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0">

            <div class="container">


                <!-- ============================================-->
                <!-- <section> begin ============================-->
                <section class="py-8">

                    <div class="container" dir="rtl">
                        <div class="row flex-center">
                            <div class="col-md-5 text-center text-md-end"><img class="img-fluid mb-4" src="assets/img/illustrations/jobs.png"  alt="" /></div>
                            <div class="col-md-7 text-center text-md-center">
                                <h6 class="fw-bold fs-2 fs-lg-4 display-2 lh-sm">لسنا نُجوماً، نَحنُ شُهبٌ حارقَة ، اقترِب لِتَرى سبب إشعاعِنا!</h6>
                                <p class="my-4 text-center fs-19 lh-16">
                                    في هذا النظام الضخم المتكامل، يعمل جميع الأفراد تحت مبادئ واحدة، بإيمان وعقيدة راسخة التي تنُصّ على النجاح ولا شيء سوى النجاح، وبالطبع ليس أي نجاح، إنما هو نجاحُ التَّكاتُف والتعاون داخل هذه المنظومة، إن اقتربتَ منّا كفايَةً ستصبحُ فرداً منَّا دون أن تَعي، ستَرى بعَينَيك أفكاراً غير مَسبوقة التنفيذ، سترى التَّكامل بين جميع الأفراد، سترى التميّز مرسوماً بخططٍ تفصيليَّة دقيقة، أرقاماً واقعيّة تنبِّئُ بالتفوّق، الأسس المتينة والأرضية الصَّلبة التي نقف عليها، بعينيكَ أنت، ستحدِّدُ الأفق الذي نطمح لَه، وقرارُك لدعمنا سيكونُ جليّاً، ليكون لَك بصمةً معنا في خلقِ مجتمعٍ لديه ما يكفي من فُرَص العمل والحُرّيات المالية الغير خاضعة لأي سياسات أو مؤسسات.
                                    إنَّنا نؤمن بالحَتمية، وهي حتميّة التغيير، لماذا نحن؟ لأنَّنا سنكون مُحَرِّكي عَجلة التغيير
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end of .container-->

                </section>
                <!-- <section> close ============================-->
                <!-- ============================================-->


            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <section class="py-5">
            <div class="bg-holder d-none d-sm-block" style="background-image:url(assets/img/illustrations/category-bg.png);background-position:right top;background-size:200px 320px;">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-6 text-center mb-3">
                        <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">ما الخدمات التي تقدمها شركة كنَّع؟</h5>
                        <p class="mb-5">تتمثل خصصنا المستقبلية في عدة مجالات</p>
                    </div>
                </div>
                <div class="row flex-center h-100">
                    <div class="col-11 col-xl-11" dir="rtl">
                        <div class="row">
                            <div class="col-sm-6 col-lg-4 pb-lg-6 px-lg-1 pb-4 pointer">
                                <div class="card py-5 shadow-sm h-100 hover-top">
                                    <div class="text-center"> <img src="assets/img/illustrations/finance.png" height="120" alt="" />
                                        <div class="card-body px-2">
                                            <h6 class="fw-bold fs-1 heading-color">التجارة</h6>
                                            <p class="mb-0 card-text py-3">موقع تجارة الكتروني فلسطيني يوفر امكانية التسويق ويسهم في تسهيل عملية التجارة في فلسطين بين التاجر وبين الزبون</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 pb-lg-6 px-lg-1 pb-4 pointer">
                                <div class="card py-5 shadow-sm h-100 hover-top">
                                    <div class="text-center"> <img src="assets/img/illustrations/education.png" height="120" alt="" />
                                        <div class="card-body px-2">
                                            <h6 class="fw-bold fs-1 heading-color">التعليم</h6>
                                            <p class="mb-0 card-text py-3">تهدف هذه الاكاديمية
                                                لتعليم بعض العلوم المختصة في مجال الكمبيوتر
                                                والبرمجيات من خلال دورات تقدمها عبر المنصة.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 pb-lg-6 px-lg-1 pb-4 pointer">
                                <div class="card py-5 shadow-sm h-100 hover-top">
                                    <div class="text-center"> <img src="assets/img/illustrations/consultancy.png" height="120" alt="" />
                                        <div class="card-body px-2">
                                            <h6 class="fw-bold fs-1 heading-color">الاعلام</h6>
                                            <p class="mb-0 card-text py-3">100تطبيق تواصل اجتماعي Social App يشمل مواقع التواصل الاجتماعي الحالية لكن بإضافة ميزات جديدة واضافات سهلة بحيث يكون أكثر امناً بالنسبة للمستخدمين</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-8">

            <div class="container">
                <div class="row flex-center">
                    <div class="col-md-5 order-md-1 text-center text-md-end"><img class="img-fluid mb-4" src="assets/img/illustrations/feature.png" width="450" alt="" /></div>
                    <div class="col-md-7 text-center text-md-start">
                        <h6 class="fw-bold fs-2 fs-lg-6 display-3 lh-sm">شركات فلسطينية عربية وعالمية قد آمنت بنجاحنا</h6>
                        <p class="my-4 fs-22">
                            يتضمن النشر الآن تكاملًا خارج الصندوق مع منصات المحاسبة وتخطيط موارد المؤسسات ،
                            بالإضافة إلى واجهة برمجة تطبيقات مفتوحة تتيح لك الاندماج بسلاسة مع أنظمة عملك.
                        </p>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <section class="py-0"><img class="w-100" src="assets/img/illustrations/come-on-join.png" alt="" />
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 text-center">
                        <h6 class="fw-bold fs-3 fs-lg-7 lh-sm">تعال ، انضم إلينا!</h6>
                        <p class="fs-22 mt-4">أهلاً ومرحبا بكم في شركتنا التكنولوجية. </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-8">
            <div class="container " dir="rtl">
                <div class="d-flex flex-center justify-content-between ">
                    <div class="col-lg-5 text-center">
                        <h6 class="fs-3 fs-lg-4 lh-sm fw-bolder">اراء المستثمرين !</h6>
                    </div>
                    <div class="col-lg-2 position-relative ">
                        <a class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>
                <div class="row flex-center">
                    <div class="col-xl-12 px-0">
                        <div class="carousel slide pt-6" id="carouselExampleDark" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <div class="row h-100 m-lg-7 mx-3 mt-6 mx-md-4 my-md-7">
                                        @foreach($testimony as $key => $testi)
                                            @if($key < 3 &&  $testi->user)
                                                <div class="col-md-4 my-4 mb-md-0">
                                                    <div class="card card-span h-100 shadow-lg">
                                                        <div class="card-span-img  text-center">
                                                            <img src="{{$testi->user->profile_photo_url}}" alt="" width="100" height="100" class="rounded-circle">
                                                            <div class="text-center mt-3 fw-bold">{{$testi->user->name." ".$testi->user->lastname}}</div>
                                                        </div>
                                                        <div class="card-body mx-auto py-6">
                                                    <div class="my-4">
                                                        <div class="d-flex justify-content-center">
                                                            <div class="mx-1">
                                                                <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FF974D" viewBox="0 0 16 16">
                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                            </div>
                                                            <div class="mx-1">
                                                                <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FF974D" viewBox="0 0 16 16">
                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                            </div>
                                                            <div class="mx-1">
                                                                <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FF974D" viewBox="0 0 16 16">
                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                            </div>
                                                            <div class="mx-1">
                                                                <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FF974D" viewBox="0 0 16 16">
                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                            </div>
                                                            <div class="mx-1">
                                                                <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FF974D" viewBox="0 0 16 16">
                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="card-text text-center text-1000 px-4">{{$testi->message}}</p>
                                                </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <div class="row h-100 m-lg-7 mx-3 mt-6 mx-md-4 my-md-7">
                                        @foreach($testimony as $key => $testi)
                                            @if($key > 2 && $key < 6 )
                                                <div class="col-md-4 my-4 mb-md-0">
                                                    <div class="card card-span h-100 shadow-lg">
                                                        <div class="card-span-img  text-center">
                                                            <img src="{{$testi->user->profile_photo_url}}" alt="" width="100" height="100" class="rounded-circle">
                                                            <div class="text-center mt-3 fw-bold">{{$testi->user->name." ".$testi->user->lastname}}</div>
                                                        </div>
                                                        <div class="card-body mx-auto py-6">
                                                            <div class="my-4">
                                                                <div class="d-flex justify-content-center">
                                                                    <div class="mx-1">
                                                                        <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FF974D" viewBox="0 0 16 16">
                                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mx-1">
                                                                        <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FF974D" viewBox="0 0 16 16">
                                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mx-1">
                                                                        <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FF974D" viewBox="0 0 16 16">
                                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mx-1">
                                                                        <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FF974D" viewBox="0 0 16 16">
                                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mx-1">
                                                                        <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FF974D" viewBox="0 0 16 16">
                                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p class="card-text text-center text-1000 px-4">{{$testi->message}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row h-100 m-lg-7 mx-3 mt-6 mx-md-4 my-md-7">
                                        @foreach($testimony as $key => $testi)
                                            @if($key > 5 && $key < 9 )
                                                <div class="col-md-4 my-4 mb-md-0">
                                                    <div class="card card-span h-100 shadow-lg">
                                                        <div class="card-span-img  text-center">
                                                            <img src="{{$testi->user->profile_photo_url}}" alt="" width="100" height="100" class="rounded-circle">
                                                            <div class="text-center mt-3 fw-bold">{{$testi->user->name." ".$testi->user->lastname}}</div>
                                                        </div>
                                                        <div class="card-body mx-auto py-6">
                                                            <div class="my-4">
                                                                <div class="d-flex justify-content-center">
                                                                    <div class="mx-1">
                                                                        <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FF974D" viewBox="0 0 16 16">
                                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mx-1">
                                                                        <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FF974D" viewBox="0 0 16 16">
                                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mx-1">
                                                                        <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FF974D" viewBox="0 0 16 16">
                                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mx-1">
                                                                        <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FF974D" viewBox="0 0 16 16">
                                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mx-1">
                                                                        <svg class="bi bi-star-fill" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FF974D" viewBox="0 0 16 16">
                                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p class="card-text text-center text-1000 px-4">{{$testi->message}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
