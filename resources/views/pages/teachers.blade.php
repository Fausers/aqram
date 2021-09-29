@extends('layouts.school')

@section('content')
    <!--responsive-menu end-->
    <section class="pager-section">
      <div class="container">
        <div class="pager-content text-center">
          <h2>Teachers</h2>
          <ul>
            <li><a href="#" title="">Home</a></li>
            <li><span>Teachers</span></li>
          </ul>
        </div>
        <!--pager-content end-->
        <h2 class="page-titlee">{{config('app.name')}}</h2>
      </div>
    </section>
    <!--pager-section end-->
    <section class="page-content">
      <div class="container">
        <div class="teachers-section p-0">
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
        <!--teachers-section end-->

      </div>
    </section>
    <!--page-content end-->    @include('partials.subscribe')
@endsection
