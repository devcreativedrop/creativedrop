@extends('layouts.frontend')
@section('content')
@section('meta_description')@if(!$pages->isEmpty()){{$pages[0]->meta_desc}}@endif @endsection
@section('meta_keywords')@if(!$pages->isEmpty()){{$pages[0]->meta_keyword}}@endif @endsection

 <!-- BEGIN: Content-->
 
 <!--@if(!$pages->isEmpty())-->


    @foreach($pages as $row_pages)
            @if( $row_pages->section_no == '1' )
                @foreach($page_section as $row_page_section)
                            @if($row_pages->section == $row_page_section->id)

                                @include('section')

                            @endif
                @endforeach
            @endif

            @if( $row_pages->section_no == '2' )
                @foreach($page_section as $row_page_section)
                            @if($row_pages->section == $row_page_section->id)
                            
                                    @include('section')

                            @endif
                @endforeach
            @endif

            @if( $row_pages->section_no == '3' )
                @foreach($page_section as $row_page_section)
                            @if($row_pages->section == $row_page_section->id)
                            
                                    @include('section')

                            @endif
                @endforeach
            @endif

            @if( $row_pages->section_no == '4' )
            @foreach($page_section as $row_page_section)
                        @if($row_pages->section == $row_page_section->id)
                        
                                @include('section')

                        @endif
            @endforeach
            @endif

            @if( $row_pages->section_no == '5' )
            @foreach($page_section as $row_page_section)
                        @if($row_pages->section == $row_page_section->id)
                        
                                @include('section')

                        @endif
            @endforeach
            @endif

            @if( $row_pages->section_no == '6' )
            @foreach($page_section as $row_page_section)
                        @if($row_pages->section == $row_page_section->id)
                        
                                @include('section')

                        @endif
            @endforeach
            @endif

            @if( $row_pages->section_no == '7' )
            @foreach($page_section as $row_page_section)
                        @if($row_pages->section == $row_page_section->id)
                        
                                @include('section')

                        @endif
            @endforeach
            @endif

            @if( $row_pages->section_no == '8' )
            @foreach($page_section as $row_page_section)
                        @if($row_pages->section == $row_page_section->id)
                        
                                @include('section')

                        @endif
            @endforeach
            @endif

            @if( $row_pages->section_no == '9' )
            @foreach($page_section as $row_page_section)
                        @if($row_pages->section == $row_page_section->id)
                        
                                @include('section')

                        @endif
            @endforeach
            @endif

        

    @endforeach



<!--@endif-->


<!--@if($pages->isEmpty())-->


<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col-md-12">-->
<!--            <div class="error-template">-->
<!--                <h1>-->
<!--                    Oops!</h1>-->
<!--                <h2>-->
<!--                    404 Not Found</h2>-->
<!--                <div style="font-size:21px;" class="error-details">-->
<!--                    Sorry, an error has occured, Requested page not found!-->
<!--                </div>-->
<!--                <div class="error-actions">-->
                    
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->



<!--@endif-->

@endsection




    
       
    
        
        
    


