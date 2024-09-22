@extends('layouts.main')
@section('content')
<section class="page-title" style="background-image: url({{asset('assets/images/background/page-title-bg.png')}});">
    <div class="auto-container">
        <div class="title-outer d-sm-flex align-items-center justify-content-sm-between">
            <h1 class="title">Leadership Team</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{route('welcome')}}">Home</a></li>
                <li>Leadership Team</li>
            </ul>
        </div>
    </div>
</section>
<section class="news-section-ten  py-3" style="background-color: #32323a;">
    <div class="auto-container">
        <div class="sec-title v3 text-center"><br>
            <span class="sub-title" style="color:white;font-size:24px;">BOARD OF DIRECTORS</span>
            <h2></h2>
            
        </div>

        <!-- news slider -->
        <div class="row">
            <!-- News Block -->
            @foreach ($teams as $team)
            <div class="news-block-ten col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image">
                            <a href="">
                                <img src="{{Storage::url($team->photo)}}" alt="">
                            </a>
                        </figure>
                        
                    </div>
                    <div class="content-box">
                        <ul class="post-meta">
                            <li style="color:darkblue; font-size:16px;font-weight:bold"><i
                                    class="fa fa-user"></i>
                                    {{$team->name}}
                                </li>
                            
                        </ul>
                        <h6 class="title"><a href="" style="font-size:14px;">
                            {{$team->position}}
                        </a>
                        </h6>

                        <i class="fa fa-star" style="color:gold;"></i>
                        <i class="fa fa-star" style="color:gold;"></i>
                        <i class="fa fa-star" style="color:gold;"></i>
                    </div>
                </div>
            </div>
            @endforeach
            
            <!-- News Block -->

        </div>
    </div>
</section>
@endsection