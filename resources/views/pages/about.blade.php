@extends('layouts.school')

@section('content')
    <!--responsive-menu end-->
    <section class="pager-section">
        <div class="container">
            <div class="pager-content text-center">
                <h2>About Us</h2>
                <ul>
                    <li><a href="#" title="">Home</a></li>
                    <li><span>About</span></li>
                </ul>
            </div>
            <!--pager-content end-->
            <h2 class="page-titlee">{{config('app.name')}}</h2>
        </div>
    </section>
    <!--pager-section end-->
    <section class="about-page-content">
        <div class="container">
            <div class="abt-page-row">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="section-title">
                            <h2>Welcome to<br><span>{{config('app.name')}}</span> Arqam Islamic Schools</h2>
                            <p class="mw-100">
                                DAARUL ARQAM ISLAMIC SCHOOLS is located at somangira ward in Kigamboni municipality,
                                Dar es salaam city. In one compound of  33 hectares,
                                there is a division of nursery, primary and secondary section
                                <br>
                                <br>
                                DAARUL ARQAM ISLAMIC SCHOOLS was founded in 2013 as a full-time private school, owned and operated by Shawwal Abdul-Aziz Msami, serving the Muslim community in the city of Dar-es-salaam and beyond offering nursery, primary and secondary education service.  Since its inception, DAARUL ARQAM ISLAMIC SCHOOLS has consistently grown year after year and has gained a reputation of becoming a leading Muslim educational institute which aims to instill an Islamic morale and a genuine desire of learning in each of its students.
                                <br>
                                <br>
                                DAARUL ARQAM ISLAMIC SCHOOLS provides an Islamic learning environment with a commitment of using modern day teaching pedagogy to cultivate an advanced and comprehensive academic program; fully compliant with the NECTA curriculum of studies.  .  It is our aim to empower our students by cultivating their interests and honing their academic skills.
                            </p><a href="/events" title="" class="btn-default">Classes <i
                                    class="fa fa-long-arrow-alt-right"></i></a>
                        </div>
                        <!--section-title end-->
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="avt-img"><img src="assets/img/abt3.png" alt=""></div>
                        <!--avt-img end-->
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="avt-img"><img src="assets/img/abt2.png" alt=""></div>
                        <!--avt-img end-->
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="act-inffo">
                            <span>ABOUT US</span>
                            <br>
                            <h2>Our Mission</h2>
                            <p>
                                To provide high standard education with special consideration to human bounties and producing the candidates to the expectation of their parents, community and the nation, equipped with good moral values who appreciate the purpose of their life
                            </p>
{{--                            <ul>--}}
{{--                                <li>Etiam ante nisl, maximus vitae sem non, dignissim</li>--}}
{{--                                <li>Donec blandit, sapien eu porttitor blandit</li>--}}
{{--                                <li>Sed at urna at massa viverra feugiat non</li>--}}
{{--                            </ul>--}}
                        </div>
                        <!--act-inffo end-->
                    </div>
                </div>
            </div>
            <!--abt-page-row end-->
        </div>
    </section>
    <!--about-page-content end-->
    <section class="benifit-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>Our Vision </h2>
                        <p>
                            To become a center that provides education from nursery to higher institution.
                        </p>
                        <a href="/contacts" title="" class="btn-default">Contacts <i
                                class="fa fa-long-arrow-alt-right"></i></a>
                    </div>
                    <!--section-title end-->
                </div>
                <div class="col-lg-6">
                    <div class="about-us-section p-0">
                        <div class="about-sec">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="abt-col"><img src="assets/img/icon5.png" alt="">
                                        <h3>Awesome Teachers</h3>
                                        <p>Vivamus interdum, mauris interdum quis curdum sodales</p>
                                    </div>
                                    <!--abt-col end-->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="abt-col"><img src="assets/img/icon7.png" alt="">
                                        <h3>Global Certificate</h3>
                                        <p>Pelleneget tespharetra que fringilla egugue id eget pharetra</p>
                                    </div>
                                    <!--abt-col end-->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="abt-col"><img src="assets/img/icon9.png" alt="">
                                        <h3>Student Support Service</h3>
                                        <p>Mauris nec mi fequis ugiat, cursus tortor nec, pharetra tellus</p>
                                    </div>
                                    <!--abt-col end-->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="abt-col"><img src="assets/img/icon8.png" alt="">
                                        <h3>Our Motto</h3>
                                        <p>QURAN, TAALUMA NA MAADILI</p>
                                    </div>
                                    <!--abt-col end-->
                                </div>
                            </div>
                        </div>
                        <!--about-rw end-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--benifit-section end-->
{{--    <section class="classes-section">--}}
{{--        <div class="container">--}}
{{--            <div class="sec-title">--}}
{{--                <h2 class="no-bg">Our Classes</h2>--}}
{{--                <p>Nam mattis felis id sodales rutrum. Nulla ornare tristique mauris, a laoreet erat ornare sit amet. Nulla--}}
{{--                    sagittis faucibus lacus</p>--}}
{{--            </div>--}}
{{--            <!--sec-title end-->--}}
{{--            <div class="classes-sec">--}}
{{--                <div class="row classes-carousel">--}}
{{--                    <div class="col-lg-3">--}}
{{--                        <div class="classes-col">--}}
{{--                            <div class="class-thumb"><img src="assets/img/img1.jpg" alt="" class="w-100"> <a href="#" title=""--}}
{{--                                                                                                             class="crt-btn"><img src="assets/img/icon10.png" alt=""></a></div>--}}
{{--                            <div class="class-info">--}}
{{--                                <h3><a href="#" title="">Basic English Speaking and Grammar</a></h3><span>Mon-Fri</span> <span>10 AM ---}}
{{--                    12 AM</span>--}}
{{--                                <div class="d-flex flex-wrap align-items-center">--}}
{{--                                    <div class="posted-by"><img src="assets/img/ico.png" alt=""> <a href="#" title="">Amanda Kern</a>--}}
{{--                                    </div><strong class="price">$45</strong>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--classes-col end-->--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3">--}}
{{--                        <div class="classes-col">--}}
{{--                            <div class="class-thumb"><img src="assets/img/img2.jpg" alt="" class="w-100"> <a href="#" title=""--}}
{{--                                                                                                             class="crt-btn"><img src="assets/img/icon10.png" alt=""></a></div>--}}
{{--                            <div class="class-info">--}}
{{--                                <h3><a href="#" title="">Natural Sciences & Mathematics Courses</a></h3><span>Mon-Fri</span> <span>10--}}
{{--                    AM - 12 AM</span>--}}
{{--                                <div class="d-flex flex-wrap align-items-center">--}}
{{--                                    <div class="posted-by"><img src="assets/img/ico.png" alt=""> <a href="#" title="">Gypsy Hardinge</a>--}}
{{--                                    </div><strong class="price">$67</strong>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--classes-col end-->--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3">--}}
{{--                        <div class="classes-col">--}}
{{--                            <div class="class-thumb"><img src="assets/img/img3.jpg" alt="" class="w-100"> <a href="#" title=""--}}
{{--                                                                                                             class="crt-btn"><img src="assets/img/icon10.png" alt=""></a></div>--}}
{{--                            <div class="class-info">--}}
{{--                                <h3><a href="class-single.html" title="">Environmental Studies & Earth Sciences</a></h3>--}}
{{--                                <span>Mon-Fri</span> <span>10 AM - 12 AM</span>--}}
{{--                                <div class="d-flex flex-wrap align-items-center">--}}
{{--                                    <div class="posted-by"><img src="assets/img/ico.png" alt=""> <a href="#" title="">Margje Jutten</a>--}}
{{--                                    </div><strong class="price">$89</strong>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--classes-col end-->--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3">--}}
{{--                        <div class="classes-col">--}}
{{--                            <div class="class-thumb"><img src="assets/img/img4.jpg" alt="" class="w-100"> <a href="#" title=""--}}
{{--                                                                                                             class="crt-btn"><img src="assets/img/icon10.png" alt=""></a></div>--}}
{{--                            <div class="class-info">--}}
{{--                                <h3><a href="class-single.html" title="">Hospitality, Leisure & Sports Courses</a></h3>--}}
{{--                                <span>Mon-Fri</span> <span>10 AM - 12 AM</span>--}}
{{--                                <div class="d-flex flex-wrap align-items-center">--}}
{{--                                    <div class="posted-by"><img src="assets/img/ico.png" alt=""> <a href="#" title="">Hubert Franck</a>--}}
{{--                                    </div><strong class="price">$67</strong>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--classes-col end-->--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3">--}}
{{--                        <div class="classes-col">--}}
{{--                            <div class="class-thumb"><img src="assets/img/img1.jpg" alt="" class="w-100"> <a href="#" title=""--}}
{{--                                                                                                             class="crt-btn"><img src="assets/img/icon10.png" alt=""></a></div>--}}
{{--                            <div class="class-info">--}}
{{--                                <h3><a href="class-single.html" title="">Basic English Speaking and Grammar</a></h3>--}}
{{--                                <span>Mon-Fri</span> <span>10 AM - 12 AM</span>--}}
{{--                                <div class="d-flex flex-wrap align-items-center">--}}
{{--                                    <div class="posted-by"><img src="assets/img/ico.png" alt=""> <a href="#" title="">Amanda Kern</a>--}}
{{--                                    </div><strong class="price">$45</strong>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--classes-col end-->--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3">--}}
{{--                        <div class="classes-col">--}}
{{--                            <div class="class-thumb"><img src="assets/img/img2.jpg" alt="" class="w-100"> <a href="#" title=""--}}
{{--                                                                                                             class="crt-btn"><img src="assets/img/icon10.png" alt=""></a></div>--}}
{{--                            <div class="class-info">--}}
{{--                                <h3><a href="class-single.html" title="">Natural Sciences & Mathematics Courses</a></h3>--}}
{{--                                <span>Mon-Fri</span> <span>10 AM - 12 AM</span>--}}
{{--                                <div class="d-flex flex-wrap align-items-center">--}}
{{--                                    <div class="posted-by"><img src="assets/img/ico.png" alt=""> <a href="#" title="">Gypsy Hardinge</a>--}}
{{--                                    </div><strong class="price">$67</strong>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--classes-col end-->--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3">--}}
{{--                        <div class="classes-col">--}}
{{--                            <div class="class-thumb"><img src="assets/img/img3.jpg" alt="" class="w-100"> <a href="#" title=""--}}
{{--                                                                                                             class="crt-btn"><img src="assets/img/icon10.png" alt=""></a></div>--}}
{{--                            <div class="class-info">--}}
{{--                                <h3><a href="class-single.html" title="">Environmental Studies & Earth Sciences</a></h3>--}}
{{--                                <span>Mon-Fri</span> <span>10 AM - 12 AM</span>--}}
{{--                                <div class="d-flex flex-wrap align-items-center">--}}
{{--                                    <div class="posted-by"><img src="assets/img/ico.png" alt=""> <a href="#" title="">Margje Jutten</a>--}}
{{--                                    </div><strong class="price">$89</strong>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--classes-col end-->--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3">--}}
{{--                        <div class="classes-col">--}}
{{--                            <div class="class-thumb"><img src="assets/img/img4.jpg" alt="" class="w-100"> <a href="#" title=""--}}
{{--                                                                                                             class="crt-btn"><img src="assets/img/icon10.png" alt=""></a></div>--}}
{{--                            <div class="class-info">--}}
{{--                                <h3><a href="class-single.html" title="">Hospitality, Leisure & Sports Courses</a></h3>--}}
{{--                                <span>Mon-Fri</span> <span>10 AM - 12 AM</span>--}}
{{--                                <div class="d-flex flex-wrap align-items-center">--}}
{{--                                    <div class="posted-by"><img src="assets/img/ico.png" alt=""> <a href="#" title="">Hubert Franck</a>--}}
{{--                                    </div><strong class="price">$67</strong>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--classes-col end-->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="lnk-dv text-center"><a href="classes.html" title="" class="btn-default">Classes <i--}}
{{--                            class="fa fa-long-arrow-alt-right"></i></a></div>--}}
{{--            </div>--}}
{{--            <!--classes-sec end-->--}}
{{--        </div>--}}
{{--    </section>--}}

    @include('partials.subscribe')

@endsection
