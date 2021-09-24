<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>{{config('app.name')}}</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="Felix Website">
  <meta name="author" content="Felix Mgeni">
  <meta name="keywords" content="">
  <link rel="icon" href="{{url('/')}}/assets/img/favicon.png">
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
            <li class="width1 wow zoomIn" data-wow-duration="1000ms"><a href="{{url('/')}}/assets/img/gallery1.jpg" data-group="set1"
                title="" class="html5lightbox"><img src="{{url('/')}}/assets/img/gallery1.jpg" alt=""></a></li>
            <li class="width2 wow zoomIn" data-wow-duration="1000ms"><a href="{{url('/')}}/assets/img/gallery2.jpg" data-group="set1"
                title="" class="html5lightbox"><img src="{{url('/')}}/assets/img/gallery2.jpg" alt=""></a></li>
            <li class="width3 wow zoomIn" data-wow-duration="1000ms"><a href="{{url('/')}}/assets/img/gallery4.jpg" data-group="set1"
                title="" class="html5lightbox"><img src="{{url('/')}}/assets/img/gallery4.jpg" alt=""></a></li>
            <li class="width4 wow zoomIn" data-wow-duration="1000ms"><a href="{{url('/')}}/assets/img/gallery6.jpg" data-group="set1"
                title="" class="html5lightbox"><img src="{{url('/')}}/assets/img/gallery6.jpg" alt=""></a></li>
            <li class="width5 wow zoomIn" data-wow-duration="1000ms"><a href="{{url('/')}}/assets/img/gallery8.jpg" data-group="set1"
                title="" class="html5lightbox"><img src="{{url('/')}}/assets/img/gallery8.jpg" alt=""></a></li>
            <li class="width6 wow zoomIn" data-wow-duration="1000ms"><a href="{{url('/')}}/assets/img/gallery7.jpg" data-group="set1"
                title="" class="html5lightbox"><img src="{{url('/')}}/assets/img/gallery7.jpg" alt=""></a></li>
            <li class="width7 wow zoomIn" data-wow-duration="1000ms"><a href="{{url('/')}}/assets/img/gallery9.jpg" data-group="set1"
                title="" class="html5lightbox"><img src="{{url('/')}}/assets/img/gallery9.jpg" alt=""></a></li>
            <li class="width8 wow zoomIn" data-wow-duration="1000ms"><a href="{{url('/')}}/assets/img/gallery10.jpg"
                data-group="set1" title="" class="html5lightbox"><img src="{{url('/')}}/assets/img/gallery10.jpg" alt=""></a></li>
            <li class="width9 wow zoomIn" data-wow-duration="1000ms"><a href="{{url('/')}}/assets/img/gallery3.jpg" data-group="set1"
                title="" class="html5lightbox"><img src="{{url('/')}}/assets/img/gallery3.jpg" alt=""></a></li>
            <li class="width10 wow zoomIn" data-wow-duration="1000ms"><a href="{{url('/')}}/assets/img/gallery5.jpg"
                data-group="set1" title="" class="html5lightbox"><img src="{{url('/')}}/assets/img/gallery5.jpg" alt=""></a></li>
          </ul>
        </div><!-- abt-img end-->
      </div>
    </section>
    <!--about-us-section end-->
    <section class="classes-section">
      <div class="container">
        <div class="sec-title">
          <h2>Our Classes</h2>
          <p>Nam mattis felis id sodales rutrum. Nulla ornare tristique mauris, a laoreet erat ornare sit amet. Nulla
            sagittis faucibus lacus</p>
        </div>
        <!--sec-title end-->
        <div class="classes-sec">
          <div class="row classes-carousel">
            <div class="col-lg-3">
              <div class="classes-col wow fadeInUp" data-wow-duration="1000ms">
                <div class="class-thumb"><img src="{{url('/')}}/assets/img/img1.jpg" alt="" class="w-100"> <a href="contacts.html"
                    title="" class="crt-btn"><img src="{{url('/')}}/assets/img/icon10.png" alt=""></a></div>
                <div class="class-info">
                  <h3><a href="class-single.html" title="">Basic English Speaking and Grammar</a></h3>
                  <span>Mon-Fri</span> <span>10 AM - 12 AM</span>
                  <div class="d-flex flex-wrap align-items-center">
                    <div class="posted-by"><img src="{{url('/')}}/assets/img/ico.png" alt=""> <a href="#" title="">Amanda Kern</a>
                    </div><strong class="price">$45</strong>
                  </div>
                </div>
              </div>
              <!--classes-col end-->
            </div>
            <div class="col-lg-3">
              <div class="classes-col wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms">
                <div class="class-thumb"><img src="{{url('/')}}/assets/img/img2.jpg" alt="" class="w-100"> <a href="contacts.html"
                    title="" class="crt-btn"><img src="{{url('/')}}/assets/img/icon10.png" alt=""></a></div>
                <div class="class-info">
                  <h3><a href="class-single.html" title="">Natural Sciences & Mathematics Courses</a></h3>
                  <span>Mon-Fri</span> <span>10 AM - 12 AM</span>
                  <div class="d-flex flex-wrap align-items-center">
                    <div class="posted-by"><img src="{{url('/')}}/assets/img/ico.png" alt=""> <a href="#" title="">Gypsy Hardinge</a>
                    </div><strong class="price">$67</strong>
                  </div>
                </div>
              </div>
              <!--classes-col end-->
            </div>
            <div class="col-lg-3">
              <div class="classes-col wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
                <div class="class-thumb"><img src="{{url('/')}}/assets/img/img3.jpg" alt="" class="w-100"> <a href="contacts.html"
                    title="" class="crt-btn"><img src="{{url('/')}}/assets/img/icon10.png" alt=""></a></div>
                <div class="class-info">
                  <h3><a href="class-single.html" title="">Environmental Studies & Earth Sciences</a></h3>
                  <span>Mon-Fri</span> <span>10 AM - 12 AM</span>
                  <div class="d-flex flex-wrap align-items-center">
                    <div class="posted-by"><img src="{{url('/')}}/assets/img/ico.png" alt=""> <a href="#" title="">Margje Jutten</a>
                    </div><strong class="price">$89</strong>
                  </div>
                </div>
              </div>
              <!--classes-col end-->
            </div>
            <div class="col-lg-3">
              <div class="classes-col wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="class-thumb"><img src="{{url('/')}}/assets/img/img4.jpg" alt="" class="w-100"> <a href="contacts.html"
                    title="" class="crt-btn"><img src="{{url('/')}}/assets/img/icon10.png" alt=""></a></div>
                <div class="class-info">
                  <h3><a href="class-single.html" title="">Hospitality, Leisure & Sports Courses</a></h3>
                  <span>Mon-Fri</span> <span>10 AM - 12 AM</span>
                  <div class="d-flex flex-wrap align-items-center">
                    <div class="posted-by"><img src="{{url('/')}}/assets/img/ico.png" alt=""> <a href="#" title="">Hubert Franck</a>
                    </div><strong class="price">$67</strong>
                  </div>
                </div>
              </div>
              <!--classes-col end-->
            </div>
            <div class="col-lg-3">
              <div class="classes-col">
                <div class="class-thumb"><img src="{{url('/')}}/assets/img/img1.jpg" alt="" class="w-100"> <a href="contacts.html"
                    title="" class="crt-btn"><img src="{{url('/')}}/assets/img/icon10.png" alt=""></a></div>
                <div class="class-info">
                  <h3><a href="class-single.html" title="">Basic English Speaking and Grammar</a></h3>
                  <span>Mon-Fri</span> <span>10 AM - 12 AM</span>
                  <div class="d-flex flex-wrap align-items-center">
                    <div class="posted-by"><img src="{{url('/')}}/assets/img/ico.png" alt=""> <a href="#" title="">Amanda Kern</a>
                    </div><strong class="price">$45</strong>
                  </div>
                </div>
              </div>
              <!--classes-col end-->
            </div>
            <div class="col-lg-3">
              <div class="classes-col">
                <div class="class-thumb"><img src="{{url('/')}}/assets/img/img2.jpg" alt="" class="w-100"> <a href="contacts.html"
                    title="" class="crt-btn"><img src="{{url('/')}}/assets/img/icon10.png" alt=""></a></div>
                <div class="class-info">
                  <h3><a href="class-single.html" title="">Natural Sciences & Mathematics Courses</a></h3>
                  <span>Mon-Fri</span> <span>10 AM - 12 AM</span>
                  <div class="d-flex flex-wrap align-items-center">
                    <div class="posted-by"><img src="{{url('/')}}/assets/img/ico.png" alt=""> <a href="#" title="">Gypsy Hardinge</a>
                    </div><strong class="price">$67</strong>
                  </div>
                </div>
              </div>
              <!--classes-col end-->
            </div>
            <div class="col-lg-3">
              <div class="classes-col">
                <div class="class-thumb"><img src="{{url('/')}}/assets/img/img3.jpg" alt="" class="w-100"> <a href="contacts.html"
                    title="" class="crt-btn"><img src="{{url('/')}}/assets/img/icon10.png" alt=""></a></div>
                <div class="class-info">
                  <h3><a href="class-single.html" title="">Environmental Studies & Earth Sciences</a></h3>
                  <span>Mon-Fri</span> <span>10 AM - 12 AM</span>
                  <div class="d-flex flex-wrap align-items-center">
                    <div class="posted-by"><img src="{{url('/')}}/assets/img/ico.png" alt=""> <a href="#" title="">Margje Jutten</a>
                    </div><strong class="price">$89</strong>
                  </div>
                </div>
              </div>
              <!--classes-col end-->
            </div>
            <div class="col-lg-3">
              <div class="classes-col">
                <div class="class-thumb"><img src="{{url('/')}}/assets/img/img4.jpg" alt="" class="w-100"> <a href="contacts.html"
                    title="" class="crt-btn"><img src="{{url('/')}}/assets/img/icon10.png" alt=""></a></div>
                <div class="class-info">
                  <h3><a href="class-single.html" title="">Hospitality, Leisure & Sports Courses</a></h3>
                  <span>Mon-Fri</span> <span>10 AM - 12 AM</span>
                  <div class="d-flex flex-wrap align-items-center">
                    <div class="posted-by"><img src="{{url('/')}}/assets/img/ico.png" alt=""> <a href="#" title="">Hubert Franck</a>
                    </div><strong class="price">$67</strong>
                  </div>
                </div>
              </div>
              <!--classes-col end-->
            </div>
          </div>
          <div class="lnk-dv text-center"><a href="classes.html" title="" class="btn-default">Classes <i
                class="fa fa-long-arrow-alt-right"></i></a></div>
        </div>
        <!--classes-sec end-->
      </div>
    </section>
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
                <div class="teacher-img"><img src="{{url('/')}}/assets/img/img5.jpg" alt="" class="w-100">
                  <div class="sc-div">
                    <ul>
                      <li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
                      <li><a href="#" title=""><i class="fab fa-linkedin-in"></i></a></li>
                      <li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
                    </ul><span><img src="{{url('/')}}/assets/img/plus.png" alt=""></span>
                  </div>
                </div>
                <div class="teacher-info">
                  <h3><a href="teacher-single.html" title="">Polina Kerston</a></h3><span>English Teacher</span>
                </div>
              </div>
              <!--teacher end-->
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
              <div class="teacher">
                <div class="teacher-img"><img src="{{url('/')}}/assets/img/img6.jpg" alt="" class="w-100">
                  <div class="sc-div">
                    <ul>
                      <li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
                      <li><a href="#" title=""><i class="fab fa-linkedin-in"></i></a></li>
                      <li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
                    </ul><span><img src="{{url('/')}}/assets/img/plus.png" alt=""></span>
                  </div>
                </div>
                <div class="teacher-info">
                  <h3><a href="teacher-single.html" title="">Faadi Al Rahman</a></h3><span>Instructor</span>
                </div>
              </div>
              <!--teacher end-->
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
              <div class="teacher">
                <div class="teacher-img"><img src="{{url('/')}}/assets/img/img7.jpg" alt="" class="w-100">
                  <div class="sc-div">
                    <ul>
                      <li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
                      <li><a href="#" title=""><i class="fab fa-linkedin-in"></i></a></li>
                      <li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
                    </ul><span><img src="{{url('/')}}/assets/img/plus.png" alt=""></span>
                  </div>
                </div>
                <div class="teacher-info">
                  <h3><a href="teacher-single.html" title="">Chikelu Obasea</a></h3><span>Art Teacher</span>
                </div>
              </div>
              <!--teacher end-->
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
              <div class="teacher">
                <div class="teacher-img"><img src="{{url('/')}}/assets/img/img8.jpg" alt="" class="w-100">
                  <div class="sc-div">
                    <ul>
                      <li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
                      <li><a href="#" title=""><i class="fab fa-linkedin-in"></i></a></li>
                      <li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
                    </ul><span><img src="{{url('/')}}/assets/img/plus.png" alt=""></span>
                  </div>
                </div>
                <div class="teacher-info">
                  <h3><a href="teacher-single.html" title="">Katayama Fumiki</a></h3><span>Teacher</span>
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
                <h2>Find Your Course</h2>
                <p>ullam fringilla ipsum sed enim scelerisque, ac porttitor libero egestas. Donec iaculis nisi eget
                  bibendum efficitur. Lorem ipsum dolor sit</p>
                <h3><img src="{{url('/')}}/assets/img/icon11.png" alt="">Call: <strong>+2 342 5446 67</strong></h3>
              </div>
              <!--sec-title end-->
              <div class="course-img"><img src="{{url('/')}}/assets/img/course-img.png" alt=""></div>
              <!--course-img end-->
            </div>
            <!--find-course end-->
          </div>
          <div class="col-lg-6">
            <div class="courses-list">
              <div class="course-card wow fadeInLeft" data-wow-duration="1000ms">
                <div class="d-flex flex-wrap align-items-center">
                  <ul class="course-meta">
                    <li><img src="{{url('/')}}/assets/img/icon12.png" alt=""> 29/07/2020</li>
                    <li>11AM to 15PM</li>
                  </ul><span>FREE</span>
                </div>
                <h3><a href="event-single.html" title="">Digital Transformation Conference</a></h3>
                <div class="d-flex flex-wrap">
                  <div class="posted-by"><img src="{{url('/')}}/assets/img/ico2.png" alt=""> <a href="#" title="">Amanda Kern</a>
                  </div><span class="locat"><img src="{{url('/')}}/assets/img/loct.png" alt="">43 castle road 517 district</span>
                </div>
              </div>
              <!--course-card end-->
              <div class="course-card wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="400ms">
                <div class="d-flex flex-wrap align-items-center">
                  <ul class="course-meta">
                    <li><img src="{{url('/')}}/assets/img/icon12.png" alt=""> 29/07/2020</li>
                    <li>11AM to 15PM</li>
                  </ul><span>$16</span>
                </div>
                <h3><a href="event-single.html" title="">Environment conference</a></h3>
                <div class="d-flex flex-wrap">
                  <div class="posted-by"><img src="{{url('/')}}/assets/img/ico2.png" alt=""> <a href="#" title="">Cvita
                      Doleschall</a></div><span class="locat"><img src="{{url('/')}}/assets/img/loct.png" alt="">43 castle road 517
                    district</span>
                </div>
              </div>
              <!--course-card end-->
              <div class="course-card wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="d-flex flex-wrap align-items-center">
                  <ul class="course-meta">
                    <li><img src="{{url('/')}}/assets/img/icon12.png" alt=""> 29/07/2020</li>
                    <li>11AM to 15PM</li>
                  </ul><span>$8</span>
                </div>
                <h3><a href="event-single.html" title="">Campus clean workshop</a></h3>
                <div class="d-flex flex-wrap">
                  <div class="posted-by"><img src="{{url('/')}}/assets/img/ico2.png" alt=""> <a href="#" title="">Helena Brauer</a>
                  </div><span class="locat"><img src="{{url('/')}}/assets/img/loct.png" alt="">43 castle road 517 district</span>
                </div>
              </div>
              <!--course-card end-->
            </div>
            <!--courses-list end--> <a href="events.html" title="" class="all-btn">All Events <i
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
                <div class="blog-thumbnail"><img src="{{url('/')}}/assets/img/blog1.jpg" alt="" class="w-100"> <span
                    class="category">English</span></div>
                <div class="blog-info">
                  <ul class="meta">
                    <li><a href="#" title="">17/09/2020</a></li>
                    <li><a href="#" title="">by Admin</a></li>
                    <li><img src="{{url('/')}}/assets/img/icon13.png" alt=""><a href="#" title="">Teachers,</a><a href="#" title="">
                        School</a></li>
                  </ul>
                  <h3><a href="post.html" title="">Campus clean workshop</a></h3>
                  <p>Nam mattis felis id sodales rutrum. Nulla ornare tristique mauris, a laoreet erat ornare sit amet
                  </p><a href="post.html" title="" class="read-more">Read <i class="fa fa-long-arrow-alt-right"></i></a>
                </div>
              </div>
              <!--blog-post end-->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="blog-post">
                <div class="blog-thumbnail"><img src="{{url('/')}}/assets/img/blog2.jpg" alt="" class="w-100"> <span
                    class="category">English</span></div>
                <div class="blog-info">
                  <ul class="meta">
                    <li><a href="#" title="">17/09/2020</a></li>
                    <li><a href="#" title="">by Admin</a></li>
                    <li><img src="{{url('/')}}/assets/img/icon13.png" alt=""><a href="#" title="">Teachers,</a><a href="#" title="">
                        School</a></li>
                  </ul>
                  <h3><a href="post.html" title="">Campus clean workshop</a></h3>
                  <p>Nam mattis felis id sodales rutrum. Nulla ornare tristique mauris, a laoreet erat ornare sit amet
                  </p><a href="post.html" title="" class="read-more">Read <i class="fa fa-long-arrow-alt-right"></i></a>
                </div>
              </div>
              <!--blog-post end-->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="blog-post">
                <div class="blog-thumbnail"><img src="{{url('/')}}/assets/img/blog3.jpg" alt="" class="w-100"> <span
                    class="category">English</span></div>
                <div class="blog-info">
                  <ul class="meta">
                    <li><a href="#" title="">17/09/2020</a></li>
                    <li><a href="#" title="">by Admin</a></li>
                    <li><img src="{{url('/')}}/assets/img/icon13.png" alt=""><a href="#" title="">Teachers,</a><a href="#" title="">
                        School</a></li>
                  </ul>
                  <h3><a href="post.html" title="">Campus clean workshop</a></h3>
                  <p>Nam mattis felis id sodales rutrum. Nulla ornare tristique mauris, a laoreet erat ornare sit amet
                  </p><a href="post.html" title="" class="read-more">Read <i class="fa fa-long-arrow-alt-right"></i></a>
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
    <section class="newsletter-section">
      <div class="container">
        <div class="newsletter-sec">
          <div class="row align-items-center">
            <div class="col-lg-4">
              <div class="newsz-ltr-text">
                <h2>Join us<br>and stay tuned!</h2><a href="contacts.html" title="" class="btn-default">Join Us <i
                    class="fa fa-long-arrow-alt-right"></i></a>
              </div>
              <!--newsz-ltr-text end-->
            </div>
            <div class="col-lg-8">
              <form class="newsletter-form">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group"><input type="text" name="name" placeholder="Name"></div>
                    <!--form-group end-->
                  </div>
                  <div class="col-md-4">
                    <div class="form-group"><input type="email" name="email" placeholder="Email"></div>
                    <!--form-group end-->
                  </div>
                  <div class="col-md-4">
                    <div class="form-group select-tg"><select>
                        <option>Class</option>
                        <option>Class</option>
                        <option>Class</option>
                        <option>Class</option>
                        <option>Class</option>
                        <option>Class</option>
                      </select></div>
                    <!--form-group end-->
                  </div>
                  <div class="col-md-12">
                    <div class="form-group"><textarea name="message" placeholder="Message"></textarea></div>
                    <!--form-group end-->
                  </div>
                </div>
              </form>
              <!--newsletter-form end-->
            </div>
          </div>
        </div>
        <!--newsletter-sec end-->
      </div>
    </section>
    <!--newsletter-sec end-->
    <footer>
      <div class="container">
        <div class="top-footer">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="widget widget-about"><img src="{{url('/')}}/assets/img/logo.png" alt="">
                <p>Vivamus porta efficitur nibh nec convallis. Vestibulum egestas eleifend justo. Ut tellus ipsum,
                  accumsan</p>
              </div>
              <!--widget-about end-->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="widget widget-contact">
                <ul class="contact-add">
                  <li>
                    <div class="contact-info"><img src="{{url('/')}}/assets/img/icon1.png" alt="">
                      <div class="contact-tt">
                        <h4>Call</h4><span>+2 342 5446 67</span>
                      </div>
                    </div>
                    <!--contact-info end-->
                  </li>
                  <li>
                    <div class="contact-info"><img src="{{url('/')}}/assets/img/icon2.png" alt="">
                      <div class="contact-tt">
                        <h4>Work Time</h4><span>Mon - Fri 8 AM - 5 PM</span>
                      </div>
                    </div>
                    <!--contact-info end-->
                  </li>
                  <li>
                    <div class="contact-info"><img src="{{url('/')}}/assets/img/icon3.png" alt="">
                      <div class="contact-tt">
                        <h4>Address</h4><span>Franklin St, Greenpoint Ave</span>
                      </div>
                    </div>
                    <!--contact-info end-->
                  </li>
                </ul>
              </div>
              <!--widget-contact end-->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="widget widget-links">
                <h3 class="widget-title">Quick Links</h3>
                <ul>
                  <li><a href="about.html" title="">About Us</a></li>
                  <li><a href="classes.html" title="">Our Classes</a></li>
                  <li><a href="teachers.html" title="">School Teachers</a></li>
                  <li><a href="events.html" title="">Recent Events</a></li>
                  <li><a href="blog.html" title="">Our News</a></li>
                  <li><a href="schedule.html" title="">Schedule</a></li>
                </ul>
              </div>
              <!--widget-links end-->
            </div>
          </div>
        </div>
        <!--top-footer end-->
        <div class="bottom-footer">
          <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <p>© Copyrights {{date('Y')}} {{config('app.name')}} All rights reserved</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <ul class="social-links">
                <li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" title=""><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!--bottom-footer end-->
      </div>
    </footer>
    <!--footer end-->
  </div>
  <script src="{{url('/')}}/assets/js/bundle.min.js"></script>
{{--  <script src="{{url('/')}}/assets/js/button.min.js"></script><!-- Global site tag (gtag.js) - Google Analytics -->--}}

</body>

</html>
