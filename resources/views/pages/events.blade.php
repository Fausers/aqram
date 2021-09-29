@extends('layouts.school')

@section('content')
    <section class="pager-section">
      <div class="container">
        <div class="pager-content text-center">
          <h2>Events</h2>
          <ul>
            <li><a href="/" title="">Home</a></li>
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
        <div class="course-section">
          <div class="courses-list">
            <div class="row">
              <div class="col-lg-6">
                <div class="course-card">
                  <div class="d-flex flex-wrap align-items-center">
                    <ul class="course-meta">
                      <li><img src="assets/img/icon12.png" alt=""> 29/07/2021</li>
                      <li>11AM to 15PM</li>
                    </ul>
                  </div>
                  <h3><a href="/event" title="">Serengeti Tour</a></h3>
                  <div class="d-flex flex-wrap">
                    <div class="posted-by"><img src="assets/img/ico2.png" alt=""> <a href="#" title="">Amanda Kern</a>
                    </div><span class="locat"><img src="assets/img/loct.png" alt="">Manyara, Tanzania</span>
                  </div>
                </div>
                <!--course-card end-->
              </div>
              <div class="col-lg-6">
                <div class="course-card">
                  <div class="d-flex flex-wrap align-items-center">
                    <ul class="course-meta">
                      <li><img src="assets/img/icon12.png" alt=""> 29/08/2021</li>
                      <li>11AM to 15PM</li>
                    </ul>
                  </div>
                  <h3><a href="/event" title="">Parents Meeting</a></h3>
                  <div class="d-flex flex-wrap">
                    <div class="posted-by"><img src="assets/img/ico2.png" alt=""> <a href="#" title="">Miss.
                        Fatma</a></div><span class="locat"><img src="assets/img/loct.png" alt="">School Hall</span>
                  </div>
                </div>
                <!--course-card end-->
              </div>
              <div class="col-lg-6">
                <div class="course-card">
                  <div class="d-flex flex-wrap align-items-center">
                    <ul class="course-meta">
                      <li><img src="assets/img/icon12.png" alt=""> 29/10/2021</li>
                      <li>11AM to 15PM</li>
                    </ul>
                  </div>
                  <h3><a href="/event" title="">Museum Tour</a></h3>
                  <div class="d-flex flex-wrap">
                    <div class="posted-by"><img src="assets/img/ico2.png" alt=""> <a href="#" title="">Hidaya Brauer</a>
                    </div><span class="locat"><img src="assets/img/loct.png" alt="">Dar es salaam Muesem</span>
                  </div>
                </div>
                <!--course-card end-->
              </div>
            </div>
          </div>
          <!--courses-list end-->
        </div>

        <!--pagination-end-->
      </div>
    </section>
    @include('partials.subscribe')
@endsection
