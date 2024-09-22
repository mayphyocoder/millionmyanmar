@extends('layouts.main')
@section('content')
    <section class="page-title" style="background-image: url({{ asset('assets/images/background/page-title-bg.png') }});">
        <div class="auto-container">
            <div class="title-outer d-sm-flex align-items-center justify-content-sm-between">
                <h1 class="title">CSR</h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li>CSR</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="news-section">
        <div class="auto-container">
            <div class="row">
                @foreach ($csrs as $csr)
                    <div class="news-block col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="">
                                        <img src="{{ Storage::url($csr->photo) }}" alt="">
                                    </a>
                                </figure>

                            </div>
                            <div class="content-box">
                                <ul class="post-meta">
                                    <li><i class="fa fa-calendar-days"></i>{{ $csr->date }}</li>
                                    <li><i class="fa fa-user"></i>{{ $csr->users_table->name }}</li>
                                </ul>
                                <h6 class="title"><a href="">{{ $csr->title }}</a></h6>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
