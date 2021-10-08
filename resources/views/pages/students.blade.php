@extends('layouts.school')

@section('content')
    <section class="pager-section blog-version">
      <div class="container">
        <div class="pager-content text-center">
          <ul>
            <li><a href="#" title="">Home</a></li>
            <li><span>Students</span></li>
          </ul>
          <h2>Students</h2><span class="categry">DAARUL ARQAM ISLAMIC  SCHOOLS</span>

        </div>
        <!--pager-content end-->
      </div>
    </section>
    <!--pager-section end-->
    <section class="page-content p80">
      <div class="container">
        <div class="row">
          <div class="col-lg-9">

            <div class="blog-post single">

              <div class="row">
                <div class="col-md-12">
                  <div class="oderd">
                    <h3 style="font-size: 40px">STUDY TOURS</h3>
                      <p>We experience study tours every academic year to create new exposures to our pupils. For secondary use to go up –country for two to three days trip. For primary and nursery we visit the selected places within the Dar es salaam city.</p>
                  </div>
                    <hr>
                  <!--ordrd end-->
                    <div class="oderd">
                        <h3 style="font-size: 40px">SPORTS</h3>
                        <p>At DAARUL ARQAM ISLAMIC  SCHOOLS, sports are challenged to discover their God-given talents in a team-centered environment. Coaches balance development with competition, teaching values for life beyond the playing field. This approach of challenge, cooperation, and competition with character provides the foundation of sports at our schools. We invite you to be a part of the schools lightning partnerships whether parents or fan, as together we strive for excellence and to represent our schools with integrity. </p>
                        <p> Incredible learning opportunities are not limited to a classroom setting. Some of the most valuable lessons are learned on the field, in the playground and on the other field.
</p>

                    </div>
                    <hr>
                  <!--ordrd end-->
                </div>


              </div>

              <blockquote>
                <p>The more that you read, the more things you will know, the more that you learn, the more places you’ll go</p>
                <h4>Dr Seuss</h4>
{{--                  <span>Sheck</span>--}}
              </blockquote>

            </div>
            <!--blog-post single end-->
            <!--post-comments end-->
            <div class="mdp-contact">
              <div class="comment-area">
                <h3 class="mdp-sub-title">Contact Us</h3>
                <form>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group"><input type="text" name="name" placeholder="Name"></div>
                      <!--form-group end-->
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group"><input type="email" name="email" placeholder="Email"></div>
                      <!--form-group end-->
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group"><input type="text" name="website" placeholder="Phone"></div>
                      <!--form-group end-->
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group"><textarea name="message" placeholder="Message"></textarea></div>
                      <!--form-group end-->
                    </div>
                    <div class="col-lg-12">
                      <div class="form-submit"><a href="#" title="" class="btn-default">Send Now <i
                            class="fa fa-long-arrow-alt-right"></i></a></div>
                      <!--form-submit end-->
                    </div>
                  </div>
                </form>
              </div>
              <!--comment-area end-->
            </div>
            <!--mdp-contact end-->
          </div>
          <div class="col-lg-3">
            <div class="sidebar">


              <div class="widget widget-categories">
                <h3 class="widget-title">Downloads</h3>
                <ul>
                  <li>
                      <a target="_blank" href="{{url('/')}}/files/ADMISSION.pdf" title=""><i class="fa fa-file-pdf" style="color: mediumvioletred"></i>
                          Admission Form</a> <span>5 Pages</span>
                  </li>
                    <li>
                      <a target="_blank" href="{{url('/')}}/files/ADMISSION.pdf" title=""><i class="fa fa-file-pdf" style="color: mediumvioletred"></i>
                          Almanic</a> <span>2 Pages</span>
                  </li>
                </ul>
              </div>
              <!--widget-categories end-->

            </div>
            <!--sidebar end-->
          </div>
        </div>
      </div>
    </section>
    @include('partials.subscribe')
@endsection
