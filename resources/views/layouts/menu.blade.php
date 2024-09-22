<header class="main-header header-style-one">
    <!-- Header Top -->
    <div class="header-top">
        <div class="inner-container">
            <div class="top-left">
                <div class="logo">
                    <a href="{{ route('welcome') }}">
                        <img src="{{ asset('assets/data/logo-letter.png') }}" alt="" title="Congrow"
                            style="width: 520px;">
                    </a>
                </div>
            </div>

            <div class="top-right">
                <ul class="header-contact-list">
                    <li>
                        <img src="{{ asset('assets/data/phone1.png') }}" style="width:170px;height:70px;">
                        {{-- <span class="icon lnr-icon-phone-handset" ></span>
                        <span class="title">Requesting A Call:</span>
                        <div class="text"><a href="tel:+92880098670">029353570</a>
                        </div> --}}
                    </li>
                    <li>
                        <img src="{{ asset('assets/data/fig.png') }}" style="width:150px;height:60px;">
                    </li>
                    <li>

                        <i class="icon lnr-icon-map-marker"></i>
                        <span class="title">242/22 Ladprao 112, Phlapphla Subdistrict, Bangkok 10310. </span>
                        <div class="text">Thailand.</div>
                    </li>
                    <li>
                        <span class="icon lnr-icon-envelope1"></span>
                        <span class="title">Email Address:</span>
                        <div class="text"><a href="tel:+92880098670">milliontin.myanmar@gmail.com </a></div>
                    </li>
                    {{-- <li>
                        <span class="icon lnr-icon-clock"></span>
                        <span class="title">MONDAY - SATURADAY:</span>
                        <div class="text">9:00 AM - 5:00 PM</div>
                    </li> --}}
                </ul>
            </div>

            <!-- Mobile Nav toggler -->
            <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header Lower -->
    <div class="header-lower" style="background-color: black;">
        <!-- Main box -->
        <div class="main-box">
            <button class="ui-btn toggle-hidden-bar" style="background-color:gold;">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>

            <div class="nav-outer">
                <nav class="nav main-menu">
                    <ul class="navigation">
                        <li><a href="{{ route('welcome') }}" style="color:gold;">HOME</a></li>

                        <li class="dropdown">
                            <a href="#" style="color:gold;">OUR BUSINESS GROUP</a>
                            <ul>
                                <li>
                                    <a href="https://travel.millionmyanmar.com/" target="_blank"
                                        style="color:gold;">GOLDEN AMBER TRAVELS & TOURS </a>
                                </li>
                                <li>
                                    <a href="https://realestate.millionmyanmar.com/" target="_blank"
                                        style="color:gold;">MILLION HOUSE THAILAND </a>
                                </li>
                                <li>
                                    <a href="https://goldenseamyanmar.millionmyanmar.com/" target="_blank"
                                        style="color:gold;"> GOLDEN SEA MYANMAR EMPLOYMENT AGENCY </a>
                                </li>
                                <li>
                                    <a href="https://entertainment.millionmyanmar.com/" target="_blank"
                                        style="color:gold;">MILLION & IRIS ENTERTAINMENT</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li><a href="{{route('team.index')}}" style="color:gold;">LEADERSHIP TEAM</a></li>
                        <li><a href="" style="color:gold;">CERTIFICATES</a></li>
                        <li class="dropdown">
                            <a href="" style="color:gold;">ABOUT US</a>
                            <ul>
                                <li><a href="" style="color:gold;">Our Company</a></li>
                                <li><a href=""style="color:gold;">Our Milestones</a></li>
                                <li><a href="" style="color:gold;">Million's Strategy </a>
                                </li>
                            </ul>
                        </li>

                        <li><a href="{{route('activities.index')}}" style="color:gold;">ACTIVITIES</a></li>
                        <li><a href="{{route('csr.index')}}" style="color:gold;">CSR</a></li>

                    </ul>
                </nav>
                <!-- Main Menu End-->
                <div class="outer-box">
                    <a href="" class="theme-btn btn-style-one"
                        style="background-color: gold;"><span class="btn-title">CONTACT US <i
                                class="fa fa-arrow-right"></i></span></a>

                    <!-- Header Search -->

                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>

        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        <nav class="menu-box" style="background-color:#010302;">
            <div class="upper-box">
                {{-- nav-logo --}}
                <div class="">
                    <a href="{{ route('welcome') }}">
                        <img src="{{ asset('assets/data/logo.jpg') }}" alt="" title=""
                            style="width: 50%;">
                    </a>
                </div>
                <div class="close-btn"><i class="icon fa fa-times"></i></div>
            </div>

            <ul class="navigation clearfix">
                <!--Keep This Empty / Menu will come through Javascript-->
            </ul>

            <ul class="contact-list-one">
                <li>
                    <i class="icon lnr-icon-phone-handset"></i>
                    <span class="title">Call Now</span>
                    <div class="text"><a href="tel:+92880098670">029353570</a></div>
                </li>

                <li>
                    <i class="icon lnr-icon-envelope1"></i>
                    <span class="title">Send Email</span>
                    <div class="text"><a href="mailto:help@company.com">milliontin.myanmar@gmail.com </a></div>
                </li>
                <li>
                    <i class="icon lnr-icon-map-marker"></i>
                    <span class="title">Address</span>
                    <div class="text">242/22 Ladprao 112, Phlapphla Subdistrict, Wang Thonglang District, Bangkok
                        10310 </div>
                </li>
            </ul>

            <ul class="social-links">
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </nav>
    </div>
    <!-- End Mobile Menu -->

    <!-- Header Search -->

    <!-- End Header Search -->

    <!-- Sticky Header  -->
    <div class="sticky-header" style="background-color: black;">
        <div class="auto-container">
            <div class="inner-container">
                <!--Logo-->
                <div class="logo">
                    <a href="{{ route('welcome') }}" title="">
                        <img src="{{ asset('assets/data/logo.jpg') }}" alt="" title=""
                            style="width: 140px; height:auto;">
                    </a>
                </div>

                <!--Right Col-->
                <div class="nav-outer">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">
                            </ul>
                        </div>
                    </nav>

                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                </div>
            </div>
        </div>
    </div><!-- End Sticky Menu -->
</header>
<div class="hidden-bar-back-drop"></div>

<section class="hidden-bar">
    <div class="inner-box">
        <div class="upper-box">
            <div class="nav-logo">
                <a href="{{ route('welcome') }}">
                    <img src="{{ asset('assets/data/logo2.jpg') }}" alt="" title=""
                        style="height:100px;">
                </a>
            </div>
            <div class="close-btn"><i class="icon fa fa-times"></i></div>
        </div>

        <div class="text-box">
            <h4 class="title">Our Service is your satisfication!</h4>
            <div class="text">Get in touch.</div>
        </div>

        <ul class="contact-list-one">
            <li>
                <i class="icon lnr-icon-phone-handset"></i>
                <span class="title">Call Now</span>
                <div class="text"><a href="tel:+92880098670">+(959) 5418443</a></div>
            </li>
            <li>
                <i class="icon lnr-icon-envelope1"></i>
                <span class="title">Send Email</span>
                <div class="text"><a href="mailto:help@company.com">info@millionmyanmar.com</a></div>
            </li>
            <li>
                <i class="icon lnr-icon-map-marker"></i>
                <span class="title">Address</span>
                <div class="text">No.(92),(G/F),Seikkantha St,Kyauktada T/S,Yangon.</div>
            </li>
        </ul>

        <ul class="social-links" style="background-color: gold;">
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        </ul>
    </div>
</section>
