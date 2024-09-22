@extends('layouts.main')
@section('content')
    {{-- Our Business Group --}}
    <section class="project-section-eight" style="background-image: url({{ asset('assets/data/about-bg3.png') }})">
        <div class="auto-container">
            <div class="sec-title light v3 text-center">
                <span class="sub-title">Our Business Group</span>
                <h3>Roadway to Corporate <br>Sustainability</h3>
            </div>

            <div class="row">
                <!-- Team block -->
                <!-- Travels -->
                <div class="project-block-eight col-lg-3 col-sm-6 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="https://travel.millionmyanmar.com/" target="_blank">
                                    <img src="{{ asset('assets/data/b5.png') }}" alt="">
                                </a>
                            </figure>
                            
                        </div>
                    </div>
                </div>
                <!-- Real Estate -->
                <div class="project-block-eight col-lg-3 col-sm-6 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="https://realestate.millionmyanmar.com/" target="_blank">
                                    <img src="{{ asset('assets/data/b10.png') }}" alt="">
                                </a>
                            </figure>
                            
                        </div>
                    </div>
                </div>
                <!-- Employment-->
                <div class="project-block-eight col-lg-3 col-sm-6 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="https://goldenseamyanmar.millionmyanmar.com/" target="_blank">
                                    <img src="{{ asset('assets/data/b8.png') }}" alt="">
                                </a>
                            </figure>
                            
                        </div>
                    </div>
                </div>
                <!-- Entertainment-->
                <div class="project-block-eight col-lg-3 col-sm-6 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="https://entertainment.millionmyanmar.com/" target="_blank">
                                    <img src="{{ asset('assets/data/b9.png') }}" alt="">
                                </a>
                            </figure>
                            
                        </div>
                    </div>
                </div>
                <!-- Team block -->

            </div>
        </div>
    </section>

    {{-- About Us --}}
    <section class="testimonial-section-eight">
        <div class="auto-container">
            <div class="sec-title light v3 text-center">
                <span class="sub-title">About Us</span>
                <h3>What they do?</h3>
            </div>

            <div class="">
                <!-- Testimonial Block -->
                <div class="testimonial-block-eight">
                    <div class="inner-box">
                        <div class="info-box">
                            <div class="image-box">
                                <figure class="thumb"><img src="{{ asset('assets/data/m1.jpg') }}" alt=""
                                        style="width:350px; height:100%;"></figure>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="content-box">
                                <h4 class="name"> Mr.Chookiat Bauphang</h4>
                                <span class="designation">CHAIRMAN</span>
                                <div class="text">Chairman บริษัท Million House (ประเทศไทย จำกัด)
                                    -กรรมการผู้จัดการ บริษัท ลิขสิทธิ์ เซนเตอร์ จำกัด
                                    -กรรมกาผู้จัดการ บริษัท เอ็ม พี ทรี (ประเทศไทย) จำกัด
                                    -เป็นผู้ดำเนินธุรกิจนำเข้าแรงงานจากพม่าเข้ามาทำงานในประเทศไทย
                                    ดำเนินธุรกิจด้านนี้-ตั้งแต่ปี 2554 ต่อเนื่องมาจนถึงปัจจุบัน
                                    -เป็นผู้มีส่วนในการผู้ผลักดันให้ใช้แรงงานต่างด้าวถูกกฎหมาย ในประเทศไทย
                                    -เป็นเจ้าของคอนเทนต์ไพร์ไวเดอร์
                                    -เป็นผู้มีส่วนในการจัดตั้งสมาคมช่วยเหลือผู้ใช้แรงงานชาวพม่าในประเทศไทย
                                    -เป็นผู้นำศิลปินน้องร้อง นักแสดง ดารา ชาวพม่ามาแสดงคอนคอนเสิร์ตในประเทศไทย
                                    และเดินสายแสดงโชว์ในจังหวัดต่าง ๆในประเทศไทยและ
                                    เป็นเจ้าของลิขสิทธิ์เพลงพม่าในประเทศไทย
                                    ปัจจุบันยังดำเนินธุรกิจประเภทนี้อย่างต่อเนื่อง</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block-eight" style="background-color: black;">
                    <div class="inner-box">
                        <div class="info-box">
                            <div class="image-box">
                                <figure class="thumb"><img src="{{ asset('assets/data/m2.jpg') }}" alt=""
                                        style="width:390px; height:320px;;"></figure>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="content-box">
                                <h4 class="name"> Mr.Million Tin</h4>
                                <span class="designation">CEO</span>
                                <div class="text">ประธานบริหารบริษัท โกเด้น ซี เมียนมา จำกัด ในประเทศพม่า
                                    เป็นบริษัทจัดหางานในระดับต้น ๆ ของประเทศพม่า
                                    ประกอบธุรกิจส่งแรงงานชาวพม่าไปทำงานในประเทศต่าง อาทิ ญี่ปุ่น, มาเลเซีย, สิงคโปร์, และ
                                    ประเทศไทย เป็นต้น สำหรับประเทศไทย
                                    ทางบริษัทฯได้ส่งแรงงานชาวพม่าเข้ามาทำงานในประเทศไทยแล้วไม่น้อยกว่า 100,000 คน ในเวลา 20
                                    ปี
                                    ความสำเร็จของเราในวันนี้ ส่วนหนึ่งเป็นเพราะความมุ่งมั่น
                                    ทุมเทและจริงใจในวิชาชีพและภารกิจที่สำคัญนี้
                                    เรามุ่งมั่นที่จะรักษาคุณภาพและมาตรฐานแรงงานชาวพม่าที่เราได้คัดเลือกและส่งให้ตามที่ผู้ประกอบการต้องการ
                                    จากความมุ่งมั่นและพยายามดังกล่าว เราจึงได้รับความไว้วางใจจากผู้ประกอบการรายใหญ่ ๆ
                                    ในประเทศไทย ตัดสินใจเลือกใช้บริการของเรา อาทิ CP………เป็นต้น
                                    และเพื่อให้การบริหารจัดการและเป็นผู้นำด้านธุระกิจส่งแรงงานชาวพม่าเข้ามาทำงานในประเทศไทย
                                    เราจึงได้ทำ MOU กับบริษัทคู่ค้าในประเทศไทยที่มีคุณภาพและได้มาตรฐาน
                                    เพื่อรองรับการบริหารงานเพื่อธุรกิจขอท่าน เราขอเป็นส่วนหนึ่งในความสำเร็จของท่าน
                                    ท่านมีปัญาหาด้านแรงงาน ท่านใช้บริการเรา ธุรกิจของท่านคือบริการของเรา.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block-eight" hidden>
                    <div class="inner-box">
                        <div class="info-box">
                            <div class="image-box">
                                <figure class="thumb"><img src="{{ asset('assets/data/m3.jpg') }}" alt=""
                                        style="width:350px; height:300px;"></figure>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="content-box">
                                <h4 class="name"> Mr. Asdang Methakasejthikul @jimmy</h4>
                                <span class="designation">MD</span>
                                <div class="text">MD บริษัท Million House (ประเทศไทย)
                                    - เป็นบริษัทคู่ค้ากับบริษัทจัดหางานในพม่าหลายบริษัท
                                    - เป็นผู้นำเข้าแรงงานจากพม่าเป็นรายแรก ๆ หลังจากมีMOU
                                    - มีประสบการณ์การนำเข้าแรงงานจากพม่ามากกว่า 10 ปี
                                    - สามารถสื่อสารได้ทั้งภาษาไทยและภาษาพม่าได้เป็นอย่างดี
                                    - นอกจากจะดำเนินธุรกิจด้านการนำเข้าแรงงานจากพม่าแลัว
                                    ยังร่วมมือกับนักธุรกิจไทยเพื่อลงทุนอื่น ๆ อาทิ ด้านการรักษาสุขภาพ การท่องเที่ยว
                                    อสังหารมทรพย์
                                    และบันเทิง เป็นต้น
                                    มุ่งมั่น จริงจัง และจริงใจ ในการบริหารงาน ทุกภารกิจของเรา</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>

    {{-- About Company --}}
    <section class="about-section-four" style="background-image: url({{ asset('assets/data/ab-bg.png') }})">
        <div class="bg bg-pattern-1"></div>
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-xl-6 col-lg-6 wow fadeInRight" data-wow-delay="600ms">
                    <div class="inner-column">
                        <div class="sec-title light">
                            <span class="sub-title" style="color:black;">About Company</span>
                            <h3 style="color:#063d78;">Million House Thailand</h3>
                            <div class="text" style="color:black;">
                                เรยีนผูป้ระกอบการ/นายจา้ง/เจา้ของธรุกจิ/ในประเทศไทย
                                ดว้ยบรษิทัGOLDENSEAMYANMARCO.,LTD.โดยMR.MILLION(มลิเลย่ีน)ประธานบรหิารเป็น
                                บรษิ ทั จดั หางานทถ่ี กู ตอ้ งตามกฎหมายของประเทศสหภาพเมยี นมาร ์ ไดร้ บั การจดทะเบยี นเมอ่ื
                                ปี พ.ศ. 2547 (ค.ศ.2004)
                                ใบอนุญาตเลขท่ี063/2004เรามปีระสบการณใ์นการจดัสง่คนงานชาวเมยีนมารไ์ปทางานใน
                                ประเทศตา่งๆเป็นเวลานับ10ปีเชน่ ประเทศญป่ีุ่น,สงิคโปร์,มาเลเซยี และประเทศไทย
                                นอกจากการจดัสง่คนงานเพอ่ืไปทางานกบันายจา้งสถานประกอบการตา่งๆแลว้เรายงัเป็นบรษิทัฯทไ่ีด้ จดั
                                สง่ นักศกึ ษาบุคลากรชาวพม่าเพอ่ื ไปศกึ ษาดงู าน ฝึกอบรมในสถานศกึ ษาของประเทศตา่ งๆ
                                มากมายสาหรบั การจดั สง่แรงงานชาวเมยี นมารใ์หเ้ขา้มาทางานกบั นายจา้งในประเทศไทยน้ันเราไดป้
                                ฏบิ ตั ติ ามกฎหมายทท่ี ง้ัสอง
                                ประเทศกาหนดและตามบนัทกึขอ้ตกลงความเขา้ใจระหวา่งกนัของทางการไทยกบัทางการสหภาพเมยีนมาร์ (MOU)
                                {{-- เราจะคดัเลอืกแรงงานชาวเมยีนมารท์ม่ีคีวามรคู้วามสามารถประสบการณแ์ละฝีมอืตรงตามความตอ้งการ ของนายจา้งและทส่ีาคญักอ่นสง่แรงงานชาวเมยีนมารใ์หก้บันายจา้งในประเทศไทยในงานเราชาวเมยีนมาร์เหลา่ นีจ้ะไดร้บัการอบรมดา้นภาษาวฒันธรรมประเพณีวนิัยการทางานและการปฏบิตัตินตอ่นายจา้งในประเทศไทย กอ่นสง่ใหแ้กน่ ายจา้ง
                            เราจงึ เป็นบรษิ ทั จดั หางานประเทศเมยี นมารท์ ส่ี ามารถสอ่ื สารดว้ ยภาษาไทยและภาษาองั กฤษกบั ทา่ นได้ โดยตรงเรามบี รษิ ทั คสู่ ญั ญาทม่ี คี ณุ ภาพในประเทศไทย
                            เรามคี วามมุ่งม่นั ทจ่ี ะเป็นบรษิ ทั จดั หางานมอื อาชพี ในประเทศสหภาพเมยี นมารห์ ากทา่ นมปี ัญหาดา้ น
                            แรงงานหรอืตอ้งการแรงงานชาวเมยีนมารพ์ม่าทม่ีคีุณภาพตรงตามความตอ้งการทา่นปรกึษากบัเราไดโ้ดย
                            ตรงเรายนิดรีบัใชท้า่นชว่ยเหลอืทา่นอยา่งมติรภาพเรามศีูนยป์ระสานงานในประเทศไทยเราดใีจและภมูใิจเป็น
                            ่่่
                            อยา่ งยงิ หากไดเ้ป็นสว่ นหนึงในกจิ การของทา่ นและขอเป็นสว่ นหนึงในความสาเรจ็ ของทา่ น
                            ่
                            หากทา่ นมปี ัญหาดา้ นแรงงาน ปรกึ ษาเราไดเ้ ราขอเป็ นสว่ นหนึงในความสาเรจ็ ของทา่ น
                            ขอแสดงความนับถอื<br>
                            MR.MILLION<br>
                            ประธานบรหิาร<br>
                            GOLDEN SEA MYANMAR CO.,LTD. --}}
                            </div>
                        </div>
                        
                        <div class="btn-box">
                            <a href="" class="theme-btn btn-style-one"><span class="btn-title">Read More
                                    <i class="fa fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-xl-6 col-lg-6">
                    <div class="inner-column">
                        <span class="icon-dots bounce-x"></span>
                        <figure class="image-1 overlay-anim wow fadeInUp"><img
                                src="{{ asset('assets/data/aboutus.png') }}" alt="" width: 100%; height: 250px;
                                background-size: top; object-fit: cover></figure>
                        {{-- <figure class="image-2 overlay-anim wow fadeInLeft"><img src="{{asset('assets/images/resource/about4-2.jpg')}}" alt=""></figure> --}}
                        <div class="exp-box">
                            <div class="inner" style="background-color: gold;">
                                <div class="icon-box">
                                    <span class="icon fa fa-award"></span>
                                    <h2 class="title">2004</h2>
                                </div>
                                <p class="text">Established</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Milestones --}}
    <section class="about-section-four">
        <div class="bg bg-pattern-1"></div>
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="sec-title v2 text-center">
                    <span class="sub-title" style="color:goldenrod; font-size:24px;">Our Milestones</span>

                    <h6 style="color:#fafafa; font-size:18px;">"Since our establishment in 2010,
                        we've embarked on an exciting journey of growth and innovation.These milestones reflect our
                        dedication to progress and our journey towards a brighter future.Delivering Hapiness at every
                        step......"
                    </h6>

                </div>

                <!-- Image Column -->
                <div class="image-column col-xl-12 col-lg-12">
                    <div class="inner-column">
                        <span class="icon-dots bounce-x"></span>
                        <figure class="image-1 overlay-anim wow fadeInUp"><img
                                src="{{ asset('assets/data/business5.png') }}" alt="" width: 100%; height: 250px;
                                background-size: top; object-fit: cover></figure>
                        {{-- <figure class="image-2 overlay-anim wow fadeInLeft"><img src="{{asset('assets/images/resource/about4-2.jpg')}}" alt=""></figure> --}}

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Vision, Mission and Values --}}
    

    <section class="services-section-three" style="background-color: #fafafa;">
        <div class="auto-container">
            <div class="sec-title v2 text-center">
                <span class="sub-title" style="color:#09043d; font-size:24px;">Our Business Strategy</span>
                <h2></h2>
                <span>Our values lie at the heart of the organisation and mark the genesis of our vision and mission that
                    steer the Corporation’s business and operations. We believe that performance is multi-faceted and needs
                    to be assessed quantitatively and qualitatively, incorporating all the stakeholders and aspects impacted
                    with reference to the current business dynamics.</span>
            </div>

            <div class="row">
                <!-- service Block -->
                <div class="service-block-three col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href=""><img src="{{ asset('assets/data/vision6.jpeg') }}" alt=""
                                        style="width: 100%;background-size:contain;object-fit:contain;">
                                </a>
                            </figure>
                            <span class="icon flaticon-target"></span>
                        </div>
                        <div class="content-box">
                            <h4 class="title"><a href="" style="color:#09096e;font-weight:bold;">Our Vision</a>
                            </h4>
                            <div class="text">Our vision is to create a global network of companies that lead by shaping
                                industries through innovation and sustainable practices, leaving a positive legacy for
                                future generations.

                            </div>
                            <i class="fa fa-star" style="color:gold;"></i>
                            <i class="fa fa-star" style="color:gold;"></i>
                            <i class="fa fa-star" style="color:gold;"></i>

                        </div>
                    </div>
                </div>

                <!-- service Block -->
                <div class="service-block-three col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img src="{{ asset('assets/data/mission3.jpeg') }}"
                                        alt=""></a></figure>
                            <span class="icon flaticon-target"></span>
                        </div>
                        <div class="content-box">
                            <h4 class="title" style="color:#09096e;font-weight:bold;"><a href="">Our Mission</a>
                            </h4>
                            <div class="text">We are committed to creating services across our diverse portfolio of
                                companies, driven by a passion for excellence, sustainability, and customer satisfaction.
                            </div>
                            <i class="fa fa-star" style="color:gold;"></i>
                            <i class="fa fa-star" style="color:gold;"></i>
                            <i class="fa fa-star" style="color:gold;"></i>

                        </div>
                    </div>
                </div>

                <!-- service Block -->
                <div class="service-block-three col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img src="{{ asset('assets/data/values5.jpeg') }}"
                                        alt=""></a></figure>
                            <span class="icon flaticon-target"></span>
                        </div>
                        <div class="content-box">
                            <h4 class="title"><a href="" style="color:#09096e;font-weight:bold;">Our Values</a>
                            </h4>
                            <div class="text">
                                <i class="fa fa-check" style="color:gold;"></i> Integrity <br>
                                <i class="fa fa-check" style="color:gold;"></i> Innovation<br>
                                <i class="fa fa-check" style="color:gold;"></i> Customer-Centric<br>
                                <i class="fa fa-check" style="color:gold;"></i> Sustainability<br>
                                <i class="fa fa-check" style="color:gold;"></i> Collaboration<br>
                                <i class="fa fa-check" style="color:gold;"></i> Excellence

                            </div>
                            <i class="fa fa-star" style="color:gold;"></i>
                            <i class="fa fa-star" style="color:gold;"></i>
                            <i class="fa fa-star" style="color:gold;"></i>

                        </div>
                    </div>
                </div>
                <div class="service-block-three col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img src="{{ asset('assets/data/goal2.png') }}"
                                        alt=""></a></figure>
                            <span class="icon flaticon-target"></span>
                        </div>
                        <div class="content-box">
                            <h4 class="title"><a href="" style="color:#09096e;font-weight:bold;">Our Goals</a>
                            </h4>
                            <div class="text">
                                To deliver a professional, elite & swift no nonsense service to all our clients and
                                candidates.
                                An organisation is recognised by its value system which celibrates the behaviour of its
                                employees and their professional endeavours and engagements.
                            </div>
                            <i class="fa fa-star" style="color:gold;"></i>
                            <i class="fa fa-star" style="color:gold;"></i>
                            <i class="fa fa-star" style="color:gold;"></i>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- ISO Certificates --}}
    <section class="services-section" style="background-image: url({{ asset('assets/data/bg5.png') }})">
        <div class="auto-container">
            <div class="sec-title light">
                <div class="row">
                    <div class="col-lg-6">
                        <span class="sub-title">Our approval licenses</span>
                        <h3 style="color:white;">OUR <br>APPROVAL LICENSES</h3>
                    </div>
                    <div class="col-lg-6">
                        <div class="text">
                            We always try the best for our customers.These certifications and awards reflect our unwavering
                            commitment to quality, excellence, and environmental responsibility, ensuring our customers can
                            trust in the value we deliver.

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- News Block -->
                <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img src="{{ asset('assets/data/iso1.png') }}"
                                        alt=""></a></figure>
                            {{-- <span><img src="{{asset('assets/data/logo2.jpg')}}" alt="" style="width:60px;height:60px;"></span> --}}
                            <span class="icon flaticon-diploma"></span>
                        </div>
                        <div class="content-box">
                            {{-- <h4 class="title" style="background-color:black;height:50px;line-height:-5px;"><a href="" style="line-height: -2px;">Cash Flow</a></h4> --}}
                            {{-- <div class="text">Lorem ipsum dolor amet consectetur. Purus ut nec aliquet diam sed tellus lobortis. Odio varius Lorem ipsum dolor sit amet</div> --}}
                            <a href="" class="theme-btn btn-style-two light"><span class="btn-title">
                                    Company
                                    License </span></a>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img src="{{ asset('assets/data/cer2.png') }}"
                                        alt=""></a></figure>
                            <span class="icon flaticon-diploma"></span>
                        </div>
                        <div class="content-box">
                            <a href="" class="theme-btn btn-style-two light"><span class="btn-title">Company
                                    License </span></a>

                            {{-- <div class="text">Lorem ipsum dolor amet consectetur. Purus ut nec aliquet diam sed tellus lobortis. Odio varius Lorem ipsum dolor sit amet</div> --}}
                            {{-- <a href="" class="theme-btn btn-style-two light"><span class="btn-title">Read More </span></a> --}}
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img src="{{ asset('assets/data/cer3.png') }}"
                                        alt=""></a></figure>
                            <span class="icon flaticon-diploma"></span>
                        </div>
                        <div class="content-box">
                            {{-- <h4 class="title"><a href="">Money Wise</a></h4> --}}
                            {{-- <div class="text">Lorem ipsum dolor amet consectetur. Purus ut nec aliquet diam sed tellus lobortis. Odio varius Lorem ipsum dolor sit amet</div> --}}
                            <a href="" class="theme-btn btn-style-two light"><span class="btn-title">
                                    Company
                                    License </span></a>

                        </div>
                    </div>
                </div>
                <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img src="{{ asset('assets/data/cer4.png') }}"
                                        alt=""></a></figure>
                            <span class="icon flaticon-diploma"></span>
                        </div>
                        <div class="content-box">
                            {{-- <h4 class="title"><a href="">Money Wise</a></h4> --}}
                            {{-- <div class="text">Lorem ipsum dolor amet consectetur. Purus ut nec aliquet diam sed tellus lobortis. Odio varius Lorem ipsum dolor sit amet</div> --}}
                            <a href="" class="theme-btn btn-style-two light"><span class="btn-title">
                                    Company
                                    License </span></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Counter --}}
    <section class="fun-fact-section-three">
        <div class="auto-container">
            <div class="fact-counter">
                <div class="row">
                    <!-- Counter block-->
                    <div class="counter-block-three col-lg-3 col-sm-6 wow fadeInUp">
                        <div class="inner">
                            <div class="content">
                                <i class="fa fa-flag" style="font-size:40px;"></i>
                                <div class="count-box"><span class="count-text" data-speed="3000"
                                        data-stop="2004">0</span></div>
                                <h6 class="counter-title">Founded</h6>
                            </div>
                        </div>
                    </div>

                    <!--Counter block-->
                    <div class="counter-block-three col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="inner">
                            <div class="content">
                                <i class="fa fa-users" style="font-size:40px;"></i>
                                <div class="count-box"><span class="count-text" data-speed="3000"
                                        data-stop="100">0</span>+</div>
                                <h6 class="counter-title">Team Members</h6>
                            </div>
                        </div>
                    </div>

                    <!--Counter block-->
                    <div class="counter-block-three col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="600ms">
                        <div class="inner">
                            <div class="content">
                                <i class="fa fa-buildings" style="font-size:40px;"></i>
                                <div class="count-box"><span class="count-text" data-speed="3000"
                                        data-stop="4">0</span></div>
                                <h6 class="counter-title">Companies</h6>
                            </div>
                        </div>
                    </div>

                    <!--Counter block-->
                    <div class="counter-block-three col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="900ms">
                        <div class="inner">
                            <div class="content">
                                <i class="fa fa-award" style="font-size:50px;"></i>
                                <div class="count-box"><span class="count-text" data-speed="3000"
                                        data-stop="20">0</span></div>
                                <h6 class="counter-title">Certificates</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Teams --}}
    
    

    <section class="news-section-ten  py-3" style="background-color: #32323a;">
        <div class="auto-container">
            <div class="sec-title v3 text-center"><br>
                <span class="sub-title" style="color:white;font-size:24px;">BOARD OF DIRECTORS</span>
                <h2></h2>
                {{-- <a href="news-grid.html" class="theme-btn btn-style-one read-more"><span class="btn-title">more blogs <i
                            class="fa fa-arrow-right"></i></span></a> --}}
            </div>

            <!-- news slider -->
            <div class="row">
                <!-- News Block -->
                <div class="news-block-ten col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img src="{{ asset('assets/data/team1.png') }}"
                                        alt=""></a>
                            </figure>
                            {{-- <span class="date">Million House</span> --}}
                        </div>
                        <div class="content-box">
                            <ul class="post-meta">
                                <li style="color:darkblue; font-size:16px;font-weight:bold"><i
                                        class="fa fa-user"></i>Mr.Chookiat Bauphang</li>
                                {{-- <li><i class="fa fa-comments"></i>Comments</li> --}}
                            </ul>
                            <h6 class="title"><a href="" style="font-size:14px;">Chairman</a></h6>
                            <i class="fa fa-star" style="color:gold;"></i>
                            <i class="fa fa-star" style="color:gold;"></i>
                            <i class="fa fa-star" style="color:gold;"></i>
                        </div>
                    </div>
                </div>
                
                <div class="news-block-ten col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img src="{{ asset('assets/data/team2.png') }}"
                                        alt=""></a>
                            </figure>
                            {{-- <span class="date">Million House</span> --}}
                        </div>
                        <div class="content-box">
                            <ul class="post-meta">
                                <li style="color:darkblue; font-size:16px;font-weight:bold;"><i
                                        class="fa fa-user"></i>Mr.Million Tun</li>
                                {{-- <li><i class="fa fa-comments"></i>Comments</li> --}}
                            </ul>
                            <h6 class="title"><a href="" style="font-size:14px;">Chief Executive Officer
                                    (CEO)</a></h6>
                            <i class="fa fa-star" style="color:gold;"></i>
                            <i class="fa fa-star" style="color:gold;"></i>
                            <i class="fa fa-star" style="color:gold;"></i>
                        </div>
                    </div>
                </div>
                
                <div class="news-block-ten col-lg-3 col-md-6 col-sm-12 wow fadeInUp" hidden>
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href=""><img src="{{ asset('assets/data/team3.png') }}"
                                        alt=""></a>
                            </figure>
                            {{-- <span class="date">Million House</span> --}}
                        </div>
                        <div class="content-box">
                            <ul class="post-meta">
                                <li style="color:darkblue; font-size:16px;font-weight:bold"><i class="fa fa-user"></i>Mr.
                                    Asdang Methakasejthikul </li>
                                {{-- <li><i class="fa fa-comments"></i>Comments</li> --}}
                            </ul>
                            <h6 class="title"><a href="" style="font-size:14px;">Managing Director</a></h6>
                            <i class="fa fa-star" style="color:gold;"></i>
                            <i class="fa fa-star" style="color:gold;"></i>
                            <i class="fa fa-star" style="color:gold;"></i>
                        </div>
                    </div>
                </div>
                <!-- News Block -->

            </div>
        </div>
    </section>

    {{-- Countries --}}
    <section class="testimonial-section-five" style="background-color: #fafafa;">
        <div class="auto-container">
            <div class="sec-title light text-center">
                <span class="sub-title" style="color:black;">Our Business</span>
                <h2 style="color:black;">Supplying Myanmar Workers to:</h2>
            </div>

            <div class="carousel-outer">
                <div class="three-items-carousel owl-carousel disable-navs default-dots-three">
                    <!-- Testimonial Block five -->
                    <div class="testimonial-block-five">
                        <div class="inner-box">
                            <div class="info-box">
                                <div class="image-box">
                                    <figure class="thumb"><img src="{{ asset('assets/data/tflag2.png') }}"
                                            alt="" style="width:60px;height:60px;"></figure>
                                    {{--  --}}
                                </div>
                                <h4 class="name">Thailand</h4>
                                {{-- <span class="designation">President of Sales</span> --}}
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>--</span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Testimonial Block five -->
                    <div class="testimonial-block-five">
                        <div class="inner-box">
                            <div class="info-box">
                                <div class="image-box">
                                    <figure class="thumb"><img src="{{ asset('assets/data/mflag2.png') }}"
                                            alt="" style="width:60px;height:60px;"></figure>
                                    {{--  --}}
                                </div>
                                <h4 class="name">Malaysia</h4>
                                {{-- <span class="designation">President of Sales</span> --}}
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>--</span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="testimonial-block-five">
                        <div class="inner-box">
                            <div class="info-box">
                                <div class="image-box">
                                    <figure class="thumb"><img src="{{ asset('assets/data/sflag2.png') }}"
                                            alt="" style="width:60px;height:60px;"></figure>
                                    {{--  --}}
                                </div>
                                <h4 class="name">Singapore</h4>
                                {{-- <span class="designation">President of Sales</span> --}}
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>--</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="testimonial-block-five">
                        <div class="inner-box">
                            <div class="info-box">
                                <div class="image-box">
                                    <figure class="thumb"><img src="{{ asset('assets/data/jflag2.png') }}"
                                            alt="" style="width:60px;height:60px;"></figure>
                                    {{--  --}}
                                </div>
                                <h4 class="name">Japan</h4>
                                {{-- <span class="designation">President of Sales</span> --}}
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>--</span>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- Partnership --}}
    <section class="testimonial-section ">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">Our Partnerships</span>
                <h3>Who's Hiring With Us </h3>
            </div>


            <style>
                .box-shadow {
                    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
                }
            </style>

            <div class="row">

                <div class="col-md-2 mb-20 col-lg-2 col-sm-12 d-flex justify-content-center">
                    <div class="inner-box box-shadow" style="width: 100%; padding: 35px;">
                        <figure class="thumb">
                            <img src="{{ asset('assets/data/p1.png') }}" alt=""
                                style="width: 100%; height: 100px; object-fit: contain;">
                        </figure>
                    </div>
                </div>


                <div class="col-md-2 mb-20 col-lg-2 col-sm-12 d-flex justify-content-center">
                    <div class="inner-box box-shadow" style="width: 100%; padding: 35px;">
                        <figure class="thumb">
                            <img src="{{ asset('assets/data/p2.jpeg') }}" alt=""
                                style="width: 100%; height: 100px; object-fit: contain;">
                        </figure>
                    </div>
                </div>

                <div class="col-md-2 mb-20 col-lg-2 col-sm-12 d-flex justify-content-center">
                    <div class="inner-box box-shadow" style="width: 100%; padding: 35px;">
                        <figure class="thumb">
                            <img src="{{ asset('assets/data/p3.png') }}" alt=""
                                style="width: 100%; height: 100px; object-fit: contain;">
                        </figure>
                    </div>
                </div>

                <div class="col-md-2 mb-20 col-lg-2 col-sm-12 d-flex justify-content-center">
                    <div class="inner-box box-shadow" style="width: 100%; padding: 35px;">
                        <figure class="thumb">
                            <img src="{{ asset('assets/data/p3.jpeg') }}" alt=""
                                style="width: 100%; height: 100px; object-fit: contain;">
                        </figure>
                    </div>
                </div>
                <div class="col-md-2 mb-20 col-lg-2 col-sm-12 d-flex justify-content-center">
                    <div class="inner-box box-shadow" style="width: 100%; padding: 35px;">
                        <figure class="thumb">
                            <img src="{{ asset('assets/data/p4.png') }}" alt=""
                                style="width: 100%; height: 100px; object-fit: contain;">
                        </figure>
                    </div>
                </div>
                <div class="col-md-2 mb-20 col-lg-2 col-sm-12 d-flex justify-content-center">
                    <div class="inner-box box-shadow" style="width: 100%; padding: 35px;">
                        <figure class="thumb">
                            <img src="{{ asset('assets/data/p5.png') }}" alt=""
                                style="width: 100%; height: 100px; object-fit: contain;">
                        </figure>
                    </div>
                </div>
                <div class="col-md-2 mb-20 col-lg-2 col-sm-12 d-flex justify-content-center">
                    <div class="inner-box box-shadow" style="width: 100%; padding: 35px;">
                        <figure class="thumb">
                            <img src="{{ asset('assets/data/p6.png') }}" alt=""
                                style="width: 100%; height: 100px; object-fit: contain;">
                        </figure>
                    </div>
                </div>
                <div class="col-md-2 mb-20 col-lg-2 col-sm-12 d-flex justify-content-center">
                    <div class="inner-box box-shadow" style="width: 100%; padding: 35px;">
                        <figure class="thumb">
                            <img src="{{ asset('assets/data/p7.png') }}" alt=""
                                style="width: 100%; height: 100px; object-fit: contain;">
                        </figure>
                    </div>
                </div>
                <div class="col-md-2 mb-20 col-lg-2 col-sm-12 d-flex justify-content-center">
                    <div class="inner-box box-shadow" style="width: 100%; padding: 35px;">
                        <figure class="thumb">
                            <img src="{{ asset('assets/data/p8.png') }}" alt=""
                                style="width: 100%; height: 100px; object-fit: contain;">
                        </figure>
                    </div>
                </div>
                <div class="col-md-2 mb-20 col-lg-2 col-sm-12 d-flex justify-content-center">
                    <div class="inner-box box-shadow" style="width: 100%; padding: 35px;">
                        <figure class="thumb">
                            <img src="{{ asset('assets/data/p9.png') }}" alt=""
                                style="width: 100%; height: 100px; object-fit: contain;">
                        </figure>
                    </div>
                </div>
                <div class="col-md-2 mb-20 col-lg-2 col-sm-12 d-flex justify-content-center">
                    <div class="inner-box box-shadow" style="width: 100%; padding: 35px;">
                        <figure class="thumb">
                            <img src="{{ asset('assets/data/p10.png') }}" alt=""
                                style="width: 100%; height: 100px; object-fit: contain;">
                        </figure>
                    </div>
                </div>
                <div class="col-md-2 mb-20 col-lg-2 col-sm-12 d-flex justify-content-center">
                    <div class="inner-box box-shadow" style="width: 100%; padding: 35px;">
                        <figure class="thumb">
                            <img src="{{ asset('assets/data/p11.png') }}" alt=""
                                style="width: 100%; height: 100px; object-fit: contain;">
                        </figure>
                    </div>
                </div>
                <div class="col-md-2 mb-20 col-lg-2 col-sm-12 d-flex justify-content-center">
                    <div class="inner-box box-shadow" style="width: 100%; padding: 35px;">
                        <figure class="thumb">
                            <img src="{{ asset('assets/data/p12.png') }}" alt=""
                                style="width: 100%; height: 100px; object-fit: contain;">
                        </figure>
                    </div>
                </div>
                <div class="col-md-2 mb-20 col-lg-2 col-sm-12 d-flex justify-content-center">
                    <div class="inner-box box-shadow" style="width: 100%; padding: 35px;">
                        <figure class="thumb">
                            <img src="{{ asset('assets/data/p13.png') }}" alt=""
                                style="width: 100%; height: 100px; object-fit: contain;">
                        </figure>
                    </div>
                </div>
                <div class="col-md-2 mb-20 col-lg-2 col-sm-12 d-flex justify-content-center">
                    <div class="inner-box box-shadow" style="width: 100%; padding: 35px;">
                        <figure class="thumb">
                            <img src="{{ asset('assets/data/p15.png') }}" alt=""
                                style="width: 100%; height: 100px; object-fit: contain;">
                        </figure>
                    </div>
                </div>


            </div>
        </div>
    </section>

    {{-- Newsletter short --}}
    <section class="subscribe-section-two">
        <div class="auto-container">
            <div class="row">
                <!-- content-column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-lg-2">
                    <div class="inner-column wow fadeInRight">
                        <div class="sec-title light">
                            <span class="sub-title">newsLetter</span>
                            <h2>Subscribe To Our <br>Newsletter</h2>
                            <div class="text">It is a long established fact that a reader will be distracted by the
                                <br>readable content of a page when looking at its layout
                            </div>
                        </div>

                        <div class="subscribe-form-two">
                            <form method="post" action="{{ route('adminsubscriber.store') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Enter Your Email" required>
                                    <button class="theme-btn btn-style-one" type="submit" ><span
                                            class="btn-title">Subscribe</span></button>
                                </div>
                            </form>
                            {{-- <form method="post" action="{{ route('adminsubscriber.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Enter your email to subscribe:</label>
                                    <input type="email" name="email" required>
                                    <button type="submit">Subscribe</button>
                                </div>
                            </form> --}}
                        </div>
                    </div>
                </div>
                <!-- image-column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image wow zoomIn"><a href="#"><img
                                        src="{{ asset('assets/images/resource/pana.png') }}" alt=""></a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    {{-- Update News --}}
    <section class="news-section-ten pt-0">
        <div class="auto-container">
            <div class="sec-title v3 text-center">
                <span class="sub-title">blogs and news</span>
                <h4 style="font-family:cursive">Enjoy you daily life with us through the most valuable thing</h4>
                {{-- <a href="news-grid.html" class="theme-btn btn-style-one read-more"><span class="btn-title">more blogs <i
                            class="fa fa-arrow-right"></i></span></a> --}}
            </div>

            <!-- news slider -->
            <div class="row">
                <!-- News Block -->
                <div class="news-block-ten col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <video controls width="100%" height="100%">
                                    <source src="{{ asset('data/blog1.mp4') }}" type="video/mp4">


                                </video>
                            </figure>
                            <span class="date">14 Jan 2020</span>
                        </div>
                        <div class="content-box">
                            <ul class="post-meta">
                                <li><i class="fa fa-user"></i>By admin</li>
                                <li><i class="fa fa-comments"></i>Million House</li>
                            </ul>
                            <h4 class="title"><a href="" style="color:#09096e;font-size:20px;">Travels
                                    Activities</a></h4>
                            <div class="text">

                            </div>

                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block-ten col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <video controls width="100%" height="100%">
                                    <source src="{{ asset('data/blog2.mp4') }}" type="video/mp4">


                                </video>
                            </figure>
                            <span class="date">24 Sep 2019</span>
                        </div>
                        <div class="content-box">
                            <ul class="post-meta">
                                <li><i class="fa fa-user"></i>By admin</li>
                                <li><i class="fa fa-comments"></i>Million House</li>
                            </ul>
                            <h5 class="title" style="color:#09096e;font-size:20px;"><a href="">Travels
                                    Activities</a></h5>
                            <div class="text">

                            </div>

                        </div>
                    </div>
                </div>
                <div class="news-block-ten col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <video controls width="100%" height="100%">
                                    <source src="{{ asset('data/blog3.mp4') }}" type="video/mp4">


                                </video>
                            </figure>
                            <span class="date">24 Sep 2019</span>
                        </div>
                        <div class="content-box">
                            <ul class="post-meta">
                                <li><i class="fa fa-user"></i>By admin</li>
                                <li><i class="fa fa-comments"></i>Million House</li>
                            </ul>
                            <h5 class="title" style="color:#09096e;font-size:20px;"><a href="">Travels
                                    Activities</a></h5>
                            <div class="text">

                            </div>

                        </div>
                    </div>
                </div>
                <div class="news-block-ten col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <video controls width="100%" height="100%">
                                    <source src="{{ asset('data/blog4.mp4') }}" type="video/mp4">


                                </video>
                            </figure>
                            <span class="date">24 Sep 2019</span>
                        </div>
                        <div class="content-box">
                            <ul class="post-meta">
                                <li><i class="fa fa-user"></i>By admin</li>
                                <li><i class="fa fa-comments"></i>Million House</li>
                            </ul>
                            <h5 class="title" style="color:#09096e;font-size:20px;"><a href="">Travels
                                    Activities</a></h5>
                            <div class="text">

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

