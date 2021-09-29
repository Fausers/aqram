@extends('layouts.school')

@section('content')
    <section class="pager-section">
      <div class="container">
        <div class="pager-content text-center">
          <h2>Body Fitness</h2>
          <ul>
            <li><a href="/" title="">Home</a></li>
{{--            <li><a href="#" title="">Classes</a></li>--}}
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
        <div class="row">
          <div class="col-lg-9">
            <div class="event-single">
              <div class="event-gallery-sec">
                <div class="event-gallery"><a href="/assets/school/events/karate.jpeg" title="" class="html5lightbox"
                    data-group="set1"><img src="/assets/school/events/karate.jpeg" alt=""> </a><span
                    class="price">Karate Training</span></div>
                <!--event-gallery end-->
                <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                    <div class="event-gallery"><a href="/assets/school/events/bus.jpeg" title="" class="html5lightbox"
                        data-group="set1"><img src="/assets/school/events/bus.jpeg" alt=""></a></div>
                    <!--event-gallery end-->
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                    <div class="event-gallery"><a href="/assets/school/events/karate2.jpeg" title="" class="html5lightbox"
                        data-group="set1"><img src="/assets/school/events/karate2.jpeg" alt=""></a></div>
                    <!--event-gallery end-->
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                    <div class="event-gallery"><a href="/assets/school/events/karate.jpeg" title="" class="html5lightbox"
                        data-group="set1"><img src="/assets/school/events/karate.jpeg" alt=""></a></div>
                    <!--event-gallery end-->
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                    <div class="event-gallery"><a href="/assets/school/events/karate.jpeg" title="" class="html5lightbox"
                        data-group="set1"><img src="/assets/school/events/karate.jpeg" alt=""></a></div>
                    <!--event-gallery end-->
                  </div>
                </div>
              </div>
              <!--event-gallery-sec end-->
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel venenatis felis. Fusce id lectus sit
                amet nisi ornare ultricies. In sagittis lacinia lorem et tristique. Quisque mauris neque, sollicitudin
                sit amet imperdiet in, scelerisque sit amet arcu. In vehicula sem eget nisi convallis, a mattis orci
                imperdiet. Curabitur vitae sapien vel lectus sagittis consequat. Nullam enim velit, dignissim vel
                viverra ac, eleifend ut tellus.</p>
              <p>Nunc at tincidunt nisl. Nullam fringilla quis odio vitae eleifend. Quisque sed mi erat. In hac
                habitasse platea dictumst. Vivamus mattis nunc quis turpis pretium sollicitudin. In eu semper justo.
                Phasellus facilisis hendrerit massa, sed auctor lacus convallis et. Vestibulum ac odio interdum,
                efficitur nisl ut, sollicitudin arcu. Donec commodo elementum tempus. In hac habitasse platea dictumst.
              </p>
              <h3>Activities Involved</h3>
              <ul class="ordrd">
                <li>Program opening</li>
                <li>Dance and have fun</li>
                <li>Present gifts to students</li>
                <li>Program ending</li>
              </ul>
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="sg-event"><span>1</span>
                    <h3>Program opening</h3>
                    <p>Nunc at tincidunt nisl. Nullam fringilla quis odio vitae eleifend. Quisque sed mi</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="sg-event"><span>2</span>
                    <h3>Dance and have fun</h3>
                    <p>Nunc at tincidunt nisl. Nullam fringilla quis odio vitae eleifend. Quisque sed mi</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="sg-event"><span>3</span>
                    <h3>Program ending</h3>
                    <p>Nunc at tincidunt nisl. Nullam fringilla quis odio vitae eleifend. Quisque sed mi</p>
                  </div>
                </div>
              </div>
              <div class="mdp-map"><iframe
                  src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Kigamboni English Medium Nursery school&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
              </div>
              <!--mdp-map end-->
            </div>
            <!--event-single end-->
          </div>
          <div class="col-lg-3">
            <div class="sidebar class-sidebar position-static">
              <div class="widget widget-information">
                <ul class="clt">
                  <li><img src="assets/img/cir3.png" alt="">
                    <div class="clt-info">
                      <h3>Kigamboni Dar es salaam</h3>
                    </div>
                  </li>
                  <li><img src="assets/img/cir4.png" alt="">
                    <div class="clt-info">
                      <h3>29/07/2020 <span>11AM to 15PM</span></h3>
                    </div>
                  </li>
                </ul>
                <div class="tech-info">
                  <div class="tech-tble"><img src="assets/img/thumb1.png" alt="">
                    <div class="tch-info">
                      <h3>Hubert Franck</h3><span>English Teacher</span>
                    </div>
                  </div><a href="/contacts" title="" class="btn-default">Enroll Now <i
                      class="fa fa-long-arrow-alt-right"></i></a>
                </div>
              </div>
              <!--widget-information end-->
              <div class="widget widget-contact-dp mdp-contact">
                <div class="mdp-our-contacts">
                  <h3>Our Contacts</h3>
                  <ul>
                    <li>
                      <div class="d-flex flex-wrap">
                        <div class="icon-v"><img src="assets/img/icon15.png" alt=""></div>
                        <div class="dd-cont">
                          <h4>Call</h4><span>+255 785 008 133</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex flex-wrap">
                        <div class="icon-v"><img src="assets/img/icon16.png" alt=""></div>
                        <div class="dd-cont">
                          <h4>Work Time</h4><span>Mon - Fri 8 AM - 5 PM</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex flex-wrap">
                        <div class="icon-v"><img src="assets/img/icon17.png" alt=""></div>
                        <div class="dd-cont">
                          <h4>Address</h4><span>Franklin St, Greenpoint Ave</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <!--widget-contact-dp end-->
            </div>
            <!--sidebar end-->
          </div>
        </div>
      </div>
    </section>
    <!--page-content end-->
    @include('partials.subscribe')
@endsection
