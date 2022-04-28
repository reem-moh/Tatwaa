@extends('layouts.app')
@section('title', 'تطَوع')
@section('content')

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    @if (session()->has('sorry'))
        <div class="alert alert-info">
            {{ session()->get('sorry') }}
        </div>
    @endif
    <!--volunteer opportunities-->
    <div class="container ms-auto">
        <div class=" p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <div class="p-3 p-lg-5 pt-lg-3">
                <!--Describtion-->
                <h1 class="display-4 fw-bold lh-1 px-4 pt-5 my-5 text-center border-bottom"> تَطَوّع</h1>

                <!--agencies-->
                <div id="myCarousel" class="carousel slide  text-center" data-bs-ride="carousel">

                    <!--carousel-indicators-->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                            aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                            class="" aria-current="true"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                            class=""></button>
                    </div>

                    <!--inside carsoul-->
                    <div class="carousel-inner">

                        <!--first-->
                        <div class="carousel-item active ">
                            <svg class="bd-placeholder-img" width="100%" height="auto" viewBox="0 0 100 30"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice"
                                focusable="false">
                                <rect width="100%" height="100%" fill="#777"></rect>
                            </svg>

                            <div class="container ">
                                <div class="carousel-caption  ">
                                    <h1 class="lead mb-4 px-4 ">” فَمَن تَطَوّعَ خَيْراً فَهُوَ خَيْرٌ لّهُ “</h1>
                                </div>
                            </div>
                        </div>

                        <!--second-->
                        <div class="carousel-item">
                            <svg class="bd-placeholder-img" width="100%" height="auto" viewBox="0 0 100 30"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice"
                                focusable="false">
                                <rect width="100%" height="100%" fill="#777"></rect>
                            </svg>

                            <div class="container">
                                <div class="carousel-caption ">
                                    <h1 class="lead mb-4 px-4 text-end fw-bold">الفرص التطوعية</h1>

                                    <p class="lead mb-4 px-4  text-center">.وصول المتطوعين للفرص التطوعية بكل يسر وسهولة
                                        <br />
                                    </p>
                                    <p><a class="btn  btn-primary" href="#Volunteer">اعرف المزيد</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <svg class="bd-placeholder-img" width="100%" height="auto" viewBox="0 0 100 30"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice"
                                focusable="false">
                                <rect width="100%" height="100%" fill="#777"></rect>
                            </svg>

                            <div class="container">
                                <div class="carousel-caption ">
                                    <h1 class="lead mb-4 px-4 fw-bold">:قال النبي صل الله عليه وسلم
                                        <br />
                                        (أحب الناس إلى اللهِ عز وجل أنفعهم للناسِ)
                                    </h1>

                                </div>
                            </div>
                        </div>

                    </div>

                    <!--previous button-->
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <!--next button-->
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </div>

                <br />
                <br />
                <!--
                    <div class="d-grid gap-1 d-sm-flex justify-content-sm-center mb-5">
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4">سجل كمنشئة</button>
                    </div>
                -->
                <div class="overflow-hidden" style="max-height: 30vh;">
                </div>
            </div>
        </div>
    </div>

    <!-- Space -->
    <div class="px-4 pt-5 my-5 text-center border-bottom">
    </div>

    <!--Opportunity-->
    <div class="container ms-auto">
        <div class=" p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">

            <section>
                <p class="display-6 fw-bold lh-1 px-4  my-2 text-center " id="Volunteer">
                    الفرص التطوعيه
                </p>
                <div class="album py-5 bg-light">
                    <div class="container">

                        <div class="row">
                            @foreach ($agencies as $agency)
                                <div class="col-md-4">
                                    <div class="card mb-4 box-shadow shadow-lg">
                                        <div class="card-body">
                                            <p class="card-text">

                                            <div class="display-7 fw-bold text-center border-bottom"> {{ $agency->name }}
                                            </div>
                                            <br />
                                            <div class="display-7 text-center "> {{ $agency->description }}</div>
                                            <br />

                                            <div class=" text-center "> {{ $agency->volunteerNumber }} :العدد المطلوب
                                            </div>
                                            <br /> <br />
                                            @if ($agency->Volunteers->count() < $agency->volunteerNumber)
                                                <div class="d-sm-flex justify-content-sm-center mb-2   ">

                                                    <a style="text-decoration:none; "
                                                        href="{{ route('agency', ['agencyId' => $agency->id,'agencyName' => $agency->name,'agencyDesc' => $agency->description]) }}">
                                                        <button type="button" class="btn btn-outline-secondary ">
                                                            سجل
                                                        </button>
                                                    </a>
                                                </div>
                                            @else
                                                <div class="d-sm-flex justify-content-sm-center mb-2   ">

                                                    <button type="button" class="btn btn-danger btn-gray"
                                                        disabled>ممتلئ</button>
                                                </div>
                                            @endif

                                            </p>

                                        </div>

                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>

@endsection
