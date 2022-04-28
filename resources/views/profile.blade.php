@extends('layouts.app')
@section('content')
    <div class="container ms-auto">
        <div class=" p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg " style="direction: rtl;">

            <section>
                <p class=" px-4   mb-4 display-6 fw-bold">
                    معلومات الشخصيه
                </p>

                <div class="album py-5 bg-light">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-4">
                                <div class=" mb-4 display-7 fw-bold text-center ">
                                    <p>
                                        الاسم
                                    </p>

                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4 ">
                                    <p>
                                        @php
                                         echo auth()->user()->name;
                                        @endphp
                                    </p>

                                </div>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-4 display-7 fw-bold text-center">
                                    <p>
                                        البريد الالكتروني
                                    </p>

                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4 ">
                                    <p>
                                        @php
                                         echo auth()->user()->email;
                                        @endphp
                                    </p>

                                </div>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-4 display-7 fw-bold text-center">
                                    <p>
                                        رقم الجوال
                                    </p>

                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="card mb-4 ">
                                    <p>
                                        @php
                                         echo auth()->user()->mobile;
                                        @endphp
                                    </p>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section>
                <p class="display-6 fw-bold lh-1 px-4  my-2 " id="Volunteer">
                    التطوعات السابقه
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


                                            <ul>

                                                @foreach ($agency->volunteers as $v)
                                                    <li>{{ $v->user_name }}</li>
                                                @endforeach
                                            </ul>

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
