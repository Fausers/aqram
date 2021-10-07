@extends('layouts.school')

@section('content')
    <section class="pager-section blog-version">
      <div class="container">
        <div class="pager-content text-center">
          <ul>
            <li><a href="#" title="">Home</a></li>
            <li><span>Admission</span></li>
          </ul>
          <h2>Admission</h2><span class="categry">DAARUL ARQAM ISLAMIC  SCHOOLS</span>

        </div>
        <!--pager-content end-->
      </div>
    </section>
    <!--pager-section end-->
    <section class="page-content p80">
      <div class="container">
        <div class="row">
          <div class="col-lg-9">
                <h3 class="main-title" style="color: black">DAARUL ARQAM ISLAMIC SCHOOLS IS FOR YOU</h3>
              <br>
            <div class="blog-post single">
                <p>As an Islamic Private School in Dar es salaam, DAARUL ARQAM ISLAMIC SCHOOLS welcomes applications from the parents of students who understand and support our mission and vision.</p>

                <p>DAARUL ARQAM ISLAMIC SCHOOLS give a fair and equal chance to all applicants who fulfill the admission requirements; dependent upon space availability. To determine admission eligibility for students transferring from another school, official report cards as well as other supporting documents are submitted upon application.</p>

                <p>An assessment process will be conducted, including an interview with both the child and parents.  Applicants are advised that the school does not have the resources and facilities to serve the educational needs of students with learning disabilities (mental dis ability).</p>

              <div class="row">
                <div class="col-md-12">
                  <div class="oderd">
                    <h3>Kindly be informed</h3>
                    <p>A student who left LIS under special circumstances such as but not limited to expulsion, poor disciplinary record, or poor academic record, may not automatically be registered at a later date. The student must go through the necessary steps for admission (interview, assessment, and a review of their previous school record).  Students placed on academic or behavioral probation may be asked to leave at any time during the school year in which they were given probation.</p>
                  </div>
                  <!--ordrd end-->
                </div>

                  <div class="col-md-12">
                      <div class="oderd">
                        <h3>The admissions process involves the following steps</h3>
                          <h2 style="color: black">1.	Submit a completed application form</h2>
                          <p>The first step in the admissions process is the submission of a completed application form by the parent(s)/guardian(s) when it opens up each year.  Your application will then be put on our waiting list for the grade applied. The form is available at the following centers.</p>

                          <div class="oderd">
                            <ol>
                                <li>i.	At Daarul Arqam schools, cheka Kigamboni or</li>
                                <li>ii.	Lindi, Mood Brother shop (stand kuu) or</li>
                                <li>iii.	Mtwara at Munyi tuition center or</li>
                                <li>iv.	By downloading through the link in a website,</li>
                            </ol>
                          </div>

                          <h2 style="color: black">2.	DAS Contacts You</h2>
                          <p>Once a student is selected by sequence from the wait list, LIS contacts the parent(s)/guardian(s) to come to the school and submit all required documents for admission.</p>

                          <h2 style="color: black">3.	Assessment Process and Interviewing</h2>
                          <p>Placement testing may be arranged depending on submitted documents, grade level and language proficiency. An interview with the child is also conducted according to his/her level applied.</p>

                          <h2 style="color: black">4.	Letter of Offer</h2>
                          <p>If admission is granted, parent(s)/guardian(s) will be sent a letter of offer by the school personnel with a deadline to submit confirmation of enrolment. This form must be signed by all respective parent(s)/guardian(s) and returned to the school with other supporting documents.</p>

                          <h2 style="color: black">5.	Payment</h2>
                          <p>The school registration form is given and pre-authorized payment details are given to the school for the monthly tuition amount. All remaining supporting documents are submitted at this time.</p>

                      </div>
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
