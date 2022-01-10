<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name ="description" content="@yield('meta_description', 'We build e-commerce site, management site, Android, iOS apps.Laravel, Java, NodeJs, PHP technology, React js, Vue js, React Native, Flutter.')">
    <meta name ="keywords" content="@yield('meta_keywords', 'We build e-commerce site, management site, Android, iOS apps.Laravel, Java, NodeJs, PHP technology, React js, Vue js, React Native, Flutter.')">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
	<link rel="shortcut icon" href="{{ asset('public/front_theme/images/favicon.png')}}" type="image/png">
	<link rel="stylesheet" href="{{ asset('public/front_theme/css/all.min.css')}}">
	<link rel="stylesheet" href="{{ asset('public/front_theme/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('public/front_theme/css/swiper-bundle.min.css')}}">
	<link rel="stylesheet" href="{{ asset('public/front_theme/css/ekko-lightbox.css')}}">
	<link rel="stylesheet" href="{{ asset('public/front_theme/css/jquery.mCustomScrollbar.min.css')}}">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="{{ asset('public/front_theme/css/theme.css?v=2.9')}}">
	<link href="https://aiqom.ai/css/bootstrap-tour-standalone.min.css" rel="stylesheet">
	<script src="https://aiqom.ai/js/jquery-3.3.1.min.js"></script>
    <script src="https://aiqom.ai/js/bootstrap-tour-standalone.min.js"></script>
    
    <style>
      .contact-form-left {
        background-image: url("{{asset('public/front_theme/images/contact-form.jpeg') }}");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        width: 100%;
        /*margin-top: -1px;*/
        /*margin-bottom: -1px;*/
      }
      .signup-form .form-control::placeholder {
        /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: #000;
        opacity: 1; /* Firefox */
      }

      .signup-form .form-control:-ms-input-placeholder {
        /* Internet Explorer 10-11 */
        color: #000;
      }

      .signup-form .form-control::-ms-input-placeholder {
        /* Microsoft Edge */
        color: #000;
      }
      /*.signup-form .form-control {*/
      /*  border-top: 0px !important;*/
      /*  border-left: 0px;*/
      /*  border-right: 0px;*/
      /*  border-bottom: 2px solid #000;*/
      /*  border-radius: 0px !important;*/
      /*  padding-left: 0px;*/
      /*}*/
      /*.form-control:focus {*/
      /*  border-color: #000 !important;*/
      /*  box-shadow: 0 0 0px !important;*/
      /*}*/
      
      #creativeModal .form-control, #creativeModal .form-control:focus {
    border-radius: 0 !important;
    border: none !important;
    border-bottom: 1px solid #000 !important;
    color: #000 !important;
    font-size: 14px !important;
    font-family: 'helvetica regular' !important;
     padding-left: 0px !important; 
    background-color: transparent !important;
}
      
      .signup-form .button {
        border: 0px !important;
      }
      #creativeModal .modal-content
      {
         border: 0; 
         /*width: 95% !important;*/
      }
      /* ,
      .form-control:focus {
        outline: 0;
      } */
      
      /*.new-modal i.bi.bi-x-circle-fill {*/
      /*  position: absolute;*/
      /*  top: -15px !important;*/
      /*}*/
      
     i.fa.fa-times-circle {
    position: absolute;
    top: -15px;
    right: -25px;
}

    </style>
    
       
</head>

<body>
	<!-- Return to Top -->
	<a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up fa-lg"></i></a>
	<header class="web-border-bottom">

		<nav class="navbar navbar-expand-lg navbar-light section-bg-white mobile-navbar">
			<a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('public/front_theme/images/logo.png')}}" alt="Creative Drop" class="img-fluid"></a>
			<button type="button" id="sidebarCollapse" class="btn"><i class="fas fa-bars fa-lg"></i></button>
		</nav>

	
@php
	$page = DB::table('page')->where('title','=',Request::segment(1))->get();
	
	if(count($page)>0){
		$child_menu = DB::table('child_menus')->where('menu_id','=',$page[0]->menu_id)->get();
	}
	
	$main_menu = DB::table('menus')->get();
	
	
@endphp


	<nav class="navbar navbar-expand-xl navbar-light sticky-top desktop-navbar">
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<div class="web-container-fluid">
					<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobile_nav" aria-controls="mobile_nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button> -->

					<button type="button" id="sidebarCollapse" class="btn"><i class="fas fa-bars fa-lg"></i></button>


					<ul class="navbar-nav navbar-light mr-auto">
						<a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('public/front_theme/images/logo.png')}}" alt="Creative Drop" class="img-fluid"></a>
						
						
						<li class="nav-item active"><a class="nav-link" href="{{url('work')}}">Work</a></li>
						
						@foreach($main_menu as $row_main_menu)
						
						<li class="nav-item dropdown megamenu-li dmenu">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown01" aria-haspopup="true" aria-expanded="false">{{$row_main_menu->menu_name}}</a>
							<div class="dropdown-menu megamenu sm-menu border-top" aria-labelledby="dropdown01" style="display: none;">
								<section class="design-menu section-padtop-50 section-padbottom-50">
                                	<div class="web-container-fluid">
                                		<div class="row">
                                		    
                                		    @php
                                		        $sub_menu = DB::table('child_menus')->where('menu_id','=',$row_main_menu->id)->get();
                                		    @endphp
                                		    
                                		        @foreach($sub_menu as $row_sub_menu)

                                            		    <div class="col-md">
                                            				<div class="sub-links">
                                            					<h6 class="web-h6 web-border-bottom pb-4 mb-0"><a href="#" class="web-bold">{{$row_sub_menu->item_name}}</a></h6>
                                            					<ul class="mt-3">
                                            					    @php
                                                        		        $sub_child_menu = DB::table('sub_child_menus')->where('child_menu_id','=',$row_sub_menu->id)->get();
                                                        		    @endphp
                                                        		        @foreach($sub_child_menu as $row_sub_child_menu)
                                                        		        <li><a href="{{$row_sub_child_menu->item_link}}" class="p-14">{{$row_sub_child_menu->item_name}}</a></li>
                                                        		        @endforeach
                                            					</ul>
                                            				</div>
                                            			</div>

                                		        @endforeach
                                			
                                			<div class="col-md">
                                				<div class="sub-links">
                                                        <h3 class="web-h3">Get a Quote</h3>
                                                        <p class="p-14">Do not hesitate to contact us for any questions or queries you might have.</p>
                                                        <p class="p-14">You can reach us through email, phone or on WhatsApp.</p>
                                                        <ul>
                                                            <li class="mb-2"><a href="mailto:info@creativedrop.com" class="btn web-btn web-btn-white">Email</a></li>
                                                            <li class="mb-2"><a href="tel:+971503119300" class="btn web-btn web-btn-blue">Call Now</a></li>
                                                            <li><a href="https://api.whatsapp.com/send?phone=+971503119300" class="btn web-btn" target="_blank"><i class="fab fa-whatsapp fa-lg pr-2"></i>Whatsapp</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                		</div>
                                	</div>
                                </section>
                            </div>
						</li>
						
						
						@endforeach

					

					
						

						<!--====-->
						<li class="nav-item"><a class="nav-link" href="{{url('contact')}}">Contact us</a></li>
						<form class="form-inline my-2 my-lg-0 ml-auto">
							<ul class="navbar-nav mr-auto">
								<li class="nav-item">
									<a class="nav-link" href="{{url('agency')}}">Agency</a>
								</li>
								<li class="nav-item"><a class="nav-link" href="{{url('insight/topic-title')}}">Insight</a></li>

								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										العربية
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item p-14" href="#">English</a>
										<a class="dropdown-item p-14" href="#">French</a>
									</div>
								</li>
							</ul>
							<a href="mailto:info@creativedrop.com" class="btn web-btn web-btn-white">Email</a>
							<a href="tel:+971503119300" class="btn web-btn web-btn-blue">Call Now</a>
							<a href="https://api.whatsapp.com/send?phone=+971503119300" class="text-white whatsapp-link" target="_blank"><i class="fab fa-whatsapp fa-lg"></i></a>
						</form>

					</ul>
				</div>
			</div>
		</nav>
		        
		        
		      @if(count($page)>0)
		            @php
		            $child_menu = DB::table('sub_child_menus')->where('child_menu_id','=',$page[0]->sub_menu_id)->get();
		            @endphp
		            
		            @if(!$child_menu->isEmpty())
		            
		            <section class="section-bg-white design-page-menu web-border-bottom">
                    	<div class="web-container">
                               <!-- Swiper -->
                                <div class="sub-nav">
                                    <div class="swiper mySwiper">
                                        <div class="swiper-wrapper">
                                            @foreach($child_menu as $row_child_menu)
                                            
                                                <div class="swiper-slide"><a href="" class="p-14">{{$row_child_menu->item_name}}</a></div>
                                                
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                    	</div>
                    </section>
                    
		            @endif
        		    
            
		      @endif
                
    		
        
        
        
		

		
		
		

	</header>

	<div class="wrapper">
		<!-- Sidebar  -->
		<nav id="sidebar">
			<div>

			</div>


			<div class="sidebar-header">
				<a href="index.html"><img src="{{asset('public/front_theme/images/logo.png')}}" alt="Logo"></a>
				<button id="dismiss" class="btn float-right">
					<i class="fas fa-arrow-left"></i>
				</button>
			</div>

			<ul class="list-unstyled components">
				<li>
					<a href="#">العربية</a>
				</li>
				<li>
					<a href="{{url('/')}}">Home</a>
				</li>
				<li>
					<a href="{{url('work')}}">Work</a>
				</li>
				<li>
					<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Design</a>
					<ul class="collapse list-unstyled" id="homeSubmenu">
						<li>
							<a href="#homeSubmenuMulti1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Branding Services</a>
							<ul class="collapse list-unstyled" id="homeSubmenuMulti1">
								<li>
									<a href="{{url('logo_design')}}">Logo Design</a>
									<a href="corporate-identity.php">Corporate Branding</a>
									<a href="brand-guildeline-book.php">Brand Guideline Book</a>
									<a href="packaging-design.php">Brand Packaging Design</a>
									<a href="uniform-branding.php">Uniform Branding</a>
									<a href="vehicle-branding.php">Vehicle Branding</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#homeSubmenuMulti2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Graphic Design</a>
							<ul class="collapse list-unstyled" id="homeSubmenuMulti2">
								<li>
									<a href="#">Creative Ads Design</a>
									<a href="#">Magazine Ads</a>
									<a href="#">Banner Design</a>
									<a href="#">Animated Banner</a>
									<a href="#">Billboard Design</a>
									<a href="#">Signage Design</a>
									<a href="#">Menu Design</a>
									<a href="#">Infographics Design</a>
									<a href="#">Stand Design</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#homeSubmenuMulti3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Brochures</a>
							<ul class="collapse list-unstyled" id="homeSubmenuMulti3">
								<li>
									<a href="#">Company Profile Design</a>
									<a href="#">Brochure Design</a>
									<a href="#">Catague Design</a>
									<a href="#">Menu Booklet</a>
									<a href="#">Pre-Qualification Design</a>
									<a href="#">Folden Design</a>
									<a href="#">Flyer Design</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#homeSubmenuMulti4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Presentations</a>
							<ul class="collapse list-unstyled" id="homeSubmenuMulti4">
								<li>
									<a href="#">Business Presentation</a>
									<a href="#">Sales Presentation</a>
									<a href="#">Conference Presentation</a>
									<a href="#">Investment Presentation</a>
									<a href="#">Seminar Presentation</a>
									<a href="#">Creative Presentation</a>
									<a href="#">Product Presentation</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">Web & App</a>
				</li>
				<li>
					<a href="#">Videos</a>
				</li>
				<li>
					<a href="#">Marketing</a>
				</li>

				<li>
					<a href="{{url('contact')}}">Contact us</a>
				</li>

				<li>
					<a href="{{url('agency')}}">Agency</a>
				</li>

				<li>
					<a href="insight.php">Insight</a>
				</li>

			</ul>

			<div class="sidebar-links">
				<a href="mailto:info@creativedrop.com"><i class="fas fa-envelope fa-2x"></i></a>
				<a href="tel:+971503119300"><i class="fas fa-phone-alt fa-2x"></i></a>
				<a href="https://api.whatsapp.com/send?phone=+971503119300"><i class="fab fa-whatsapp fa-2x"></i></a>
			</div>

		</nav>

	</div>

	<div class="overlay"></div>

	<div class="main-wrap">
	    
                    
                        @yield('content')
                    
                    <footer class="section-bg-white">
                        <section class="footer-links section-padtop-50 section-padbottom-50">
                            <div class="web-container">
                                <div class="row">
                                    <div class="col-6 col-md-3">
                                        <div class="foot">
											@php
												$footer_section_1 = DB::table('footer_sections')->where('section_id','=','1')->get();
											@endphp
                                            <h5 class="web-h5 web-border-bottom pb-3 mb-0">{{$footer_section_1[0]->name}}</h5>
                                            <ul class="mt-2">
                                                @foreach($footer_section_1 as $row_fs_1)
													<li><a href="{{$row_fs_1->link}}">{{$row_fs_1->menu}}</a></li>
												@endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="foot">
											@php
												$footer_section_2 = DB::table('footer_sections')->where('section_id','=','2')->get();
											@endphp
                                            <h5 class="web-h5 web-border-bottom pb-3 mb-0">{{$footer_section_2[0]->name}}</h5>
                                            <ul class="mt-2">
												@foreach($footer_section_2 as $row_fs_2)
													<li><a href="{{$row_fs_2->link}}">{{$row_fs_2->menu}}</a></li>
												@endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="foot">
											@php
												$footer_section_3 = DB::table('footer_sections')->where('section_id','=','3')->get();
											@endphp
                                            <h5 class="web-h5 web-border-bottom pb-3 mb-0">{{$footer_section_3[0]->name}}</h5>
                                            <ul class="mt-2">
                                                @foreach($footer_section_3 as $row_fs_3)
													<li><a href="{{$row_fs_3->link}}">{{$row_fs_3->menu}}</a></li>
												@endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="foot">
                                            <h5 class="web-h5 web-border-bottom pb-3 mb-0">We are social</h5>
                                            <ul class="list-inline mt-2">
                                                <li class="list-inline-item"><a href="#" class="web-black"><i class="fab fa-instagram fa-lg"></i></a></li>
                                                <li class="list-inline-item"><a href="#" class="web-black"><i class="fab fa-facebook-f fa-lg"></i></a></li>
                                                <li class="list-inline-item"><a href="#" class="web-black"><i class="fab fa-linkedin-in fa-lg"></i></a></li>
                                            </ul>
                                            <p class="p-14 web-grey web-bold mt-4">Dubai</p>
                                            <p class="p-14 web-grey">Fortune Tower, Cluster C, Jumeirah Lake Towers,<br>Dubai - United Arab Emirates</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    
                        <section class="footer-end">
							<div class="web-container-fluid section-padtop-30 section-padbottom-30">
								<div class="row">
									<div class="col-12 col-md-4 col-lg-2">
										<div class="footer-logo">
											<a href="#"><img src="{{asset('public/front_theme/images/logo.png')}}" alt="logo" class="w-75"></a>
										</div>
									</div>
									<div class="col-12 col-md-8 col-lg-5">
										<p class="p-14 web-grey mb-0">Creative Drop is a leading Creative Agency based in Dubai & New York. Copyright 2020 Creative Drop DMCC. All rights reserved.</p>
									</div>
									<div class="col-12 col-md-12 col-lg-5">
										<ul>
											<li><a href="mailto:info@creativedrop.com" class="btn web-btn web-btn-white">Email</a></li>
											<li><a href="tel:+971503119300" class="btn web-btn web-btn-blue">Call Now</a></li>
											<li><a href="https://api.whatsapp.com/send?phone=+971503119300" class="btn web-btn" target="_blank"><i class="fab fa-whatsapp fa-lg pr-2"></i>Whatsapp</a></li>
										</ul>
									</div>
								</div>
							</div>
						</section>
                    
                    </footer>
                    </div>
                    <!-- main-wrap -->



					<!-- Modal -->
  
        <!-- The Modal -->
      <div
        class="modal"
        id="creativeModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true"
      >
        <div
          class="modal-dialog modal-xl modal-dialog-centered"
          role="document"
        >
          <div class="modal-content">
              
            <!-- Modal Header -->
            <div class="row g-0">
              <div class="col-md-6 contact-form-left">
                <div class="modal-body p-5">
                  <div id="get-in-touch" class="text w-100">
                    <h1 class="text-white web-h1">
                      Get In<br />
                      Touch
                    </h1>
                    <p class="p-14 pt-4 text-white">
                      If you have any question please feel free to leave me a
                      line. Just fill the entries that are given and press the
                      button
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 bg-white">
                <div class="modal-body pt-5">
                    
                  <div id="right_content" class="text w-100">
                        <form class="signup-form" method="post" action="javascript:void(0)" id="contact_us" >
                            <h1 class="web-h1 pb-5">Contact</h1>
                            <input type="hidden" name="url" value="{{url()->full()}}"/>
                              <div class="form-group row mb-0">
                                <div class="col-md-6 mb-5 col-sm-12 col-12">
                                  <input
                                    type="text"
                                    name="first_name"
                                    class="form-control"
                                    required
                                    placeholder="First Name"
                                  />
                                  <div style="width:100%;" id="first_name_error_message"> </div>
                                </div>
                                <div class="col-md-6 mb-5 col-sm-12 col-12">
                                  <input
                                    type="text"
                                    name="last_name"
                                    class="form-control"
                                    required
                                    placeholder="Last Name"
                                  />
                                </div>
                              </div>
                              <div class="form-group mb-5">
                                <input
                                  type="text"
                                  name="phone"
                                  class="form-control"
                                  required
                                  placeholder="Phone"
                                />
                                <div style="width:100%;" id="phone_number_error_message"> </div>
                              </div>
                              <div class="form-group mb-5">
                                <input type="email" name="email" class="form-control"  placeholder="Email" required/>
                                <div style="width:100%;" id="email_error_message"> </div>
                              </div>
                              <div class="form-group mb-5">
                                <textarea class="form-control" name="message" id="exampleFormControlTextarea2" rows="1" placeholder="Please Type your Message" required ></textarea>
                              </div>
        
                              <div class="form-group text-center">
                                <button type="submit" id="send_form" class="btn web-btn web-btn-blue">
                                  Submit  </button> 
                                  <img id="loader" style="width:50px;" src="{{url('public/spinner.gif')}}"/>
                                
                              </div>
                        </form>
                  </div>
                  
                  
                   <div id="right_content_two" style="height:500px !important;" class="col-md-12 text-center">
                       
                      <img src="{{asset('public/front_theme/tick.svg') }}" alt="" class="img-responsive" />
    						
    						<div style="width:100%;" id="res_message"> </div>
                </div>
                 
            
                </div>
              </div>
            </div>
            <!--button-->
            <div class="modal-button">
              <button
                type="button"
                class="close d-flex align-items-center justify-content-center"
                data-dismiss="modal"
                aria-label="Close"
              >
                  <i class="fa fa-times-circle" aria-hidden="true"></i>
                <!--<i class="bi bi-x-circle-fill"></i>-->
                <!--<i class="far fa-times-circle fa-lg"></i>-->
              </button>
            </div>
          </div>
        </div>
      </div>

                        
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                        <script src="{{ asset('public/front_theme/js/jquery.counterup.min.js')}}"></script>
                        <script src="{{ asset('public/front_theme/js/jquery.waypoints.min.js')}}"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
                        <script src="{{ asset('public/front_theme/js/swiper-bundle.min.js')}}"></script>
                        <script src="{{ asset('public/front_theme/js/ekko-lightbox.min.js')}}"></script>
                        <script src="{{ asset('public/front_theme/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
                        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
                        <script src="{{ asset('public/front_theme/js/theme.js?v=1.9')}}"></script>


  
<script>
//-----------------
$(document).ready(function(){
    
    $('#right_content_two').hide();
    $('#loader').hide();
    
$('#send_form').click(function(e){
   e.preventDefault();
   
            var f = $("#form");
            var formData = f.serialize();
           
                   /*Ajax Request Header setup*/
                   $.ajaxSetup({
                      headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      }
                  });
                    $('.thankyou').hide();
                   $('#send_form').html('Submit');
                   /* Submit form data using ajax*/
                   $.ajax({
                      url: "{{ url('ajax_post')}}",
                      method: 'post',
                      data: $('form').serialize(),
                      success: function(response){
                         //------------------------
                         if(response.msg){
                             console.log(response);
                                $('#send_form').html('Submit');
                                $('#right_content_two').show();
                                
                                $('#get-in-touch').hide();
                                $('#right_content').hide();
                                $('#res_message').show();
                                
                                $('form').hide();
                                $('#res_message').html(response.msg);
                                
                                $('#msg_div').removeClass('d-none');     
                         }
                         if(response.first_name_error_msg){
                             $('#first_name_error_message').html(response.first_name_error_msg);
                             $('#loader').show();
                         }
                         
                         if(response.phone_number_error_msg){
                             $('#phone_number_error_message').html(response.phone_number_error_msg);
                             $('#loader').show();
                         }
                         
                         if(response.email_error_msg){
                             $('#email_error_message').html(response.email_error_msg);
                             $('#loader').show();
                         }
                        
                
                            document.getElementsByTagName("form").reset(); 
                            setTimeout(function(){
                                $('#creativeModal').hide();
                            },1000);
                         //--------------------------
                      }});
            
   });
});
//-----------------
</script>
  <!--filter-->
  <!-- Select2 -->
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>-->
  </body>
  </html>

    </body>
</html>