<header>
        <div class="container">
          <div class="header-content d-flex flex-wrap align-items-center">
            <div class="logo"><a href="/" title=""><img src="{{url('/')}}/assets/img/logo.png" alt=""
                  srcset="{{url('/')}}/assets/img/01_Logo_2x.png 2x"></a></div>
            <!--logo end-->
            <ul class="contact-add d-flex flex-wrap">
              <li>
                <div class="contact-info"><img src="{{url('/')}}/assets/img/icon1.png" alt="">
                  <div class="contact-tt">
                      <h4>Call</h4><span><a href="tel:+255659190208"> +255 659 190 208</a>
{{--                          <br> <a href="tel:+255 654 204 781"> +255 654 204 781 </a>--}}
                      </span>
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
                    <h4>Address</h4><span>Kigamboni, Dar es salaam</span>
                  </div>
                </div>
                <!--contact-info end-->
              </li>
            </ul>
            <!--contact-information end-->
            <div class="menu-btn"><a href="#"><span class="bar1"></span> <span class="bar2"></span> <span
                  class="bar3"></span></a></div>
            <!--menu-btn end-->
          </div>
          <!--header-content end-->
          <div class="navigation-bar d-flex flex-wrap align-items-center">
            <nav>
              <ul>
                @include('partials.menu')
              </ul>
            </nav>
            <!--nav end-->
            <ul class="social-links ml-auto">
              <li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#" title=""><i class="fab fa-linkedin-in"></i></a></li>
              <li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
          <!--navigation-bar end-->
        </div>
</header>
