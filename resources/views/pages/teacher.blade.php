@extends('layouts.school')

@section('content')
    <section class="pager-section">
      <div class="container">
        <div class="pager-content text-center">
          <h2>Faadi Al Rahman</h2>
          <ul>
            <li><a href="#" title="">Home</a></li>
            <li><a href="#" title="">Classes</a></li>
            <li><span>Events</span></li>
          </ul>
        </div>
        <!--pager-content end-->
        <h2 class="page-titlee">{{config('app.name')}}</h2>
      </div>
    </section>
    <!--pager-section end-->
    <section class="page-content">
      <div class="container">
        <div class="teacher-single-page">
          <div class="row">
            <div class="col-lg-4">
              <div class="teacher-coly"><img style="border-radius: 10px" src="/assets/school/teacher/teacher1.jpg" alt="">
                <ul class="social-icons">
                  <li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#" title=""><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#" title=""><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
              </div>
              <!--teacher-coly end-->
            </div>
            <div class="col-lg-8">
              <div class="teacher-content">
                <h3>Instructor</h3>
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="rol-z"><img src="assets/img/ro1.png" alt="">
                      <div class="rol-info">
                        <h3>Phone</h3><span>+255 785 008 133</span>
                      </div>
                    </div>
                    <!--rol-z end-->
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="rol-z"><img src="assets/img/ro2.png" alt="">
                      <div class="rol-info">
                        <h3>Email</h3><span>
                              <a href="mailto:felix@luxtechtz.com"
                            class="__cf_email__"
                            data-cfemail="492728242c092d2624282027672a2624">faaidia@arqam.com</a></span>
                      </div>
                    </div>
                    <!--rol-z end-->
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="rol-z style2"><img src="assets/img/ro3.png" alt="">
                      <div class="rol-info">
                        <h3><a href="#" title="">Call Teacher<br>Now</a></h3>
                      </div>
                    </div>
                    <!--rol-z end-->
                  </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel venenatis felis. Fusce id lectus
                  sit amet nisi ornare ultricies. In sagittis lacinia lorem et tristique. Quisque mauris neque,
                  sollicitudin sit amet imperdiet in, scelerisque sit amet arcu. In vehicula sem eget nisi convallis, a
                  mattis orci imperdiet. Curabitur vitae sapien vel lectus sagittis consequat. Nullam enim velit,
                  dignissim vel viverra ac, eleifend ut tellus.</p>
                <ul class="tech-detils">
                  <li>
                    <h3>DOB</h3><span>15.03.1987</span>
                  </li>
                  <li>
                    <h3>Education</h3><span>Music School of Music Arts</span>
                  </li>
                  <li>
                    <h3>Experience</h3><span>10 years</span>
                  </li>
                </ul>
                <!--tech-detils end-->
                <div class="skills-tech">
                  <h3>Personal Skills</h3>
                  <div class="progess-row">
                    <h3>Teaching</h3>
                    <div class="progress">
                      <div class="progress-bar wow slideInLeft bg-clr1" data-wow-duration="1000ms" role="progressbar"
                        style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div><span>100%</span>
                  </div>
                  <div class="progess-row">
                    <h3>Speaking</h3>
                    <div class="progress">
                      <div class="progress-bar wow slideInLeft bg-clr2" role="progressbar" style="width: 80%"
                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div><span>80%</span>
                  </div>
                  <div class="progess-row">
                    <h3>Family Support</h3>
                    <div class="progress">
                      <div class="progress-bar wow slideInLeft bg-clr3" role="progressbar" style="width: 85%"
                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div><span>85%</span>
                  </div>
                  <div class="progess-row">
                    <h3>Children's Well-being</h3>
                    <div class="progress">
                      <div class="progress-bar wow slideInLeft bg-clr4" role="progressbar" style="width: 90%"
                        aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div><span>90%</span>
                  </div>
                </div>
                <!--skills-tech end-->
                <p>Quisque congue ultrices nibh, id consectetur velit consectetur ut. Suspendisse porttitor vulputate
                  imperdiet. Proin rhoncus, mauris sit amet consectetur laoreet, mauris mi volutpat urna, at molestie
                  urna libero quis leo. Pellentesque ut molestie nisi. Suspendisse ut nulla eleifend ligula vulputate
                  tincidunt sed eget orci.</p>
                <p>Pellentesque aliquam varius malesuada. Proin id massa vitae eros elementum egestas id sit amet elit.
                  Praesent convallis ligula ac urna rhoncus euismod. Vestibulum maximus luctus magna, in sollicitudin
                  lorem tincidunt id. Nunc aliquam nibh sagittis nibh luctus blandit. Quisque nec dignissim metus.
                  Suspendisse eget turpis ante. Fusce non iaculis sem.</p>
              </div>
              <!--teacher-content end-->
            </div>
          </div>
        </div>
        <!--teacher-single-page end-->
        <div class="teachers-section teacher-page">
          <div class="section-title text-center">
            <h2>Other Teachers</h2>
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
      </div>
    </section>
    <!--page-content end-->
    @include('partials.subscribe')
@endsection
