<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>{{config('app.name')}}</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="Daarul Arqam Primary and secondary School">
  <meta name="author" content="Felix Mgeni">
  <meta name="keywords" content="">
  <link rel="icon" href="{{url('/')}}/assets/img/icon.png">
  <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/css/main.min.css">
  <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/css/button.min.css">
</head>

<body>
  <div class="wrapper">
    <div class="main-section">
      @include('partials.header')
      <!--header end-->
      <div class="responsive-menu">
        <ul>
            @include('partials.menu')
        </ul>
      </div>
      <!--responsive-menu end-->
      <section class="main-banner">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 col-md-7">
              <div class="banner-text wow fadeInLeft" data-wow-duration="1000ms">
                <h2>The Smarter Way to Learn <span>Anything</span></h2>
                <p>Mauris malesuada enim eget blandit gravida. Duis hendrerit cursus turpis, id mollis est rutrum nec.
                  Sed interdum nisi id libero tincidunt, sit amet vestibulum tortor porttitor. Cras ligula lacus,
                  ullamcorper sed</p>
                <form class="search-form"><input type="text" name="search" placeholder="Search Class"> <button><i
                      class="fa fa-search"></i></button></form>
              </div>
            </div>
            <div class="col-lg-5 col-md-5">
              <div class="banner-img wow zoomIn" data-wow-duration="1000ms"><img src="{{url('/')}}/assets/img/banner-img.png" alt="">
              </div>
              <!--banner-img end-->
              <div class="elements-bg wow zoomIn" data-wow-duration="1000ms"></div>
            </div>
          </div>
        </div>
      </section>
      <!--main-banner end-->
      <h2 class="main-title">{{config('app.name')}}</h2>
    </div>
    <!--main-section end-->
    <section class="about-us-section">
      <div class="container">
        <div class="section-title text-center">
          <h2>Welcome to <span>{{config('app.name')}}</span></h2>
          <p>Nunc consectetur ex nunc, id porttitor leo semper eget. Vivamus interdum, mauris quis cursus sodales, urn
          </p>
        </div>
        <!--section-title end-->
        <div class="about-sec">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="abt-col wow fadeInUp" data-wow-duration="1000ms"><img src="{{url('/')}}/assets/img/icon5.png" alt="">
                  <h3>Awesome Teachers</h3>
                  <p>Vivamus interdum, mauris interdum quis curdum sodales</p>
                </div>
                <!--abt-col end-->
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="abt-col wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms"><img
                    src="{{url('/')}}/assets/img/icon7.png" alt="">
                  <h3>Global Certificate</h3>
                  <p>Pelleneget tespharetra que fringilla egugue id eget pharetra</p>
                </div>
                <!--abt-col end-->
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="abt-col wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms"><img
                    src="{{url('/')}}/assets/img/icon8.png" alt="">
                  <h3>Best Programm</h3>
                  <p>Etiam risus neque, volutpat vel laoreet a, finibus volutpat non</p>
                </div>
                <!--abt-col end-->
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="abt-col wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms"><img
                    src="{{url('/')}}/assets/img/icon9.png" alt="">
                  <h3>Student Support Service</h3>
                  <p>Mauris nec mi fequis ugiat, cursus tortor nec, pharetra tellus</p>
                </div>
                <!--abt-col end-->
              </div>
            </div>
          </div>
        </div>
        <!--about-rw end-->
        <div class="abt-img">
          <ul class="masonary">

            <li class="width1 wow zoomIn" data-wow-duration="1000ms">
                <a href="{{url('/')}}/assets/school/img (1).jpeg" data-group="set1"
                title="" class="html5lightbox"><img src="{{url('/')}}/assets/school/img (1).jpeg" alt=""></a></li>
            <li class="width2 wow zoomIn" data-wow-duration="1000ms">
                <a href="{{url('/')}}/assets/school/img (2).jpeg" data-group="set1"
                title="" class="html5lightbox"><img src="{{url('/')}}/assets/school/img (2).jpeg" alt=""></a></li>
            <li class="width3 wow zoomIn" data-wow-duration="1000ms">
                <a href="{{url('/')}}/assets/school/img (3).jpeg" data-group="set1"
                title="" class="html5lightbox"><img src="{{url('/')}}/assets/school/img (3).jpeg" alt=""></a></li>
            <li class="width4 wow zoomIn" data-wow-duration="1000ms">
                <a href="{{url('/')}}/assets/school/img (4).jpeg" data-group="set1"
                title="" class="html5lightbox"><img src="{{url('/')}}/assets/school/img (4).jpeg" alt=""></a></li>
            <li class="width5 wow zoomIn" data-wow-duration="1000ms">
                <a href="{{url('/')}}/assets/school/img (5).jpeg" data-group="set1"
                title="" class="html5lightbox"><img src="{{url('/')}}/assets/school/img (5).jpeg" alt=""></a></li>
            <li class="width6 wow zoomIn" data-wow-duration="1000ms">
                <a href="{{url('/')}}/assets/school/img (6).jpeg" data-group="set1"
                title="" class="html5lightbox"><img src="{{url('/')}}/assets/school/img (6).jpeg" alt=""></a></li>
            <li class="width7 wow zoomIn" data-wow-duration="1000ms">
                <a href="{{url('/')}}/assets/school/img (7).jpeg" data-group="set1"
                title="" class="html5lightbox"><img src="{{url('/')}}/assets/school/img (7).jpeg" alt=""></a></li>
            <li class="width8 wow zoomIn" data-wow-duration="1000ms">
                <a href="{{url('/')}}/assets/school/img (8).jpeg"
                data-group="set1" title="" class="html5lightbox"><img src="{{url('/')}}/assets/school/img (8).jpeg" alt=""></a></li>
            <li class="width9 wow zoomIn" data-wow-duration="1000ms">
                <a href="{{url('/')}}/assets/school/img (9).jpeg" data-group="set1"
                title="" class="html5lightbox"><img src="{{url('/')}}/assets/school/img (9).jpeg" alt=""></a></li>
            <li class="width10 wow zoomIn" data-wow-duration="1000ms">
                <a href="{{url('/')}}/assets/school/img (10).jpeg"
                data-group="set1" title="" class="html5lightbox"><img src="{{url('/')}}/assets/school/img (10).jpeg" alt=""></a></li>

          </ul>
        </div><!-- abt-img end-->
      </div>
    </section>
    <!--about-us-section end-->

    <!--classes-section end-->
    <section class="teachers-section">
      <div class="container">
        <div class="section-title text-center">
          <h2>Our Awesome<br>Teachers</h2>
          <p>Quisque id ultrices tellus, ac sodales ex. Cras nec ante viverra, bibendum justo eget, lacinia dui. Donec
            ligula ligula, elementum sit amet</p>
        </div>
        <!--section-title end-->
        <div class="teachers">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
              <div class="teacher">
                <div class="teacher-img"><img src="{{url('/')}}/assets/school/teacher/teacher1.jpg" alt="" class="w-100">
                  <div class="sc-div">
                    <ul>
                      <li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
                      <li><a href="#" title=""><i class="fab fa-linkedin-in"></i></a></li>
                      <li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
                    </ul><span><img src="{{url('/')}}/assets/img/plus.png" alt=""></span>
                  </div>
                </div>
                <div class="teacher-info">
                  <h3><a href="/teacher" title="">Polina Kerston</a></h3><span>English Teacher</span>
                </div>
              </div>
              <!--teacher end-->
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
              <div class="teacher">
                <div class="teacher-img"><img src="{{url('/')}}/assets/school/teacher/2.jpg" alt="" class="w-100">
                  <div class="sc-div">
                    <ul>
                      <li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
                      <li><a href="#" title=""><i class="fab fa-linkedin-in"></i></a></li>
                      <li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
                    </ul><span><img src="{{url('/')}}/assets/img/plus.png" alt=""></span>
                  </div>
                </div>
                <div class="teacher-info">
                  <h3><a href="/teacher" title="">Faadi Al Rahman</a></h3><span>Instructor</span>
                </div>
              </div>
              <!--teacher end-->
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
              <div class="teacher">
                <div class="teacher-img"><img src="{{url('/')}}/assets/school/teacher/3.jpg" alt="" class="w-100">
                  <div class="sc-div">
                    <ul>
                      <li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
                      <li><a href="#" title=""><i class="fab fa-linkedin-in"></i></a></li>
                      <li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
                    </ul><span><img src="{{url('/')}}/assets/img/plus.png" alt=""></span>
                  </div>
                </div>
                <div class="teacher-info">
                  <h3><a href="/teacher" title="">Chikelu Obasea</a></h3><span>Art Teacher</span>
                </div>
              </div>
              <!--teacher end-->
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
              <div class="teacher">
                <div class="teacher-img"><img src="{{url('/')}}/assets/school/teacher/4.jpg" alt="" class="w-100">
                  <div class="sc-div">
                    <ul>
                      <li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
                      <li><a href="#" title=""><i class="fab fa-linkedin-in"></i></a></li>
                      <li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
                    </ul><span><img src="{{url('/')}}/assets/img/plus.png" alt=""></span>
                  </div>
                </div>
                <div class="teacher-info">
                  <h3><a href="/teacher" title="">Katayama Fumiki</a></h3><span>Teacher</span>
                </div>
              </div>
              <!--teacher end-->
            </div>
          </div>
        </div>
        <!--teachers end-->
      </div>
    </section>
    <section class="course-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="find-course">
              <div class="sec-title">
                <h2>Join Us Today</h2>
                <p>ullam fringilla ipsum sed enim scelerisque, ac porttitor libero egestas. Donec iaculis nisi eget
                  bibendum efficitur. Lorem ipsum dolor sit</p>
                <h3><img src="{{url('/')}}/assets/img/icon11.png" alt="">Call: <strong>+255 654 204 781</strong></h3>
              </div>
              <!--sec-title end-->
              <div class="course-img"><img src="{{url('/')}}/assets/img/1.png" alt=""></div>
              <!--course-img end-->
            </div>
            <!--find-course end-->
          </div>
          <div class="col-lg-6">
            <div class="courses-list">
              <div class="course-card wow fadeInLeft" data-wow-duration="1000ms">
                <div class="d-flex flex-wrap align-items-center">
                  <ul class="course-meta">
                    <li><img src="{{url('/')}}/assets/img/icon12.png" alt=""> 29/07/2021</li>
                    <li>11AM to 15PM</li>
                  </ul>
                </div>
                <h3><a href="/event" title="">Serengeti Students Tour</a></h3>
                <div class="d-flex flex-wrap">
                  <div class="posted-by"><img src="{{url('/')}}/assets/img/ico2.png" alt=""> <a href="#" title="">Amanda Kern</a>
                  </div><span class="locat"><img src="{{url('/')}}/assets/img/loct.png" alt="">Manyara</span>
                </div>
              </div>
              <!--course-card end-->
              <div class="course-card wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="400ms">
                <div class="d-flex flex-wrap align-items-center">
                  <ul class="course-meta">
                    <li><img src="{{url('/')}}/assets/img/icon12.png" alt=""> 29/09/2021</li>
                    <li>11AM to 15PM</li>
                  </ul>
                </div>
                <h3><a href="/event" title="">Parents Day</a></h3>
                <div class="d-flex flex-wrap">
                  <div class="posted-by"><img src="{{url('/')}}/assets/img/ico2.png" alt=""> <a href="#" title="">Cvita
                      Doleschall</a></div><span class="locat"><img src="{{url('/')}}/assets/img/loct.png" alt="">
                    School Fanction Hall</span>
                </div>
              </div>
              <!--course-card end-->
              <div class="course-card wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="d-flex flex-wrap align-items-center">
                  <ul class="course-meta">
                    <li><img src="{{url('/')}}/assets/img/icon12.png" alt=""> 29/11/2021</li>
                    <li>11AM to 15PM</li>
                  </ul>
                </div>
                <h3><a href="/event" title="">School Closing Day</a></h3>
                <div class="d-flex flex-wrap">
                  <div class="posted-by"><img src="{{url('/')}}/assets/img/ico2.png" alt=""> <a href="#" title="">Helena Brauer</a>
                  </div><span class="locat"><img src="{{url('/')}}/assets/img/loct.png" alt="">School Assemble Ground</span>
                </div>
              </div>
              <!--course-card end-->
            </div>
            <!--courses-list end--> <a href="/events" title="" class="all-btn">All Events <i
                class="fa fa-long-arrow-alt-right"></i></a>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </section>
    <!--course-section end-->
    <section class="blog-section">
      <div class="container">
        <div class="section-title text-center">
          <h2>Recent News</h2>
          <p>Nam mattis felis id sodales rutrum. Nulla ornare tristique mauris, a laoreet erat ornare sit amet. Nulla
            sagittis faucibus lacusMorbi lorem sem, aliquet</p>
        </div>
        <!--section-title end-->
        <div class="blog-posts">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="blog-post">
                <div class="blog-thumbnail"><img src="{{url('/')}}/assets/school/events/karate.jpeg" alt="" class="w-100"> <span
                    class="category">English</span></div>
                <div class="blog-info">
                  <ul class="meta">
                    <li><a href="#" title="">17/09/2020</a></li>
                    <li><a href="#" title="">by Admin</a></li>
                    <li><img src="{{url('/')}}/assets/img/icon13.png" alt=""><a href="#" title="">Teachers,</a><a href="#" title="">
                        School</a></li>
                  </ul>
                  <h3><a href="/event" title="">Campus clean workshop</a></h3>
                  <p>Nam mattis felis id sodales rutrum. Nulla ornare tristique mauris, a laoreet erat ornare sit amet
                  </p><a href="/event" title="" class="read-more">Read <i class="fa fa-long-arrow-alt-right"></i></a>
                </div>
              </div>
              <!--blog-post end-->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="blog-post">
                <div class="blog-thumbnail"><img src="{{url('/')}}/assets/school/events/lab.jpeg" alt="" class="w-100"> <span
                    class="category">English</span></div>
                <div class="blog-info">
                  <ul class="meta">
                    <li><a href="#" title="">17/09/2020</a></li>
                    <li><a href="#" title="">by Admin</a></li>
                    <li><img src="{{url('/')}}/assets/img/icon13.png" alt=""><a href="#" title="">Teachers,</a><a href="#" title="">
                        School</a></li>
                  </ul>
                  <h3><a href="/event" title="">Campus clean workshop</a></h3>
                  <p>Nam mattis felis id sodales rutrum. Nulla ornare tristique mauris, a laoreet erat ornare sit amet
                  </p><a href="/event" title="" class="read-more">Read <i class="fa fa-long-arrow-alt-right"></i></a>
                </div>
              </div>
              <!--blog-post end-->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="blog-post">
                <div class="blog-thumbnail"><img src="{{url('/')}}/assets/school/events/swing.jpeg" alt="" class="w-100"> <span
                    class="category">English</span></div>
                <div class="blog-info">
                  <ul class="meta">
                    <li><a href="#" title="">17/09/2020</a></li>
                    <li><a href="#" title="">by Admin</a></li>
                    <li><img src="{{url('/')}}/assets/img/icon13.png" alt=""><a href="#" title="">Teachers,</a><a href="#" title="">
                        School</a></li>
                  </ul>
                  <h3><a href="/event" title="">Campus clean workshop</a></h3>
                  <p>Nam mattis felis id sodales rutrum. Nulla ornare tristique mauris, a laoreet erat ornare sit amet
                  </p><a href="/event" title="" class="read-more">Read <i class="fa fa-long-arrow-alt-right"></i></a>
                </div>
              </div>
              <!--blog-post end-->
            </div>
          </div>
        </div>
        <!--blog-posts end-->
      </div>
    </section>
    <!--blog-section end-->
    @include('partials.subscribe')
    <!--newsletter-sec end-->
      @include('partials.footer')
    <!--footer end-->
  </div>
  <script src="{{url('/')}}/assets/js/bundle.min.js"></script>
{{--  <script src="{{url('/')}}/assets/js/button.min.js"></script><!-- Global site tag (gtag.js) - Google Analytics -->--}}

</body>

</html>
