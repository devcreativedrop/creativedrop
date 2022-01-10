@extends('layouts.frontend')
@section('content')
@section('meta_description')@if(!$pages->isEmpty()){{$pages[0]->meta_desc}}@endif @endsection
@section('meta_keywords')@if(!$pages->isEmpty()){{$pages[0]->meta_keyword}}@endif @endsection


<section class="section-padtop-50">
</section>
<section>
    <div class="web-container-fluid cs-img">
        <section>
            <div class="design-banner-content w-100">
					<h5 class="web-h5">{{Request::segment(2)}}</h5>
					<p class="p-14">Infographics, Company Profile &amp; Video</p>
				</div>
        </section>
        <section class="section-bg-white">
            <img src="{{asset('public/front_theme/images/case-study/cs-00.jpg') }}" alt="" class="img-fluid">
        </section>
        <section>
            <img src="{{asset('public/front_theme/images/case-study/cs-01.jpg') }}" alt="" class="img-fluid">
        </section>
        <section class="section-bg-white">
            <img src="{{asset('public/front_theme/images/case-study/cs-02.jpg') }}" alt="" class="img-fluid">
        </section>
        <section class="section-bg-white">
            <img src="{{asset('public/front_theme/images/case-study/cs-03.jpg') }}" alt="" class="img-fluid">
        </section>
        <!--video section full width-->
        <section class="bg-white section-bg-white mt-0 pt-0">
        <div class="recorded-video-resources">
            <div class="video-resourc ai-challenge-video-resource">
                    <iframe src="https://www.youtube.com/embed/dCj4rA58-qY?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
        </div>
</section>
        <!--video section inside container-->
        <section class="section-bg-white">
            <img src="{{asset('public/front_theme/images/case-study/cs-04.jpg') }}" alt="" class="img-fluid">
        </section>
        <section class="cs-yt-video">
            <!--Note for background image: Background image of video will be dynamic so user can change -->
            <div style="background-image: url('images/case-study/cs-03.jpg') }}');  background-repeat: no-repeat; background-size: cover;  background-position: center;">
                <div class="row">
                    <div class="col-12">
                        <div class="section-padtop-100 section-padbottom-100">
                    <div class="web-container">
                        <div class="video-resourc ai-challenge-video-resource">
                            <iframe src="https://www.youtube.com/embed/dCj4rA58-qY?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                    </div>    
                </div>
            </div>
        </section>
        <section class="mb-4 section-bg-white">
                    <img src="{{asset('public/front_theme/images/case-study/cs-05.jpg') }}" alt="" class="img-fluid">
                </section>
        <section class="section-padbottom-50">
            <div class="row mt-5">
                <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-6">
                    <a href="case-study.php" class="blue-link web-h6"><i class="fas fa-chevron-left pr-1"></i>Previous</a>
                </div>
                <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-6" align="right">
                    <a href="case-study.php" class="blue-link web-h6">Next<i class="fas fa-chevron-right pl-1"></i></a>
                </div>
            </div>
        </section>
    </div>
</section>



@endsection




    
       
    
        
        
    


