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
	
	<link rel="shortcut icon" href="images/favicon.png" type="image/png">
	<link rel="stylesheet" href="{{ asset('front_theme/css/all.min.css')}}">
	<link rel="stylesheet" href="{{ asset('front_theme/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('front_theme/css/swiper-bundle.min.css')}}">
	<link rel="stylesheet" href="{{ asset('front_theme/css/ekko-lightbox.css')}}">
	<link rel="stylesheet" href="{{ asset('front_theme/css/jquery.mCustomScrollbar.min.css')}}">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="{{ asset('front_theme/css/theme.css?v=2.9')}}">
	<link href="https://aiqom.ai/css/bootstrap-tour-standalone.min.css" rel="stylesheet">
	<script src="https://aiqom.ai/js/jquery-3.3.1.min.js"></script>
    <script src="https://aiqom.ai/js/bootstrap-tour-standalone.min.js"></script>
</head>

<body>
	<!-- Return to Top -->
	<a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up fa-lg"></i></a>
	<header class="web-border-bottom">

		<nav class="navbar navbar-expand-lg navbar-light section-bg-white mobile-navbar">
			<a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('front_theme/images/logo.png')}}" alt="Creative Drop" class="img-fluid"></a>
			<button type="button" id="sidebarCollapse" class="btn"><i class="fas fa-bars fa-lg"></i></button>
		</nav>

		<nav class="navbar navbar-expand-xl navbar-light sticky-top desktop-navbar">
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<div class="web-container-fluid">
					<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobile_nav" aria-controls="mobile_nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button> -->

					<button type="button" id="sidebarCollapse" class="btn"><i class="fas fa-bars fa-lg"></i></button>


					<ul class="navbar-nav navbar-light mr-auto">
						<a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('front_theme/images/logo.png')}}" alt="Creative Drop" class="img-fluid"></a>

                        @php
                            $main_menus = DB::table('menus')->where('menu_link', '!=', '#')->get();
                        @endphp
						<li class="nav-item dropdown megamenu-li dmenu"><a class="nav-link" href="{{url('/work')}}">Work</a></li>

                        @foreach($main_menus as $main_menus_row)
                        @php
                            $child_menus = DB::table('child_menus')->where('menu_id', '=', $main_menus_row->id)->get();
                        @endphp
                            <li class="nav-item dropdown megamenu-li dmenu">
                                <a class="nav-link" href="{{url('/'.$main_menus_row->menu_name.'')}}">{{$main_menus_row->menu_name}}</a>

                            
                            <div class="dropdown-menu megamenu sm-menu border-top" aria-labelledby="dropdown01">
								<section class="design-menu section-padtop-50 section-padbottom-50">
                                    <div class="web-container-fluid">
                                        <div class="row">
                                            @foreach($child_menus as $child_menus_rows)
                                            @php
                                                $child_menus = DB::table('child_menus')->where('menu_id', '=', $main_menus_row->id)->get();
                                                $sub_child_menus = DB::table('sub_child_menus')->where('child_menu_id', '=', $child_menus_rows->id)->get();
                                            @endphp
                                            <div class="col-md">
                                                <div class="sub-links">
                                                    <h6 class="web-h6 web-border-bottom pb-4 mb-0"><a href="{{url('/'.$child_menus_rows->item_link.'')}}" class="web-bold">{{$child_menus_rows->item_name}}</a></h6>
                                                    <ul class="mt-3">
                                                        @foreach($sub_child_menus as $row_sub_child_menus)
                                                            <li><a href="{{url('/'.$row_sub_child_menus->item_link.'')}}" class="p-14">{{$row_sub_child_menus->item_name}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            @endforeach
                                            
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
								<li class="nav-item"><a class="nav-link" href="{{url('insight')}}">Insight</a></li>

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
	</header>

	<div class="wrapper">
		<!-- Sidebar  -->
		<nav id="sidebar">
			<div>

			</div>


			<div class="sidebar-header">
				<a href="index.html"><img src="images/logo.png" alt="Logo"></a>
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
                    <div class="nk-content ">
                        @yield('content')
                    </div>
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
											<a href="#"><img src="{{asset('front_theme/images/logo.png')}}" alt="logo" class="w-75"></a>
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
					<div class="modal" id="creativeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
						  <div class="modal-content">
							<div class="modal-header">
							  <h5 class="modal-title web-h4" id="exampleModalLabel">Connect With Us !</h5>
							  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							  </button>
							</div>
							<div class="modal-body">
							 <form>
								  <input type="text" class="form-control mb-3" placeholder="Full Name" required>
								  <input type="email" class="form-control mb-3" placeholder="Work Email" required>
								  <input type="tel" class="form-control mb-3" placeholder="Phone Number" required>
								  <textarea class="form-control" placeholder="Message"></textarea>
							  </form>
							</div>
							<div class="modal-footer justify-content-center">
							  <a href="javascript:void(0)" class="btn web-btn web-btn-blue">Submit</a>
							</div>
						  </div>
						</div>
					  </div> 
  
  

					  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('front_theme/js/jquery.counterup.min.js')}}"></script>
<script src="{{ asset('front_theme/js/jquery.waypoints.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
<script src="{{ asset('front_theme/js/swiper-bundle.min.js')}}"></script>
<script src="{{ asset('front_theme/js/ekko-lightbox.min.js')}}"></script>
<script src="{{ asset('front_theme/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ asset('front_theme/js/theme.js?v=1.9')}}"></script>


  
  <!--filter-->
  <!-- Select2 -->
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>-->
  </body>
  </html>

    </body>
</html>