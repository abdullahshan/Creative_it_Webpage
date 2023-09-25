@extends('layouts.frontendapp')




@section('content')

 <main>

  @if(session('successinsert'))
  <div class="badge badge-success" class="z-index:999">
      <h3>{{ session('successinsert') }}</h3>
  </div>
  @endif

    <!-- BANNER SECTION  -->
    <section id="bannerPart" style="background-image: url(https://www.creativeitinstitutectg.com/frontend/image/banner_hero.webp)">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5">
          <div class="promo ">

            <p> <img src="https://www.creativeitinstitutectg.com/frontend/image/promoIcon.png" alt="promo"> Welcome to Square Pharmaceuticals Ltd.
            </p>
          </div>
         
          <p class="detail">
            Square Pharmaceuticals Limited, the flagship company of Square Group, is holding the strong leadership position in the pharmaceutical industry of Bangladesh since 1985 and is now on its way to becoming a high performance global player.
          </p>
          <a href="#courses"><i class="bi bi-book"></i>  </a>
          <a href="#seminar"><i class="bi bi-book"></i>   </a>
          <div class="iso d-flex align-items-center">
            <img src="" alt="">
            <p class="my-0">দেশের অন্যতম ISO সার্টিফাইড আইটি
              ট্রেনিং ইনস্টিটিউট</p>
          </div>
        </div>
        <div class="col-lg-7 embededVideoLink">
         
         <!-------------banner---------->
         
         <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">

            @php $i = 1; @endphp
            @foreach ($data as $sdata)
            <div class="carousel-item {{ $i == '1' ? 'active':'' }}">
              @php $i++; @endphp
              <img style="border-radius: 50px" height="449" width="641" src="{{ asset('storage/banner/' . $sdata->image) }}" alt="">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
            </div>
            
            @endforeach
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
  
          <!-----------banner---------->

        </div>
      </div>
    </div>
  </section>
    


  <!-- BANNER SECTION END -->
  <!-- ABOUT SECTION STARTS -->
  <section id="about">

    <div class="container">
      <h1>
        Welcome to <span>Square Pharmaceuticals Ltd.</span>
      </h1>
      <p data-aos="fade-up">
        Square Pharmaceuticals Limited, the flagship company of Square Group,
        is holding the strong leadership position in the pharmaceutical industry
        of Bangladesh since 1985 and is now on its way to becoming a high performance global player.
      </p>
      <p data-aos="fade-up">
        CIT has tremendously well-decorated two campuses with upgraded
        equipment. Our students are very much happy with our culture,
        environment and outstanding training method. We are passionate about
        providing good service to our students. Thus, the students of this
        institute turn out to be successful marketers and establish their
        careers in various companies as well. We dedicatedly provide
        flexible training options such as online training, 24/7 support,
        lifetime post-training support, job placement and so on. We always
        maintain the standards of excellence which are visible on
        <a href="https://www.facebook.com/CITI.Chattogram">Facebook Reviews</a>
        and <a href="shorturl.at/elJNU">Google Reviews.</a>
      </p>
    </div>
  </section>
  <!-- ABOUT SECTION END -->

  <!-- COURSES SECTION STARTS -->

  <section id="courses">
    <div class="container">
      <div class="primary">
        <h2>Product</h2>
        <p>দেশ ও দেশের বাইরে বর্তমানে যে স্কিলগুলোর চাহিদা সবচেয়ে বেশি, সেসব দিয়েই সাজানো হয়েছে আমাদের কোর্স লিস্ট। এখান
          থেকে আপনার
          সুবিধামত অনলাইন বা অফলাইনে কোর্সে এনরোল করতে পারবেন যেকোনো সময়।</p>

        <div class="icons">
          <span class="leftArrow"><i class="bi bi-chevron-left"></i></span>
          <span class="rightArrow"><i class="bi bi-chevron-right"></i></span>
        </div>
        <div class="department__slider">

                   
                      @foreach ($courser_data as $courser_data_sdata)
                      <div class="dp__name">
                        {{ $courser_data_sdata->title }}
                      </div>
                      @endforeach
                   
              
                  </div>
        <div class="department_base_course_slider">
         
              @foreach ($courser_data as $courser_data_sdata)
              <div class="course_under_department">
                <div class="all__courses">
    
                                <div class="px-2">
                    <a href="https://www.creativeitinstitutectg.com/course/professional-web-design">
                      <div class="course_card">
                        <div class="course_img">
                         <img src="{{ asset('storage/course/' . $courser_data_sdata->image) }}" alt="">
                        </div>
                        <div class="course_detail">
                          <h3>{{ $courser_data_sdata->name }}</h3>
                          <p>{{ $courser_data_sdata->class }}</p>
                          <h4>{{ $courser_data_sdata->time }}</h4>
                        </div>
                      </div>
                    </a>
                  </div>
                                <div class="px-2">
                    <a href="https://www.creativeitinstitutectg.com/course/web-development">
                      <div class="course_card">
                        <div class="course_img">
                         <img src="{{ asset('storage/course/' . $courser_data_sdata->image_s) }}" alt="">
                        </div>
                        <div class="course_detail">
                          <h3>{{ $courser_data_sdata->name_s }}</h3>
                          <p>{{ $courser_data_sdata->class_s }}</p>
                          <h4>{{ $courser_data_sdata->time_s }}</h4>
                        </div>
                      </div>
                    </a>
                  </div>
                              </div>
              </div>
              @endforeach
 
     
                  </div>
      </div>
    </div>
  </section>
      
  <!-- COURSES SECTION ENDS -->



  <!-- SEMINAR SECTION STARTS -->
  
    <section id="seminar">
    <div class="container">

      <div class="modal" id="success_modal" style="z-index: 9999;">
        <div class="modal-dialog">
          <div class="modal-body bg-success">
            <p class="text-white">Seminar Registration Successfull!</p>
          </div>
        </div>
      </div>
      <div class="seminar_model modal" id="joinseminars">
        <div class="card">
          <div class="logo">
            <img style="border-radius: 30px" src="{{ asset('storage/logo/leadlogo.png') }}" loading="lazy" alt="" />
          </div>
          <div class="card-header px-2">
            <p class="h5">জয়েন ফ্রি সেমিনার</p>
            <span class="float-end close__modal position-absolute"><i class="bi bi-x-lg"></i></span>
          </div>
          <div class="card-body"> 

            <form id="form" action="{{ route('seminarlead.store') }}" method="POST">
             
              @csrf
              <div class="form-group">
                <label for="name">আপনার নাম: -</label>
                <input  type="text" class="form-control" id="name" value="" name="name" />
                <p class="text-danger name_err"></p>
              </div>
              <div class="form-group">
                <label for="phone">আপনার ফোন নাম্বার: -</label>
                <input  type="number" class="form-control" id="phone" value="" name="phone" />
                <p class="text-danger phone_err"></p>
              </div>
              <div class="form-group">
                <label for="email">আপনার ইমেইল: -</label>
                <input  type="email" class="form-control" id="email" value="" name="email" />
                <p class="text-danger email_err"></p>
              </div>
              <div class="form-group">
                <label for="course">কোর্স সিলেক্ট করুন: -</label>
                <select name="seminar_id" value="" id="seminar_cat" class="form-control">
                                    @foreach ($seminar_data as $s_seminar_data)
                                    <option value="{{ $s_seminar_data->id }}">{{ $s_seminar_data->name }}</option>
                                  @endforeach
                                    
                                  </select>
                                  <p class="text-danger seminar_id_err"></p>     
              </div>
              <div class="form-group">
                <label for="address">আপনার ঠিকানা: -</label>
                <textarea  name="address"  id="address" class="form-control"></textarea>
              </div>
              <button class="btn_submint">ফ্রি রেজিস্ট্রেশন করুন</button>
            </form>


           


          </div>
        </div>
      </div>

     



       <div class="row align-items-center">
        <div class="col-lg-6" data-aos="fade-right">
          <div class="primary">
            <h2>অংশ নিন ফ্রি সেমিনারে</h2>
            <p>ফ্রিল্যান্সিং-এর জন্য কোন কোর্স করবেন, সিদ্ধান্ত নিতে পারছেন না? জয়েন করুন আমাদের ফ্রি সেমিনারে।
              বিষয়ভিত্তিক
              এই
              সেমিনারগুলোতে প্রতিটি কোর্সের সম্ভাবনা সম্পর্কে জানতে পারবেন। তাছাড়া সেমিনারে উপস্থিত এক্সপার্ট
              কাউন্সেলরের
              সঙ্গে কথা
              বলে আপনি যথাযথ কোর্স বেছে নেওয়ার সিদ্ধান্ত নিতে পারবেন সহজেই।</p>
            <h3>আপকামিং ফ্রি সেমিনার</h3>
          </div>
          
          <div class="allSeminars">
            
            @foreach ($seminar_data as $s_seminar_data)
            <div class="seminar">
              <div class="row ">
                <div class="time col-md-2">
                  <p>{{ $s_seminar_data->date }}</p>
                  <p>{{ $s_seminar_data->year }}</p>
                </div>
                <div class="detail col-md-7">
                  <h4>{{ $s_seminar_data->name }}</h4>
                  <p>{{ $s_seminar_data->time }}</p>
                </div>
                <div class="col-md-3 seminarButton">
                  <a style="cursor: pointer" data-id="1" class="join__seminar__btn">Join Now</a>
                </div>
              </div>
            </div>
            @endforeach
           
                      </div>
        </div>
        <div class="col-lg-6 seminarImg" data-aos="fade-left">
          <img height="400" src="{{ asset('storage/imgseminar/'.$imgseminar_data->image) }}" alt="">
        </div>
      </div> 
    </div>
  </section>
    

  
    <!-- SEMINAR SECTION ENDS -->

  <!-- Blog STORIES STARTS HERE -->
  
  <!-- Blog STORIES ENDS HERE -->
  <!-- CONTACT SECTION STARTS HERE -->
  <section id="contact">
    <div class="container">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-5 order-2 order-lg-1">
          <div class="contact_form">
            <h2 class="mt-4 my-lg-0">
              আমাদের সাথে <br>
              <span>যোগাযোগ করুন</span>
            </h2>
    
            @if(session('success'))
            <div class="badge badge-success">
                <h3>{{ session('success') }}</h3>
            </div>
        @endif
            <form action="{{ route('contact.store') }}" method="POST">
              @csrf          
               <input type="text" class="form-control" placeholder="আপনার নাম" name="name">
              <input type="text" class="form-control" placeholder="আপনার ফোন নাম্বার" name="phone">
                  <input type="text" class="form-control" placeholder="আপনার ইমেইল" name="email">
                            <button type="submit">সাবমিট</button>
            </form>

          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <div class="contact_img" data-aos="fade-right" data-aos-delay="100">
            <img loading="lazy" style="height: 300px;border-radius: 50px; width:500px" src="{{ asset('storage/image/Capddture.PNG') }}" alt="contact img"
              class="img-fluid" loading="lazy" />
          </div>
        </div>
      </div>
    </div>
  </section>

  
<!-----OUr---Second---Contact---RegistrationForm---->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Register</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('registration.post') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name">

                            </div>
                        </div>
                        <div class="row mb-3">
                          <label for="name" class="col-md-4 col-form-label text-md-end">Email</label>

                          <div class="col-md-6">
                              <input id="name" type="text" class="form-control" name="email">

                          </div>
                      </div>
                      <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">Subject</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="subject">

                        </div>
                    </div>
                   
                    <div class="row mb-3">
                      <label for="name" class="col-md-4 col-form-label text-md-end">Message</label>

                      <div class="col-md-6">
                          <textarea id="message" type="text" class="form-control" name="message"></textarea>

                      </div>
                  </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!---Second----Contact---Form----End-------->

@endsection






@section('script')

<script>

                  $(function(){

                  $(".btn_submint").on('click',function(e){
                      $('.name_err').text('');
                      $('.phone_err').text('');
                      $('.email_err').text('');
                      $('.seminar_id_err').text('');

                  
                    e.preventDefault();

                  

                      var _token = $("input[name ='_token']").val();
                      var name = $("input[name ='name']").val();
                      var phone = $("input[name='phone']").val();
                      var email = $("input[name='email']").val();
                      var seminar_id = $("#seminar_cat").val();
                      var address = $("textarea[name='address']").val();


                      $.ajax({
                           url: 'http://127.0.0.1:8000/seminarlead',
                           type: 'post',
                           dataType: 'JSON',
                           data: { _token: _token, name:name, phone:phone, email:email, seminar_id:seminar_id, address:address}, 
                         
                        //    success: function(data) {
                        //    $("#form").reset;
                        //  }
                        //$("#form")[0].reset();
                        //$("#success_modal").('show');

                        
                      
                      

                              error: function (response){

                              $('.name_err').text(response.responseJSON.errors.name);
                              $('.phone_err').text(response.responseJSON.errors.phone);
                              $('.email_err').text(response.responseJSON.errors.email);
                              $('.seminar_id_err').text(response.responseJSON.errors.seminar_id);
                              }
                      });
                      


                  });
                  

                  });

</script>

@endsection