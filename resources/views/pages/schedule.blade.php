@extends('layouts.school')

@section('content')
        <!--responsive-menu end-->
    <section class="pager-section">
      <div class="container">
        <div class="pager-content text-center">
          <h2>Schedule</h2>
          <ul>
            <li><a href="#" title="">Home</a></li>
            <li><span>Schedule</span></li>
          </ul>
        </div>
        <!--pager-content end-->
        <h2 class="page-titlee">Shelly</h2>
      </div>
    </section>
    <!--pager-section end-->
    <section class="page-content">
      <div class="container">
        <div class="schedule-page">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item"><a class="nav-link active" id="grade1-tab" data-toggle="tab" href="#grade1" role="tab"
                aria-controls="grade1" aria-selected="true">1th grade</a></li>
            <li class="nav-item"><a class="nav-link" id="grade2-tab" data-toggle="tab" href="#grade2" role="tab"
                aria-controls="grade2" aria-selected="false">2th grade</a></li>
            <li class="nav-item"><a class="nav-link" id="grade3-tab" data-toggle="tab" href="#grade3" role="tab"
                aria-controls="grade3" aria-selected="false">3th grade</a></li>
            <li class="nav-item"><a class="nav-link" id="grade4-tab" data-toggle="tab" href="#grade4" role="tab"
                aria-controls="grade4" aria-selected="false">4th grade</a></li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="grade1" role="tabpanel" aria-labelledby="grade1-tab">
              <div class="schedule-content">
                <ul class="schp-list">
                  <li class="no-height">
                    <div class="tb-head">
                      <h2>Monday</h2>
                    </div>
                  </li>
                  <li>
                    <div class="mkd-info">
                      <h3><a href="class-single.html" title="">Charcoal Drawing for all age students</a></h3><span>8 AM
                        - 10 AM</span>
                    </div>
                  </li>
                  <li></li>
                  <li></li>
                  <li>
                    <div class="mkd-info bg-2">
                      <h3><a href="class-single.html" title="">Basic English Speaking and Gram mar</a></h3><span>14 PM -
                        16 AM</span>
                    </div>
                  </li>
                  <li></li>
                </ul>
                <ul class="schp-list">
                  <li class="no-height">
                    <div class="tb-head">
                      <h2>Tuesday</h2>
                    </div>
                  </li>
                  <li></li>
                  <li>
                    <div class="mkd-info">
                      <h3><a href="class-single.html" title="">Introduction to LearnPress LMS Plugin</a></h3><span>10 AM
                        - 12 AM</span>
                    </div>
                  </li>
                  <li></li>
                  <li></li>
                  <li>
                    <div class="mkd-info bg-2">
                      <h3><a href="class-single.html" title="">Your Complete Guide to Photography​</a></h3><span>16 PM -
                        17 PM</span>
                    </div>
                  </li>
                </ul>
                <ul class="schp-list">
                  <li class="no-height">
                    <div class="tb-head">
                      <h2>Wednesday</h2>
                    </div>
                  </li>
                  <li>
                    <div class="mkd-info">
                      <h3><a href="class-single.html" title="">Your Complete Guide to Photography​</a></h3><span>8 AM -
                        10 AM</span>
                    </div>
                  </li>
                  <li></li>
                  <li>
                    <div class="mkd-info">
                      <h3><a href="class-single.html" title="">Natural Sciences & Mathematics Courses</a></h3><span>12
                        AM - 14 PM</span>
                    </div>
                  </li>
                  <li></li>
                  <li></li>
                </ul>
                <ul class="schp-list">
                  <li class="no-height">
                    <div class="tb-head">
                      <h2>Thursday</h2>
                    </div>
                  </li>
                  <li></li>
                  <li>
                    <div class="mkd-info bg-2">
                      <h3><a href="class-single.html" title="">Your Complete Guide to Photography​</a></h3><span>10 AM -
                        12 AM</span>
                    </div>
                  </li>
                  <li></li>
                  <li>
                    <div class="mkd-info bg-2">
                      <h3><a href="class-single.html" title="">Your Complete Guide to Photography​</a></h3><span>14 PM -
                        16 AM</span>
                    </div>
                  </li>
                  <li></li>
                </ul>
                <ul class="schp-list">
                  <li class="no-height">
                    <div class="tb-head">
                      <h2>Friday</h2>
                    </div>
                  </li>
                  <li>
                    <div class="mkd-info">
                      <h3><a href="class-single.html" title="">Basic English Speaking and Grammar</a></h3><span>8 AM -
                        10 AM</span>
                    </div>
                  </li>
                  <li></li>
                  <li>
                    <div class="mkd-info">
                      <h3><a href="class-single.html" title="">Learn Python – Interactive Python</a></h3><span>12 AM -
                        14 PM</span>
                    </div>
                  </li>
                  <li></li>
                  <li></li>
                </ul>
                <ul class="schp-list">
                  <li class="no-height">
                    <div class="tb-head">
                      <h2>Saturday</h2>
                    </div>
                  </li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li>
                    <div class="mkd-info bg-2">
                      <h3><a href="class-single.html" title="">Natural Sciences & Mathematics Courses</a></h3><span>14
                        PM - 16 AM</span>
                    </div>
                  </li>
                  <li>
                    <div class="mkd-info">
                      <h3><a href="class-single.html" title="">Basic English Speaking and Grammar</a></h3><span>16 PM -
                        17 PM</span>
                    </div>
                  </li>
                </ul>
                <ul class="schp-list">
                  <li class="no-height">
                    <div class="tb-head">
                      <h2>Sunday</h2>
                    </div>
                  </li>
                  <li></li>
                  <li>
                    <div class="mkd-info bg-2">
                      <h3><a href="class-single.html" title="">Natural Sciences & Mathematics Courses</a></h3><span>10
                        AM - 12 AM</span>
                    </div>
                  </li>
                  <li></li>
                  <li></li>
                  <li></li>
                </ul>
              </div>
              <!--schedule-content end-->
              <div class="schedule-mobile-content">
                <div class="ttb-list">
                  <h2>Monday</h2>
                  <ul>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Charcoal Drawing for all age students</a></h3><span>8
                          AM - 10 AM</span>
                      </div>
                    </li>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Basic English Speaking and Grammar</a></h3><span>14 PM
                          - 16 AM</span>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="ttb-list">
                  <h2>Tuesday</h2>
                  <ul>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Introduction to LearnPress LMS Plugin</a></h3><span>10
                          AM - 12 AM</span>
                      </div>
                    </li>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Your Complete Guide to Photography​</a></h3><span>16 PM
                          - 17 PM</span>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="ttb-list">
                  <h2>Wednesday</h2>
                  <ul>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Your Complete Guide to Photography​</a></h3><span>8 AM
                          - 10 AM</span>
                      </div>
                    </li>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Natural Sciences & Mathematics Courses</a></h3><span>12
                          AM - 14 PM</span>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="ttb-list">
                  <h2>Thursday</h2>
                  <ul>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Introduction to LearnPress LMS Plugin</a></h3><span>10
                          AM - 12 AM</span>
                      </div>
                    </li>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Your Complete Guide to Photography​</a></h3><span>14 PM
                          - 16 AM</span>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="ttb-list">
                  <h2>Friday</h2>
                  <ul>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Basic English Speaking and Grammar</a></h3><span>8 AM -
                          10 AM</span>
                      </div>
                    </li>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Learn Python – Interactive Python</a></h3><span>12 AM -
                          14 PM</span>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="ttb-list">
                  <h2>Saturday</h2>
                  <ul>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Natural Sciences & Mathematics Courses</a></h3><span>14
                          PM - 16 AM</span>
                      </div>
                    </li>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Basic English Speaking and Grammar</a></h3><span>16 PM
                          - 17 PM</span>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="ttb-list">
                  <h2>Sunday</h2>
                  <ul>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Natural Sciences & Mathematics Courses</a></h3><span>10
                          AM - 12 AM</span>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <!--schedule-mobile-content end-->
            </div>
            <div class="tab-pane fade" id="grade2" role="tabpanel" aria-labelledby="grade2-tab">
              <div class="schedule-content">
                <ul class="schp-list">
                  <li class="no-height">
                    <div class="tb-head">
                      <h2>Monday</h2>
                    </div>
                  </li>
                  <li>
                    <div class="mkd-info">
                      <h3><a href="class-single.html" title="">Charcoal Drawing for all age students</a></h3><span>8 AM
                        - 10 AM</span>
                    </div>
                  </li>
                  <li></li>
                  <li></li>
                  <li>
                    <div class="mkd-info bg-2">
                      <h3><a href="class-single.html" title="">Basic English Speaking and Gram mar</a></h3><span>14 PM -
                        16 AM</span>
                    </div>
                  </li>
                  <li></li>
                </ul>
                <ul class="schp-list">
                  <li class="no-height">
                    <div class="tb-head">
                      <h2>Tuesday</h2>
                    </div>
                  </li>
                  <li></li>
                  <li>
                    <div class="mkd-info">
                      <h3><a href="class-single.html" title="">Introduction to LearnPress LMS Plugin</a></h3><span>10 AM
                        - 12 AM</span>
                    </div>
                  </li>
                  <li></li>
                  <li></li>
                  <li>
                    <div class="mkd-info bg-2">
                      <h3><a href="class-single.html" title="">Your Complete Guide to Photography​</a></h3><span>16 PM -
                        17 PM</span>
                    </div>
                  </li>
                </ul>
                <ul class="schp-list">
                  <li class="no-height">
                    <div class="tb-head">
                      <h2>Wednesday</h2>
                    </div>
                  </li>
                  <li>
                    <div class="mkd-info">
                      <h3><a href="class-single.html" title="">Your Complete Guide to Photography​</a></h3><span>8 AM -
                        10 AM</span>
                    </div>
                  </li>
                  <li></li>
                  <li>
                    <div class="mkd-info">
                      <h3><a href="class-single.html" title="">Natural Sciences & Mathematics Courses</a></h3><span>12
                        AM - 14 PM</span>
                    </div>
                  </li>
                  <li></li>
                  <li></li>
                </ul>
                <ul class="schp-list">
                  <li class="no-height">
                    <div class="tb-head">
                      <h2>Thursday</h2>
                    </div>
                  </li>
                  <li></li>
                  <li>
                    <div class="mkd-info bg-2">
                      <h3><a href="class-single.html" title="">Your Complete Guide to Photography​</a></h3><span>10 AM -
                        12 AM</span>
                    </div>
                  </li>
                  <li></li>
                  <li>
                    <div class="mkd-info bg-2">
                      <h3><a href="class-single.html" title="">Your Complete Guide to Photography​</a></h3><span>14 PM -
                        16 AM</span>
                    </div>
                  </li>
                  <li></li>
                </ul>
                <ul class="schp-list">
                  <li class="no-height">
                    <div class="tb-head">
                      <h2>Friday</h2>
                    </div>
                  </li>
                  <li>
                    <div class="mkd-info">
                      <h3><a href="class-single.html" title="">Basic English Speaking and Grammar</a></h3><span>8 AM -
                        10 AM</span>
                    </div>
                  </li>
                  <li></li>
                  <li>
                    <div class="mkd-info">
                      <h3><a href="class-single.html" title="">Learn Python – Interactive Python</a></h3><span>12 AM -
                        14 PM</span>
                    </div>
                  </li>
                  <li></li>
                  <li></li>
                </ul>
                <ul class="schp-list">
                  <li class="no-height">
                    <div class="tb-head">
                      <h2>Saturday</h2>
                    </div>
                  </li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li>
                    <div class="mkd-info bg-2">
                      <h3><a href="class-single.html" title="">Natural Sciences & Mathematics Courses</a></h3><span>14
                        PM - 16 AM</span>
                    </div>
                  </li>
                  <li>
                    <div class="mkd-info">
                      <h3><a href="class-single.html" title="">Basic English Speaking and Grammar</a></h3><span>16 PM -
                        17 PM</span>
                    </div>
                  </li>
                </ul>
                <ul class="schp-list">
                  <li class="no-height">
                    <div class="tb-head">
                      <h2>Sunday</h2>
                    </div>
                  </li>
                  <li></li>
                  <li>
                    <div class="mkd-info bg-2">
                      <h3><a href="class-single.html" title="">Natural Sciences & Mathematics Courses</a></h3><span>10
                        AM - 12 AM</span>
                    </div>
                  </li>
                  <li></li>
                  <li></li>
                  <li></li>
                </ul>
              </div>
              <!--schedule-content end-->
              <div class="schedule-mobile-content">
                <div class="ttb-list">
                  <h2>Monday</h2>
                  <ul>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Charcoal Drawing for all age students</a></h3><span>8
                          AM - 10 AM</span>
                      </div>
                    </li>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Basic English Speaking and Grammar</a></h3><span>14 PM
                          - 16 AM</span>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="ttb-list">
                  <h2>Tuesday</h2>
                  <ul>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Introduction to LearnPress LMS Plugin</a></h3><span>10
                          AM - 12 AM</span>
                      </div>
                    </li>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Your Complete Guide to Photography​</a></h3><span>16 PM
                          - 17 PM</span>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="ttb-list">
                  <h2>Wednesday</h2>
                  <ul>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Your Complete Guide to Photography​</a></h3><span>8 AM
                          - 10 AM</span>
                      </div>
                    </li>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Natural Sciences & Mathematics Courses</a></h3><span>12
                          AM - 14 PM</span>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="ttb-list">
                  <h2>Thursday</h2>
                  <ul>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Introduction to LearnPress LMS Plugin</a></h3><span>10
                          AM - 12 AM</span>
                      </div>
                    </li>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Your Complete Guide to Photography​</a></h3><span>14 PM
                          - 16 AM</span>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="ttb-list">
                  <h2>Friday</h2>
                  <ul>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Basic English Speaking and Grammar</a></h3><span>8 AM -
                          10 AM</span>
                      </div>
                    </li>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Learn Python – Interactive Python</a></h3><span>12 AM -
                          14 PM</span>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="ttb-list">
                  <h2>Saturday</h2>
                  <ul>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Natural Sciences & Mathematics Courses</a></h3><span>14
                          PM - 16 AM</span>
                      </div>
                    </li>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Basic English Speaking and Grammar</a></h3><span>16 PM
                          - 17 PM</span>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="ttb-list">
                  <h2>Sunday</h2>
                  <ul>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Natural Sciences & Mathematics Courses</a></h3><span>10
                          AM - 12 AM</span>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <!--schedule-mobile-content end-->
            </div>
            <div class="tab-pane fade" id="grade3" role="tabpanel" aria-labelledby="grade3-tab">
              <div class="schedule-content">
                <ul class="schp-list">
                  <li class="no-height">
                    <div class="tb-head">
                      <h2>Monday</h2>
                    </div>
                  </li>
                  <li>
                    <div class="mkd-info">
                      <h3><a href="class-single.html" title="">Charcoal Drawing for all age students</a></h3><span>8 AM
                        - 10 AM</span>
                    </div>
                  </li>
                  <li></li>
                  <li></li>
                  <li>
                    <div class="mkd-info bg-2">
                      <h3><a href="class-single.html" title="">Basic English Speaking and Gram mar</a></h3><span>14 PM -
                        16 AM</span>
                    </div>
                  </li>
                  <li></li>
                </ul>
                <ul class="schp-list">
                  <li class="no-height">
                    <div class="tb-head">
                      <h2>Tuesday</h2>
                    </div>
                  </li>
                  <li></li>
                  <li>
                    <div class="mkd-info">
                      <h3><a href="class-single.html" title="">Introduction to LearnPress LMS Plugin</a></h3><span>10 AM
                        - 12 AM</span>
                    </div>
                  </li>
                  <li></li>
                  <li></li>
                  <li>
                    <div class="mkd-info bg-2">
                      <h3><a href="class-single.html" title="">Your Complete Guide to Photography​</a></h3><span>16 PM -
                        17 PM</span>
                    </div>
                  </li>
                </ul>
                <ul class="schp-list">
                  <li class="no-height">
                    <div class="tb-head">
                      <h2>Wednesday</h2>
                    </div>
                  </li>
                  <li>
                    <div class="mkd-info">
                      <h3><a href="class-single.html" title="">Your Complete Guide to Photography​</a></h3><span>8 AM -
                        10 AM</span>
                    </div>
                  </li>
                  <li></li>
                  <li>
                    <div class="mkd-info">
                      <h3><a href="class-single.html" title="">Natural Sciences & Mathematics Courses</a></h3><span>12
                        AM - 14 PM</span>
                    </div>
                  </li>
                  <li></li>
                  <li></li>
                </ul>
                <ul class="schp-list">
                  <li class="no-height">
                    <div class="tb-head">
                      <h2>Thursday</h2>
                    </div>
                  </li>
                  <li></li>
                  <li>
                    <div class="mkd-info bg-2">
                      <h3><a href="class-single.html" title="">Your Complete Guide to Photography​</a></h3><span>10 AM -
                        12 AM</span>
                    </div>
                  </li>
                  <li></li>
                  <li>
                    <div class="mkd-info bg-2">
                      <h3><a href="class-single.html" title="">Your Complete Guide to Photography​</a></h3><span>14 PM -
                        16 AM</span>
                    </div>
                  </li>
                  <li></li>
                </ul>
                <ul class="schp-list">
                  <li class="no-height">
                    <div class="tb-head">
                      <h2>Friday</h2>
                    </div>
                  </li>
                  <li>
                    <div class="mkd-info">
                      <h3><a href="class-single.html" title="">Basic English Speaking and Grammar</a></h3><span>8 AM -
                        10 AM</span>
                    </div>
                  </li>
                  <li></li>
                  <li>
                    <div class="mkd-info">
                      <h3><a href="class-single.html" title="">Learn Python – Interactive Python</a></h3><span>12 AM -
                        14 PM</span>
                    </div>
                  </li>
                  <li></li>
                  <li></li>
                </ul>
                <ul class="schp-list">
                  <li class="no-height">
                    <div class="tb-head">
                      <h2>Saturday</h2>
                    </div>
                  </li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li>
                    <div class="mkd-info bg-2">
                      <h3><a href="class-single.html" title="">Natural Sciences & Mathematics Courses</a></h3><span>14
                        PM - 16 AM</span>
                    </div>
                  </li>
                  <li>
                    <div class="mkd-info">
                      <h3><a href="class-single.html" title="">Basic English Speaking and Grammar</a></h3><span>16 PM -
                        17 PM</span>
                    </div>
                  </li>
                </ul>
                <ul class="schp-list">
                  <li class="no-height">
                    <div class="tb-head">
                      <h2>Sunday</h2>
                    </div>
                  </li>
                  <li></li>
                  <li>
                    <div class="mkd-info bg-2">
                      <h3><a href="class-single.html" title="">Natural Sciences & Mathematics Courses</a></h3><span>10
                        AM - 12 AM</span>
                    </div>
                  </li>
                  <li></li>
                  <li></li>
                  <li></li>
                </ul>
              </div>
              <!--schedule-content end-->
              <div class="schedule-mobile-content">
                <div class="ttb-list">
                  <h2>Monday</h2>
                  <ul>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Charcoal Drawing for all age students</a></h3><span>8
                          AM - 10 AM</span>
                      </div>
                    </li>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Basic English Speaking and Grammar</a></h3><span>14 PM
                          - 16 AM</span>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="ttb-list">
                  <h2>Tuesday</h2>
                  <ul>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Introduction to LearnPress LMS Plugin</a></h3><span>10
                          AM - 12 AM</span>
                      </div>
                    </li>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Your Complete Guide to Photography​</a></h3><span>16 PM
                          - 17 PM</span>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="ttb-list">
                  <h2>Wednesday</h2>
                  <ul>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Your Complete Guide to Photography​</a></h3><span>8 AM
                          - 10 AM</span>
                      </div>
                    </li>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Natural Sciences & Mathematics Courses</a></h3><span>12
                          AM - 14 PM</span>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="ttb-list">
                  <h2>Thursday</h2>
                  <ul>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Introduction to LearnPress LMS Plugin</a></h3><span>10
                          AM - 12 AM</span>
                      </div>
                    </li>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Your Complete Guide to Photography​</a></h3><span>14 PM
                          - 16 AM</span>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="ttb-list">
                  <h2>Friday</h2>
                  <ul>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Basic English Speaking and Grammar</a></h3><span>8 AM -
                          10 AM</span>
                      </div>
                    </li>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Learn Python – Interactive Python</a></h3><span>12 AM -
                          14 PM</span>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="ttb-list">
                  <h2>Saturday</h2>
                  <ul>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Natural Sciences & Mathematics Courses</a></h3><span>14
                          PM - 16 AM</span>
                      </div>
                    </li>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Basic English Speaking and Grammar</a></h3><span>16 PM
                          - 17 PM</span>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="ttb-list">
                  <h2>Sunday</h2>
                  <ul>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Natural Sciences & Mathematics Courses</a></h3><span>10
                          AM - 12 AM</span>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <!--schedule-mobile-content end-->
            </div>
            <div class="tab-pane fade" id="grade4" role="tabpanel" aria-labelledby="grade4-tab">
              <div class="schedule-content">
                <ul class="schp-list">
                  <li class="no-height">
                    <div class="tb-head">
                      <h2>Monday</h2>
                    </div>
                  </li>
                  <li>
                    <div class="mkd-info">
                      <h3><a href="class-single.html" title="">Charcoal Drawing for all age students</a></h3><span>8 AM
                        - 10 AM</span>
                    </div>
                  </li>
                  <li></li>
                  <li></li>
                  <li>
                    <div class="mkd-info bg-2">
                      <h3><a href="class-single.html" title="">Basic English Speaking and Gram mar</a></h3><span>14 PM -
                        16 AM</span>
                    </div>
                  </li>
                  <li></li>
                </ul>
                <ul class="schp-list">
                  <li class="no-height">
                    <div class="tb-head">
                      <h2>Tuesday</h2>
                    </div>
                  </li>
                  <li></li>
                  <li>
                    <div class="mkd-info">
                      <h3><a href="class-single.html" title="">Introduction to LearnPress LMS Plugin</a></h3><span>10 AM
                        - 12 AM</span>
                    </div>
                  </li>
                  <li></li>
                  <li></li>
                  <li>
                    <div class="mkd-info bg-2">
                      <h3><a href="class-single.html" title="">Your Complete Guide to Photography​</a></h3><span>16 PM -
                        17 PM</span>
                    </div>
                  </li>
                </ul>
                <ul class="schp-list">
                  <li class="no-height">
                    <div class="tb-head">
                      <h2>Wednesday</h2>
                    </div>
                  </li>
                  <li>
                    <div class="mkd-info">
                      <h3><a href="class-single.html" title="">Your Complete Guide to Photography​</a></h3><span>8 AM -
                        10 AM</span>
                    </div>
                  </li>
                  <li></li>
                  <li>
                    <div class="mkd-info">
                      <h3><a href="class-single.html" title="">Natural Sciences & Mathematics Courses</a></h3><span>12
                        AM - 14 PM</span>
                    </div>
                  </li>
                  <li></li>
                  <li></li>
                </ul>
                <ul class="schp-list">
                  <li class="no-height">
                    <div class="tb-head">
                      <h2>Thursday</h2>
                    </div>
                  </li>
                  <li></li>
                  <li>
                    <div class="mkd-info bg-2">
                      <h3><a href="class-single.html" title="">Your Complete Guide to Photography​</a></h3><span>10 AM -
                        12 AM</span>
                    </div>
                  </li>
                  <li></li>
                  <li>
                    <div class="mkd-info bg-2">
                      <h3><a href="class-single.html" title="">Your Complete Guide to Photography​</a></h3><span>14 PM -
                        16 AM</span>
                    </div>
                  </li>
                  <li></li>
                </ul>
                <ul class="schp-list">
                  <li class="no-height">
                    <div class="tb-head">
                      <h2>Friday</h2>
                    </div>
                  </li>
                  <li>
                    <div class="mkd-info">
                      <h3><a href="class-single.html" title="">Basic English Speaking and Grammar</a></h3><span>8 AM -
                        10 AM</span>
                    </div>
                  </li>
                  <li></li>
                  <li>
                    <div class="mkd-info">
                      <h3><a href="class-single.html" title="">Learn Python – Interactive Python</a></h3><span>12 AM -
                        14 PM</span>
                    </div>
                  </li>
                  <li></li>
                  <li></li>
                </ul>
                <ul class="schp-list">
                  <li class="no-height">
                    <div class="tb-head">
                      <h2>Saturday</h2>
                    </div>
                  </li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li>
                    <div class="mkd-info bg-2">
                      <h3><a href="class-single.html" title="">Natural Sciences & Mathematics Courses</a></h3><span>14
                        PM - 16 AM</span>
                    </div>
                  </li>
                  <li>
                    <div class="mkd-info">
                      <h3><a href="class-single.html" title="">Basic English Speaking and Grammar</a></h3><span>16 PM -
                        17 PM</span>
                    </div>
                  </li>
                </ul>
                <ul class="schp-list">
                  <li class="no-height">
                    <div class="tb-head">
                      <h2>Sunday</h2>
                    </div>
                  </li>
                  <li></li>
                  <li>
                    <div class="mkd-info bg-2">
                      <h3><a href="class-single.html" title="">Natural Sciences & Mathematics Courses</a></h3><span>10
                        AM - 12 AM</span>
                    </div>
                  </li>
                  <li></li>
                  <li></li>
                  <li></li>
                </ul>
              </div>
              <!--schedule-content end-->
              <div class="schedule-mobile-content">
                <div class="ttb-list">
                  <h2>Monday</h2>
                  <ul>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Charcoal Drawing for all age students</a></h3><span>8
                          AM - 10 AM</span>
                      </div>
                    </li>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Basic English Speaking and Grammar</a></h3><span>14 PM
                          - 16 AM</span>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="ttb-list">
                  <h2>Tuesday</h2>
                  <ul>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Introduction to LearnPress LMS Plugin</a></h3><span>10
                          AM - 12 AM</span>
                      </div>
                    </li>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Your Complete Guide to Photography​</a></h3><span>16 PM
                          - 17 PM</span>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="ttb-list">
                  <h2>Wednesday</h2>
                  <ul>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Your Complete Guide to Photography​</a></h3><span>8 AM
                          - 10 AM</span>
                      </div>
                    </li>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Natural Sciences & Mathematics Courses</a></h3><span>12
                          AM - 14 PM</span>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="ttb-list">
                  <h2>Thursday</h2>
                  <ul>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Introduction to LearnPress LMS Plugin</a></h3><span>10
                          AM - 12 AM</span>
                      </div>
                    </li>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Your Complete Guide to Photography​</a></h3><span>14 PM
                          - 16 AM</span>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="ttb-list">
                  <h2>Friday</h2>
                  <ul>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Basic English Speaking and Grammar</a></h3><span>8 AM -
                          10 AM</span>
                      </div>
                    </li>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Learn Python – Interactive Python</a></h3><span>12 AM -
                          14 PM</span>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="ttb-list">
                  <h2>Saturday</h2>
                  <ul>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Natural Sciences & Mathematics Courses</a></h3><span>14
                          PM - 16 AM</span>
                      </div>
                    </li>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Basic English Speaking and Grammar</a></h3><span>16 PM
                          - 17 PM</span>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="ttb-list">
                  <h2>Sunday</h2>
                  <ul>
                    <li>
                      <div class="dd-info">
                        <h3><a href="class-single.html" title="">Natural Sciences & Mathematics Courses</a></h3><span>10
                          AM - 12 AM</span>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <!--schedule-mobile-content end-->
            </div>
          </div>
        </div>
        <!--schedule-page end-->
      </div>
    </section>
    <!--page-content end-->
    @include('partials.subscribe')
@endsection
