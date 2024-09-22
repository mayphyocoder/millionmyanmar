@extends('layouts.main')
@section('content')
    <section class="page-title" style="background-image: url({{ asset('assets/images/background/page-title-bg.png') }});">
        <div class="auto-container">
            <div class="title-outer d-sm-flex align-items-center justify-content-sm-between">
                <h1 class="title">Activities</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li>Activities</li>
                </ul>
            </div>
        </div>
    </section>
    <br>
    <section class="news-section-nine pt-1" style="background-color: white;">
        <div class="auto-container">
            <div class="sec-title v3 text-center">
                <span class="sub-title">blogs and news</span>
                <h4 style="font-family:cursive">Enjoy you daily life with us through the most valuable thing</h4>

            </div>


            <div class="row">
                <!-- News Block -->
                @foreach ($activities as $activity)
                    <div class="news-block-nine col-lg-4 col-md-6 col-sm-12 fadeInUp">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="">
                                        <img src="{{ Storage::url($activity->photo) }}" alt="">
                                    </a>
                                </figure>
                                <ul class="post-meta">
                                    <li><i class="fa fa-user"></i>{{ $activity->users_table->name }}</li>
                                    <li><i class="fa fa-calendar-days"></i>{{ $activity->date }}</li>
                                    <li>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="content-box">
                                <div class="text">
                                    {{ $activity->title }}
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- News Block -->

            </div>
        </div>
    </section>
@endsection
