@extends('layouts.backend')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"crossorigin="anonymous">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@section('content')
 <!-- BEGIN: Content-->
 <style>
     .form-control{
         padding:7px !important;
     }
     .table td, .table th{
        padding:7px !important;
     }
 </style>
 <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title mb-0">Page Sections</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('admin/')}}">Home</a>
                </li>
                <li class="breadcrumb-item active">Page Sections </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-header-right col-md-6 col-12 mb-md-0 mb-2">
          <div class="media width-250 float-right">
            <div class="media-left media-middle">
              <div id="sp-bar-total-sales"></div>
            </div>
            <div class="media-body media-right text-right">
              <h3 class="m-0">20</h3><span class="text-muted">Page Sections</span>
            </div>
          </div>
        </div>
      </div>
      <div class="content-body"><!-- account setting page start -->
<section id="page-account-settings">
  <div class="row">
      <!-- left menu section -->
      <div class="col-md-2 mb-2 mb-md-0">
          <ul class="nav nav-pills flex-column mt-md-0 mt-1">
              <li class="nav-item">
                  <a class="nav-link d-flex active" id="account-pill-general" data-toggle="pill"
                      href="#account-vertical-general" aria-expanded="true">
                      <i class="feather icon-list"></i>
                      Slider
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link d-flex" id="account-pill-password" data-toggle="pill" href="#account-vertical-password"
                      aria-expanded="false">
                      <i class="feather icon-list"></i>
                      Video
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link d-flex" id="account-pill-info-services" data-toggle="pill" href="#account-vertical-info-services"
                      aria-expanded="false">
                      <i class="feather icon-info"></i>
                      Services
                  </a>
              </li>

              <li class="nav-item">
                  <a class="nav-link d-flex" id="account-pill-info" data-toggle="pill" href="#account-vertical-info"
                      aria-expanded="false">
                      <i class="feather icon-info"></i>
                      Case Study
                  </a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex" id="account-pill-info-team" data-toggle="pill" href="#account-vertical-info-team"
                    aria-expanded="false">
                    <i class="feather icon-users"></i>
                    Team
                </a>
            </li>
              <li class="nav-item">
                  <a class="nav-link d-flex" id="account-pill-social" data-toggle="pill" href="#account-vertical-social"
                      aria-expanded="false">
                      <i class="feather icon-camera"></i>
                      Clients & Partners
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link d-flex" id="account-pill-connections" data-toggle="pill"
                      href="#account-vertical-connections" aria-expanded="false">
                      <i class="feather icon-feather"></i>
                      Industries
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link d-flex" id="account-pill-news" data-toggle="pill"
                      href="#account-vertical-news" aria-expanded="false">
                      <i class="feather icon-globe"></i>
                      News & Opinions
                  </a>
              </li>

              <li class="nav-item">
                <a class="nav-link d-flex" id="account-pill-request" data-toggle="pill"
                    href="#account-vertical-request" aria-expanded="false">
                    <i class="feather icon-users"></i>
                    Request for Meeting
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link d-flex" id="account-pill-style_1" data-toggle="pill"
                    href="#account-vertical-style_1" aria-expanded="false">
                    <i class="feather icon-type"></i>
                    Paragraph Style 1
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link d-flex" id="account-pill-style_2" data-toggle="pill"
                    href="#account-vertical-style_2" aria-expanded="false">
                    <i class="feather icon-type"></i>
                    Paragraph Style 2
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex" id="account-pill-style_3" data-toggle="pill"
                    href="#account-vertical-style_3" aria-expanded="false">
                    <i class="feather icon-type"></i>
                    Paragraph Style 3
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex" id="account-pill-style_4" data-toggle="pill"
                    href="#account-vertical-style_4" aria-expanded="false">
                    <i class="feather icon-type"></i>
                    Paragraph Style 4
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link d-flex" id="account-pill-style_5" data-toggle="pill"
                    href="#account-vertical-style_5" aria-expanded="false">
                    <i class="feather icon-type"></i>
                    Paragraph Style 5
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link d-flex" id="account-pill-image-bellow-text-and-button" data-toggle="pill"
                    href="#account-vertical-image-bellow-text-and-button" aria-expanded="false">
                    <i class="feather icon-type"></i>
                    Image Below Text and Button
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link d-flex" id="account-pill-paragraph-with-icon" data-toggle="pill"
                    href="#account-vertical-paragraph-with-icon" aria-expanded="false">
                    <i class="feather icon-type"></i>
                    Paragraph with icon
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link d-flex" id="account-pill-section_17" data-toggle="pill"
                    href="#account-vertical-section_17" aria-expanded="false">
                    <i class="feather icon-type"></i>
                    Section 17
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link d-flex" id="account-pill-section-18" data-toggle="pill"
                    href="#account-vertical-section_18" aria-expanded="false">
                    <i class="feather icon-type"></i>
                    Section 18
                </a>
            </li>

            



          </ul>
      </div>
      <!-- right content section -->
      <div class="col-md-10">
          <div class="card">
              <div class="card-content">
                  <div class="card-body">
                      <div class="tab-content">
                          <div role="tabpanel" class="tab-pane active" id="account-vertical-general"
                              aria-labelledby="account-pill-general" aria-expanded="true">
                              <div class="media">
                                  <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
                                      Create Slider
                                  </div>
                              </div>
                              <hr>
                              <div class="row">
                                <img style="width:100%" src="{{asset('page_sections/slider.png')}}"/>
                                    <div class="col-md-12">
                                        <form method="POST" action="{{url('admin/store_slider')}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
            
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-username">Slider Name</label>
                                                            <input type="text" name="name" class="form-control" id="account-username" required
                                                                data-validation-required-message="This username field is required">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <script>
                                                      $(document).ready(function () {
                                                        // Denotes total number of rows
                                                        var SliderrowIdx = 0;
                                                        // jQuery button click event to add a row
                                                        $('#slideraddBtn').on('click', function () {
                                                          // Adding a row inside the tbody.
                                                          $('#slidertbody').append(`<tr id="R${++SliderrowIdx}">
                                                              <td class="row-index text-center"><input type="file" name="slider_image[]" class="form-control"/></td>
                                                              <td class="row-index text-center"><input type="text" name="text_1[]" class="form-control"/></td>
                                                              <td class="row-index text-center"><input type="text" name="text_2[]" class="form-control"/></td>
                                                              <td class="row-index text-center"><input type="text" name="link[]" class="form-control"/></td>
                                                              <td class="row-index text-center"><select name="status[]" class="form-control"><option value=""> None </option><option value="active"> Active </option></select></td>
                                                              
                                                              <td class="text-center"><button class="btn btn-danger remove" type="button">Remove</button></td>
                                                              </tr>`);
                                                        });
                                                        // jQuery button click event to remove a row.
                                                        $('#slidertbody').on('click', '.remove', function () {
                                                          // Getting all the rows next to the row
                                                          // containing the clicked button
                                                          var child = $(this).closest('tr').nextAll();
                                                          // Iterating across all the rows 
                                                          // obtained to change the index
                                                          child.each(function () {
                                                            // Getting <tr> id.
                                                            var id = $(this).attr('id');
                                                            // Getting the <p> inside the .row-index class.
                                                            var idx = $(this).children('.row-index').children('p');
                                                            // Gets the row number from <tr> id.
                                                            var dig = parseInt(id.substring(1));
                                                            // Modifying row index.
                                                            idx.html(`Row ${dig - 1}`);
                                                            // Modifying row id.
                                                            $(this).attr('id', `R${dig - 1}`);
                                                          });
                                                          // Removing the current row.
                                                          $(this).closest('tr').remove();
                                                          // Decreasing total number of rows by 1.
                                                          SliderrowIdx--;
                                                        });
                                                      });
                                                    </script>
                                                  
                                                    <div class="container pt-4">
                                                      <button class="btn btn-md btn-primary" id="slideraddBtn" type="button"> Add new Slider Row </button>
                                                      <div class="table-responsive">
                                                        <table class="table table-bordered">
                                                          <thead>
                                                            <tr>
                                                              <th class="text-center">Slider Image</th>
                                                              <th class="text-center">Heading 1</th>
                                                              <th class="text-center">Heading 2</th>
                                                              <th class="text-center">Button Link</th>
                                                              <th class="text-center">Status</th>
                                                              <th class="text-center">Remove Row</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody id="slidertbody">
                                                    
                                                          </tbody>
                                                        </table>
                                                      </div>
                                                      
                                                    </div>
                                              </div>

                                                
                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                    <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create
                                                        Slider</button>
                                                    <button type="reset" class="btn btn-light">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                              <hr/>
                              <table class="table table-striped table-bordered dom-jQuery-events">
                                <thead>
                                    <tr>
                                        <th>Slider Name</th>
                                        <th>Slider Image</th>
                                        <th>Slider Heading 1</th>
                                        <th>Slider Heading 2</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sliders as $row_sliders)
                                    <tr>
                                        <td>{{$row_sliders->name}}</td>
                                        <td>
                                            <img style="width:100px" src="{{asset('slider/'.$row_sliders->image)}}"/>
                                            </td>
                                            
                                        <td>{{$row_sliders->text1}}</td>
                                        <td>{{$row_sliders->text2}}</td>
                                        <td>{{$row_sliders->status}}</td>
                                        <td> 
                                            <a data-toggle="modal" data-target="#sliderModalCenter{{$row_sliders->id}}"> Edit</a> | 
                                            <a onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('/admin/delete_slider/'.$row_sliders->id)}}"> Delete </a> 
                                            
                                            <!-- Modal -->
                                            <div class="modal fade" id="sliderModalCenter{{$row_sliders->id}}" tabindex="-1" role="dialog" aria-labelledby="sliderModalCenter{{$row_sliders->id}}" aria-hidden="true">
                                              <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">{{$row_sliders->text1}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                      <form method="POST" action="{{url('admin/edit_slider')}}"  enctype="multipart/form-data">
                                                          @csrf
                                                          <input type="hidden" value="{{$row_sliders->id}}" name="id" >
                                          
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                           
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label for="account-username">Slider Name</label>
                                                                            <input type="text" name="name" value="{{$row_sliders->name}}" class="form-control" id="account-username" required
                                                                                data-validation-required-message="This username field is required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                            
                                                                <div class="col-8">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label for="account-username">Slider Image : {{$row_sliders->image}}</label>
                                                                            <input type="file" name="slider_image" class="form-control" id="account-username" required
                                                                                data-validation-required-message="This username field is required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <img style="width:100px" src="{{asset('slider/'.$row_sliders->image)}}"/>
                                                                </div>
                            
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label for="account-username">Status</label>
                                                                            <input type="text" name="status" class="form-control" value="{{$row_sliders->status}}" id="account-username"
                                                                                data-validation-required-message="This username field is required">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12">
                                                                      <div class="form-group">
                                                                          <div class="controls">
                                                                              <label for="account-username">Heading One</label>
                                                                              <input type="text" name="text1" class="form-control" value="{{$row_sliders->text1}}" id="account-username" required
                                                                                  data-validation-required-message="This username field is required">
                                                                          </div>
                                                                      </div>
                                                                  </div>
                            
                                                                  <div class="col-12">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label for="account-username">Heading Two</label>
                                                                            <input type="text" name="text2" value="{{$row_sliders->text2}}" class="form-control" value="heading2" id="account-username" required
                                                                                data-validation-required-message="This username field is required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                            
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label for="account-username"> Button Link</label>
                                                                            <input type="text" name="contact_button_link" value="{{$row_sliders->contact_button_link}}" class="form-control" id="account-username" required
                                                                                data-validation-required-message="This username field is required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                    <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit
                                                                        Slider</button>
                                                                    <button type="button" class="btn btn-light" data-dismiss="modal" aria-label="Close">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                  </div>
                                                  
                                                </div>
                                              </div>
                                            </div>
                                        
                                        </td>
                                    </tr>

                                    @endforeach
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        
                                        <th>Slider Name</th>
                                        <th>Slider Image</th>
                                        
                                        <th>Slider Heading 1</th>
                                        <th>Slider Heading 2</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                          </div>
                          <div class="tab-pane fade " id="account-vertical-password" role="tabpanel"
                              aria-labelledby="account-pill-password" aria-expanded="false">
                               <!-- BEGIN: Content-->
                               <div class="media">
                                  
                                <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
                                    Create Video Section
                                </div>
                            </div>
                            <hr>
                            <form method="POST" action="{{url('admin/store_video')}}">
                              @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-username">Video Name</label>
                                                <input type="text" name="name" class="form-control" id="account-username" required
                                                    data-validation-required-message="This username field is required">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="col-12"> --}}
                                        {{-- <script>
                                          $(document).ready(function () {
                                            // Denotes total number of rows
                                            var videorowIdx = 0;
                                            // jQuery button click event to add a row
                                            $('#videoaddBtn').on('click', function () {
                                              // Adding a row inside the tbody.
                                              $('#videotbody').append(`<tr id="R${++videorowIdx}">
                                                  <td class="row-index text-center"><input type="text" name="slider_image[]" class="form-control"/></td>
                                                  <td class="row-index text-center"><input type="text" name="text_1[]" class="form-control"/></td>
                                                  <td class="row-index text-center"><input type="text" name="text_2[]" class="form-control"/></td>
                                                  <td class="row-index text-center"><input type="text" name="link[]" class="form-control"/></td>
                                                  <td class="text-center"><button class="btn btn-danger remove" type="button">Remove</button></td>
                                                  </tr>`);
                                            });
                                            // jQuery button click event to remove a row.
                                            $('#videotbody').on('click', '.remove', function () {
                                              // Getting all the rows next to the row
                                              // containing the clicked button
                                              var child = $(this).closest('tr').nextAll();
                                              // Iterating across all the rows 
                                              // obtained to change the index
                                              child.each(function () {
                                                // Getting <tr> id.
                                                var id = $(this).attr('id');
                                                // Getting the <p> inside the .row-index class.
                                                var idx = $(this).children('.row-index').children('p');
                                                // Gets the row number from <tr> id.
                                                var dig = parseInt(id.substring(1));
                                                // Modifying row index.
                                                idx.html(`Row ${dig - 1}`);
                                                // Modifying row id.
                                                $(this).attr('id', `R${dig - 1}`);
                                              });
                                              // Removing the current row.
                                              $(this).closest('tr').remove();
                                              // Decreasing total number of rows by 1.
                                              videorowIdx--;
                                            });
                                          });
                                        </script> --}}
                                      
                                        {{-- <div class="container pt-4">
                                          <button class="btn btn-md btn-primary" id="videoaddBtn" type="button"> Add Video </button>
                                          <div class="table-responsive">
                                            <table class="table table-bordered">
                                              <thead>
                                                <tr>
                                                  <th class="text-center">Video Title</th>
                                                  <th class="text-center">Video Link</th>
                                                  <th class="text-center">Button Label</th>
                                                  <th class="text-center">Button Link</th>
                                                  <th class="text-center">Remove Row</th>
                                                </tr>
                                              </thead>
                                              <tbody id="videotbody">
                                        
                                              </tbody>
                                            </table>
                                          </div>
                                          
                                        </div> --}}
                                  {{-- </div> --}}

                                 

                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-username">Video Title</label>
                                                <input type="text" name="video_title" class="form-control" id="account-username" required
                                                    data-validation-required-message="This username field is required">
                                            </div>
                                        </div>
                                    </div>

                                  <div class="col-12">
                                      <div class="form-group">
                                          <div class="controls">
                                              <label for="account-username">Video Link</label>
                                              <input type="text" name="video_link" class="form-control" id="account-username" required
                                                  data-validation-required-message="This username field is required">
                                          </div>
                                      </div>
                                  </div>
                                 
                                  <div class="col-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="account-username">Button Label</label>
                                            <input type="text" name="contact_button_label" class="form-control" id="account-username" required
                                                data-validation-required-message="This username field is required">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="account-username">Button Link</label>
                                            <input type="text" name="contact_button_link" class="form-control" id="account-username" required
                                                data-validation-required-message="This username field is required">
                                        </div>
                                    </div>
                                </div>

                                    
                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                        <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create
                                            Video</button>
                                        <button type="reset" class="btn btn-light">Cancel</button>
                                    </div>
                                </div>
                            </form>
                            <hr/>
                            <table class="table table-striped table-bordered dom-jQuery-events">
                              <thead>
                                  <tr>
                                      <th>Video Name</th>
                                      <th>Video Title</th>
                                      <th>Video Link</th>
                                      <th>Button Label</th>
                                      <th>Button Link</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach($videos as $row_videos)
                                  <tr>
                                      <td>{{$row_videos->name}}</td>
                                      <td>{{$row_videos->video_title}}</td>
                                      
                                      <td>{{$row_videos->video_link}}</td>
                                      <td>{{$row_videos->button_label}}</td>
                                      <td>{{$row_videos->contact_button_link}}</td>
                                      <td> 
                                        <a data-toggle="modal" data-target="#videoModalCenter{{$row_videos->id}}"> Edit</a> | 
                                            <a onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('/admin/delete_video/'.$row_videos->id)}} "> Delete </a> 
                                            <!-- Modal -->
                                            <div class="modal fade" id="videoModalCenter{{$row_videos->id}}" tabindex="-1" role="dialog" aria-labelledby="videoModalCenter{{$row_videos->id}}" aria-hidden="true">
                                              <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">{{$row_videos->video_title}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                      <form method="POST" action="{{url('admin/edit_video')}}"  enctype="multipart/form-data">
                                                          @csrf
                                                          <input type="hidden" value="{{$row_videos->id}}" name="id" >
                                          
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label for="account-username">Video Name</label>
                                                                            <input type="text" name="name" value="{{$row_videos->name}}" class="form-control" id="account-username" required
                                                                                data-validation-required-message="This username field is required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                            
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label for="account-username">Video Title</label>
                                                                            <input type="text" name="video_title" value="{{$row_videos->video_title}}" class="form-control" id="account-username" required
                                                                                data-validation-required-message="This username field is required">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                

                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label for="account-username">Video Link</label>
                                                                            <input type="text" name="video_link" value="{{$row_videos->video_link}}" class="form-control" id="account-username" required
                                                                                data-validation-required-message="This username field is required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                              
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label for="account-username">Contact Button Link</label>
                                                                            <input type="text" name="contact_button_link" value="{{$row_videos->contact_button_link}}" class="form-control" id="account-username" required
                                                                                data-validation-required-message="This username field is required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label for="account-username">Button Label</label>
                                                                            <input type="text" name="button_label" value="{{$row_videos->button_label}}" class="form-control" id="account-username" required
                                                                                data-validation-required-message="This username field is required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                    <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit Video</button>
                                                                    <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-light">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                  </div>
                                                  
                                                </div>
                                              </div>
                                            </div>
                                        

                                        </td>
                                  </tr>

                                  @endforeach
                                  
                              </tbody>
                              <tfoot>
                                  <tr>
                                      
                                      <th>Page Name</th>
                                      <th>Page Description</th>
                                      <th>Page Slug</th>
                                      <th>Status</th>
                                      <th>Action</th>
                                  </tr>
                              </tfoot>
                          </table>
                                    <!-- END: Content-->
  
                          </div>

                          <div class="tab-pane fade" id="account-vertical-info-services" role="tabpanel"
                              aria-labelledby="account-pill-info-services" aria-expanded="false">
                              <div class="media">
                                  
                                <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
                                    Services
                                </div>
                            </div>
                            <hr>
                            <img style="width:100%" src="{{asset('page_sections/services.png')}}"/>
                            
                            <hr/>
                           
                          </div>



                          <div class="tab-pane fade" id="account-vertical-info" role="tabpanel"
                              aria-labelledby="account-pill-info" aria-expanded="false">
                              <div class="media">
                                  
                                <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
                                    Create Case Study Section
                                </div>
                            </div>
                            <hr>
                            <img style="width:100%" src="{{asset('page_sections/case_study.png')}}"/>
                            <form method="POST" action="{{url('admin/store_case_study')}}" enctype="multipart/form-data">
                              @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-username">Case Study Name</label>
                                                <input type="text" name="name" class="form-control" id="account-username" required
                                                    data-validation-required-message="This username field is required">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <script>
                                          $(document).ready(function () {
                                            // Denotes total number of rows
                                            var caseStudyrowIdx = 0;
                                            // jQuery button click event to add a row
                                            $('#caseStudyaddBtn').on('click', function () {
                                              // Adding a row inside the tbody.
                                              $('#caseStudytbody').append(`<tr id="R${++caseStudyrowIdx}">
                                                  <td class="row-index text-center"><input type="file" name="case_study_image[]" class="form-control"/></td>
                                                  <td class="row-index text-center"><input type="text" name="case_study_title[]" class="form-control"/></td>
                                                  <td class="row-index text-center"><input type="text" name="short_description[]" class="form-control"/></td>
                                                  <td class="row-index text-center"><select name="service[]" class="form-control"><option>--select service--</option>@foreach($service as $row_service)<option value="{{$row_service->id}}">{{$row_service->menu_name}}</option>@endforeach</select></td>
                                                  <td class="row-index text-center"><select  name="sub_category[]" class="form-control"><option>--Select Sub Category--</option>@foreach($sub_category as $row_sub_category)<option value="{{$row_sub_category->id}}">{{$row_sub_category->item_name}}</option>@endforeach</select></td>
                                                  <td class="row-index text-center"><select  name="industry[]" class="form-control"><option>--Select Industry--</option><option value="1">industry 1</option><option value="2">industry 2</option><option value="3">industry 3</option></select></td>
                                                  <td class="text-center"><button class="btn btn-danger remove" type="button">Remove</button></td>
                                                  </tr>`);
                                            });
                                            // jQuery button click event to remove a row.
                                            $('#caseStudytbody').on('click', '.remove', function () {
                                              // Getting all the rows next to the row
                                              // containing the clicked button
                                              var child = $(this).closest('tr').nextAll();
                                              // Iterating across all the rows 
                                              // obtained to change the index
                                              child.each(function () {
                                                // Getting <tr> id.
                                                var id = $(this).attr('id');
                                                // Getting the <p> inside the .row-index class.
                                                var idx = $(this).children('.row-index').children('p');
                                                // Gets the row number from <tr> id.
                                                var dig = parseInt(id.substring(1));
                                                // Modifying row index.
                                                idx.html(`Row ${dig - 1}`);
                                                // Modifying row id.
                                                $(this).attr('id', `R${dig - 1}`);
                                              });
                                              // Removing the current row.
                                              $(this).closest('tr').remove();
                                              // Decreasing total number of rows by 1.
                                              caseStudyrowIdx--;
                                            });
                                          });
                                        </script>
                                      
                                        <div class="container pt-4">
                                          <button class="btn btn-md btn-primary" id="caseStudyaddBtn" type="button"> Add Case Study </button>
                                          <div class="table-responsive">
                                            <table class="table table-bordered">
                                              <thead>
                                                <tr>
                                                  <th class="text-center">Image Case Study</th>
                                                  <th class="text-center">Title</th>
                                                  <th class="text-center">Short Description</th>
                                                  <th class="text-center">Service</th>
                                                  <th class="text-center">Sub Category</th>
                                                  <th class="text-center">Industry</th>
                                                  <th class="text-center">Remove Row</th>
                                                </tr>
                                              </thead>
                                              <tbody id="caseStudytbody">
                                        
                                              </tbody>
                                            </table>
                                          </div>
                                          
                                        </div>
                                  </div>

                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                        <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create Case Study</button>
                                    </div>
                                </div>
                            </form>
                            <hr/>
                            <table class="table table-striped table-bordered dom-jQuery-events">
                              <thead>
                                  <tr>
                                      <th>Case Study Image</th>
                                      <th>Name</th>
                                      <th>Case Study Title</th>
                                      <th>Case Study Short Description</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach($case_study as $case_study_row)
                                  <tr>
                                    
                                      <td>
                                          <img style="width:100px;" src="{{asset('case_study/'.$case_study_row->image)}}"/>
                                          
                                          </td>
                                          <td>{{$case_study_row->name}}</td>
                                      <td>{{$case_study_row->title}}</td>
                                      <td>{{$case_study_row->short_description}}</td>
                                      <td> <a onclick='return confirm("Are you sure? You want to delete this Record")'  href="{{url('admin/delete_case_study/'.$case_study_row->id)}}"> Delete </a> 
                                    
                                        | <a data-toggle="modal" data-target="#caseStudyModalCenter{{$case_study_row->id}}"> Edit</a>
                                        <div class="modal fade" id="caseStudyModalCenter{{$case_study_row->id}}" tabindex="-1" role="dialog" aria-labelledby="caseStudyModalCenter{{$case_study_row->id}}" aria-hidden="true">
                                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Testing</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                  <form method="POST" action="{{url('admin/edit_case_study')}}"  enctype="multipart/form-data">
                                                      @csrf
                                                      <input type="hidden" value="{{$case_study_row->id}}" name="id" >
                                      
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">Case Study Name</label>
                                                                        <input type="text" name="name" class="form-control" value={{$case_study_row->name}} id="account-username" required
                                                                            data-validation-required-message="This username field is required">
                                                                    </div>
                                                                </div>
                                                            </div>
                        
                                                            <div class="col-8">
                                                                
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">Case Study Image</label>
                                                                        <input type="file" name="case_study_image" class="form-control" id="account-username" required
                                                                            data-validation-required-message="This username field is required">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="col-4">
                                                                <img style="width:100px" src="{{asset('case_study/'.$case_study_row->image)}}"/>
                                                            </div>
                          
                                                              <div class="col-12">
                                                                  <div class="form-group">
                                                                      <div class="controls">
                                                                          <label for="account-username">Title</label>
                                                                          <input type="text" name="title" value="{{$case_study_row->title}}" class="form-control" id="account-username" required
                                                                              data-validation-required-message="This username field is required">
                                                                      </div>
                                                                  </div>
                                                              </div>
                          
                                                              <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">Short Description</label>
                                                                        <input type="text" name="short_description" value="{{$case_study_row->short_description}}" class="form-control" id="account-username" required
                                                                            data-validation-required-message="This username field is required">
                                                                    </div>
                                                                </div>
                                                            </div>

                        
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username"> Button Link</label>
                                                                        <input type="text" name="link" value="{{$case_study_row->link}}" class="form-control" id="account-username" required
                                                                            data-validation-required-message="This username field is required">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit
                                                                    Slider</button>
                                                                <button type="button" class="btn btn-light" data-dismiss="modal" aria-label="Close">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                              </div>
                                              
                                            </div>
                                          </div>
                                        </div>
                                    </td>
                                  </tr>

                                  @endforeach
                                  
                              </tbody>
                              <tfoot>
                                  <tr>
                                    <th>Case Study Image</th>
                                    <th>Case Study Title</th>
                                    <th>Case Study Short Description</th>
                                    <th>Action</th>
                                  </tr>
                              </tfoot>
                          </table>
                          </div>

                          <!-- team -->
                          <div class="tab-pane fade" id="account-vertical-info-team" role="tabpanel"
                              aria-labelledby="account-pill-info-team" aria-expanded="false">
                              <div class="media">
                                  
                                <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
                                    Create Team Member
                                </div>
                            </div>
                            <hr>
                            <img style="width:100%" src="{{asset('page_sections/team.png')}}"/>
                            <form method="POST" action="{{url('admin/store_team')}}" enctype="multipart/form-data">
                              @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-username">Name Section</label>
                                                <input type="text" name="name" class="form-control" id="account-username" required
                                                    data-validation-required-message="This username field is required">
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-12">
                                        <script>
                                          $(document).ready(function () {
                                            // Denotes total number of rows
                                            var teamrowIdx = 0;
                                            // jQuery button click event to add a row
                                            $('#teamaddBtn').on('click', function () {
                                              // Adding a row inside the tbody.
                                              $('#teamtbody').append(`<tr id="R${++teamrowIdx}">
                                                  <td class="row-index text-center"><input type="file" name="team_member_image[]" class="form-control"/></td>
                                                  <td class="row-index text-center"><input type="text" name="team_member_title[]" class="form-control"/></td>
                                                  <td class="row-index text-center"><input type="text" name="team_member_designation[]" class="form-control"/></td>
                                                  <td class="text-center"><button class="btn btn-danger remove" type="button">Remove</button></td>
                                                  </tr>`);
                                            });
                                            // jQuery button click event to remove a row.
                                            $('#teamtbody').on('click', '.remove', function () {
                                              // Getting all the rows next to the row
                                              // containing the clicked button
                                              var child = $(this).closest('tr').nextAll();
                                              // Iterating across all the rows 
                                              // obtained to change the index
                                              child.each(function () {
                                                // Getting <tr> id.
                                                var id = $(this).attr('id');
                                                // Getting the <p> inside the .row-index class.
                                                var idx = $(this).children('.row-index').children('p');
                                                // Gets the row number from <tr> id.
                                                var dig = parseInt(id.substring(1));
                                                // Modifying row index.
                                                idx.html(`Row ${dig - 1}`);
                                                // Modifying row id.
                                                $(this).attr('id', `R${dig - 1}`);
                                              });
                                              // Removing the current row.
                                              $(this).closest('tr').remove();
                                              // Decreasing total number of rows by 1.
                                              teamrowIdx--;
                                            });
                                          });
                                        </script>
                                      
                                        <div class="container pt-4">
                                          <button class="btn btn-md btn-primary" id="teamaddBtn" type="button"> Add Team Member </button>
                                          <div class="table-responsive">
                                            <table class="table table-bordered">
                                              <thead>
                                                <tr>
                                                  <th class="text-center">Team Member Image</th>
                                                  <th class="text-center">Team Member Name</th>
                                                  <th class="text-center">Team Member Designation</th>
                                                  <th class="text-center">Remove Row</th>
                                                </tr>
                                              </thead>
                                              <tbody id="teamtbody">
                                        
                                              </tbody>
                                            </table>
                                          </div>
                                          
                                        </div>
                                  </div>

                                  

                                    
                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                        <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Add
                                            Team Member Info</button>
                                    </div>
                                </div>
                            </form>
                            <hr/>
                            <table class="table table-striped table-bordered dom-jQuery-events">
                              <thead>
                                  <tr>
                                    <th>Section Name</th>  
                                    <th>Team Member Image</th>
                                      <th>Team Member Title</th>
                                      <th>Team Member Designation</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach($team as $case_study_row)
                                  <tr>
                                    <td>{{$case_study_row->section_name}}</td>
                                      <td>
                                          <img style="width:100px;" src="{{asset('team/'.$case_study_row->image)}}"/>
                                          
                                          </td>
                                      <td>{{$case_study_row->name}}</td>
                                      <td>{{$case_study_row->designation}}</td>
                                      <td> <a onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('admin/delete_team/'.$case_study_row->id)}}"> Delete </a> 
                                        | <a data-toggle="modal" data-target="#teamStudyModalCenter{{$case_study_row->id}}"> Edit</a>
                                        <div class="modal fade" id="teamStudyModalCenter{{$case_study_row->id}}" tabindex="-1" role="dialog" aria-labelledby="teamStudyModalCenter{{$case_study_row->id}}" aria-hidden="true">
                                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">{{$case_study_row->name}}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                  <form method="POST" action="{{url('admin/edit_team')}}"  enctype="multipart/form-data">
                                                      @csrf
                                                      <input type="hidden" value="{{$case_study_row->id}}" name="id" >
                                      
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">Section Name</label>
                                                                            <input type="file" name="section_name" class="form-control" value="{{$case_study_row->section_name}}"
                                                                            id="account-username" 
                                                                                data-validation-required-message="This username field is required">
                                                                    </div>
                                                                </div>
                                                            </div>
                        
                                                            <div class="col-8">
                                                                
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label for="account-username">Team Member Image</label>
                                                                            <input type="file" name="team_member_image" class="form-control" id="account-username" required
                                                                                data-validation-required-message="This username field is required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                              

                                                            </div>
                                                            <div class="col-4">
                                                                <img style="width:100px" src="{{asset('team/'.$case_study_row->image)}}"/>
                                                            </div>
                        
                                                          
                                                            
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">Team Member Name</label>
                                                                        <input type="text" name="team_member_title" value="{{$case_study_row->name}}" class="form-control" id="account-username" required
                                                                            data-validation-required-message="This username field is required">
                                                                    </div>
                                                                </div>
                                                            </div>
                        
                                                            <div class="col-12">
                                                              <div class="form-group">
                                                                  <div class="controls">
                                                                      <label for="account-username">Team Member Designation</label>
                                                                      <input type="text" name="team_member_designation" value="{{$case_study_row->designation}}" class="form-control" id="account-username" required
                                                                          data-validation-required-message="This username field is required">
                                                                  </div>
                                                              </div>
                                                          </div>
                        
                                                            
                                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit
                                                                    Team</button>
                                                                <button type="button" class="btn btn-light" data-dismiss="modal" aria-label="Close">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                              </div>
                                              
                                            </div>
                                          </div>
                                        </div>

                                    </td>
                                  </tr>

                                  @endforeach
                                  
                              </tbody>
                              <tfoot>
                                  <tr>
                                    <th>Section Name</th>
                                    <th>Case Study Image</th>
                                    <th>Case Study Title</th>
                                    <th>Case Study Short Description</th>
                                    <th>Action</th>
                                  </tr>
                              </tfoot>
                          </table>
                          </div>
                          <div class="tab-pane fade " id="account-vertical-social" role="tabpanel"
                              aria-labelledby="account-pill-social" aria-expanded="false">
                              
                              <div class="media">
                                  
                                <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
                                    Create Clients and Partners
                                </div>
                            </div>
                            <hr>
                            <img style="width:100%" src="{{asset('page_sections/client_and_partner.png')}}"/>
                            <form method="POST" action="{{url('admin/store_client_and_partner')}}"  enctype="multipart/form-data">
                              @csrf
                                <div class="row">
                                  <div class="col-12">
                                      <div class="form-group">
                                          <div class="controls">
                                            
                                          </div>
                                      </div>
                                  </div>


                                  <div class="col-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="account-username">Name Section</label>
                                            <input type="text" name="name" class="form-control" id="account-username" required
                                                data-validation-required-message="This username field is required">
                                        </div>
                                    </div>
                                </div>



                                <div class="col-12">
                                    <script>
                                      $(document).ready(function () {
                                        // Denotes total number of rows
                                        var clientrowIdx = 0;
                                        // jQuery button click event to add a row
                                        $('#clientaddBtn').on('click', function () {
                                          // Adding a row inside the tbody.
                                          $('#clienttbody').append(`<tr id="R${++clientrowIdx}">
                                              <td class="row-index text-center"><input type="file" name="clientAndParter_image[]" class="form-control"/></td>
                                              <td class="text-center"><button class="btn btn-danger remove" type="button">Remove</button></td>
                                              </tr>`);
                                        });
                                        // jQuery button click event to remove a row.
                                        $('#clienttbody').on('click', '.remove', function () {
                                          // Getting all the rows next to the row
                                          // containing the clicked button
                                          var child = $(this).closest('tr').nextAll();
                                          // Iterating across all the rows 
                                          // obtained to change the index
                                          child.each(function () {
                                            // Getting <tr> id.
                                            var id = $(this).attr('id');
                                            // Getting the <p> inside the .row-index class.
                                            var idx = $(this).children('.row-index').children('p');
                                            // Gets the row number from <tr> id.
                                            var dig = parseInt(id.substring(1));
                                            // Modifying row index.
                                            idx.html(`Row ${dig - 1}`);
                                            // Modifying row id.
                                            $(this).attr('id', `R${dig - 1}`);
                                          });
                                          // Removing the current row.
                                          $(this).closest('tr').remove();
                                          // Decreasing total number of rows by 1.
                                          clientrowIdx--;
                                        });
                                      });
                                    </script>
                                  
                                    <div class="container pt-4">
                                      <button class="btn btn-md btn-primary" id="clientaddBtn" type="button"> Add Client and Partner </button>
                                      <div class="table-responsive">
                                        <table class="table table-bordered">
                                          <thead>
                                            <tr>
                                              <th class="text-center">Client and Partner Image</th>
                                              <th class="text-center">Remove Row</th>
                                            </tr>
                                          </thead>
                                          <tbody id="clienttbody">
                                    
                                          </tbody>
                                        </table>
                                      </div>
                                      
                                    </div>
                              </div>

  
                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                        <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create
                                            Client and Partner Image </button>
                                        <button type="reset" class="btn btn-light">Cancel</button>
                                    </div>
                                </div>
                            </form>
                            <hr/>
                            <table class="table table-striped table-bordered dom-jQuery-events">
                              <thead>
                                  <tr>
                                      <th>Section Name</th>
                                      <th>Client and Parter Image</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach($clientandpartnerimage as $row_clientandpartnerimage)
                                  <tr>
                                      
                                        <td>
                                            {{$row_clientandpartnerimage->name}}
                                            </td>
                                      <td>
                                          <img style="width:100px;" src="{{asset('client_and_partner/'.$row_clientandpartnerimage->image)}}"/>
                                          </td>
                                      <td> <a onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('admin/delete_client_and_partner/'.$row_clientandpartnerimage->id)}}"> Delete </a> 
                                        | <a data-toggle="modal" data-target="#clientAndPartnerModalCenter{{$row_clientandpartnerimage->id}}"> Edit</a>
                                        <div class="modal fade" id="clientAndPartnerModalCenter{{$row_clientandpartnerimage->id}}" tabindex="-1" role="dialog" aria-labelledby="clientAndPartnerModalCenter{{$row_clientandpartnerimage->id}}" aria-hidden="true">
                                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Client and Partner</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                  <form method="POST" action="{{url('admin/edit_client_and_partner')}}"  enctype="multipart/form-data">
                                                      @csrf
                                                      <input type="hidden" value="{{$row_clientandpartnerimage->id}}" name="id" >
                                      
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                        
                                                            <div class="col-8">
                                                                
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">Client and Partner Image</label>
                                                                        <input type="file" name="clientAndParter_image" class="form-control" id="account-username" required
                                                                            data-validation-required-message="This username field is required">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="col-4">
                                                                <img style="width:100px" src="{{asset('client_and_partner/'.$row_clientandpartnerimage->image)}}"/>
                                                            </div>
                        
                                                          
                        
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username"> Button Link</label>
                                                                        <input type="text" name="contact_button_link" value="{{$row_sliders->contact_button_link}}" class="form-control" id="account-username" required
                                                                            data-validation-required-message="This username field is required">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit
                                                                    Client and Partner</button>
                                                                <button type="button" class="btn btn-light" data-dismiss="modal" aria-label="Close">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                              </div>
                                              
                                            </div>
                                          </div>
                                        </div>
                                    </td>
                                  </tr>

                                  @endforeach
                                  
                              </tbody>
                              <tfoot>
                                  <tr>
                                    <th>Client and Parter Image</th>
                                    <th>Action</th>
                                  </tr>
                              </tfoot>
                          </table>    
                            
                          </div>
                          <div class="tab-pane fade" id="account-vertical-connections" role="tabpanel"
                              aria-labelledby="account-pill-connections" aria-expanded="false">
                            <div class="media">
                                <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
                                    Create Industries Section
                                </div>
                            </div>
                            <hr/>
                            <img style="width:100%" src="{{asset('page_sections/industries.png')}}"/>
                            
                            <form method="POST" action="{{url('admin/store_industries')}}"  enctype="multipart/form-data">
                                @csrf
                                  <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                             
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-username">Section Name</label>
                                                <input type="text" name="name" class="form-control" id="account-username" required
                                                    data-validation-required-message="This username field is required">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <script>
                                          $(document).ready(function () {
                                            // Denotes total number of rows
                                            var industryrowIdx = 0;
                                            // jQuery button click event to add a row
                                            $('#industryaddBtn').on('click', function () {
                                              // Adding a row inside the tbody.
                                              $('#industrytbody').append(`<tr id="R${++industryrowIdx}">
                                                  <td class="row-index text-center"><input type="file" name="industry_image[]" class="form-control"/></td>
                                                  <td class="row-index text-center"><input type="text" name="title[]" class="form-control"/></td>
                                                  <td class="row-index text-center"><input type="text" name="short_description[]" class="form-control"/></td>
                                                  <td class="row-index text-center"><select name="service[]" class="form-control"><option>--select service--</option>@foreach($service as $row_service)<option value="{{$row_service->id}}">{{$row_service->menu_name}}</option>@endforeach</select></td>
                                                  <td class="row-index text-center"><select  name="sub_category[]" class="form-control"><option>--Select Sub Category--</option>@foreach($sub_category as $row_sub_category)<option value="{{$row_sub_category->id}}">{{$row_sub_category->item_name}}</option>@endforeach</select></td>
                                                  <td class="text-center"><button class="btn btn-danger remove" type="button">Remove</button></td>
                                                  </tr>`);
                                            });
                                            // jQuery button click event to remove a row.
                                            $('#industrytbody').on('click', '.remove', function () {
                                              // Getting all the rows next to the row
                                              // containing the clicked button
                                              var child = $(this).closest('tr').nextAll();
                                              // Iterating across all the rows 
                                              // obtained to change the index
                                              child.each(function () {
                                                // Getting <tr> id.
                                                var id = $(this).attr('id');
                                                // Getting the <p> inside the .row-index class.
                                                var idx = $(this).children('.row-index').children('p');
                                                // Gets the row number from <tr> id.
                                                var dig = parseInt(id.substring(1));
                                                // Modifying row index.
                                                idx.html(`Row ${dig - 1}`);
                                                // Modifying row id.
                                                $(this).attr('id', `R${dig - 1}`);
                                              });
                                              // Removing the current row.
                                              $(this).closest('tr').remove();
                                              // Decreasing total number of rows by 1.
                                              industryrowIdx--;
                                            });
                                          });
                                        </script>
                                      
                                        <div class="container pt-4">
                                          <button class="btn btn-md btn-primary" id="industryaddBtn" type="button"> Add Industry </button>
                                          <div class="table-responsive">
                                            <table class="table table-bordered">
                                              <thead>
                                                <tr>
                                                  <th class="text-center">Image Industry</th>
                                                  <th class="text-center">Title</th>
                                                  <th class="text-center">Short Description</th>
                                                  <th class="text-center">Service</th>
                                                  <th class="text-center">Sub Category</th>
                                                  <th class="text-center">Remove Row</th>
                                                </tr>
                                              </thead>
                                              <tbody id="industrytbody">
                                        
                                              </tbody>
                                            </table>
                                          </div>
                                          
                                        </div>
                                  </div>

                                      
                                      <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                          <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create
                                              Industries </button>
                                          <button type="reset" class="btn btn-light">Cancel</button>
                                      </div>
                                  </div>
                              </form>
                              <hr/>
                              <table class="table table-striped table-bordered dom-jQuery-events">
                                <thead>
                                    <tr>
                                        
                                        <th>Industry Name</th>
                                        <th>Industry Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($industries as $row_industries)
                                    <tr>
                                        
                                          <td>
                                            {{$row_industries->title}}
                                            </td>
                                        <td>
                                            <img style="width:100px;" src="{{asset('industries/'.$row_industries->image)}}"/>
                                            </td>
                                        <td> <a onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('admin/delete_industry/'.$row_industries->id)}}"> Delete </a> 
                                        
                                            | <a data-toggle="modal" data-target="#industryModalCenter{{$row_industries->id}}"> Edit</a>
                                            <div class="modal fade" id="industryModalCenter{{$row_industries->id}}" tabindex="-1" role="dialog" aria-labelledby="industryModalCenter{{$row_industries->id}}" aria-hidden="true">
                                              <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Industry Edit</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                      <form method="POST" action="{{url('admin/edit_industry')}}"  enctype="multipart/form-data">
                                                          @csrf
                                                          <input type="hidden" value="{{$row_industries->id}}" name="id" >
                                          
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                            
                                                                <div class="col-8">
                                                                    
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label for="account-username">Industry Image</label>
                                                                            <input type="file" name="industry_image" class="form-control" id="account-username" required
                                                                                data-validation-required-message="This username field is required">
                                                                        </div>
                                                                    </div>
    
                                                                </div>
                                                                <div class="col-4">
                                                                    <img style="width:100px" src="{{asset('industries/'.$row_industries->image)}}"/>
                                                                </div>
                            
                                                              
                            
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label for="account-username"> Button Link</label>
                                                                            <input type="text" name="contact_button_link" value="{{$row_industries->link}}" class="form-control" id="account-username" required
                                                                                data-validation-required-message="This username field is required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                    <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit Industry</button>
                                                                    <button type="button" class="btn btn-light" data-dismiss="modal" aria-label="Close">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                  </div>
                                                  
                                                </div>
                                              </div>
                                            </div>

                                        </td>
                                    </tr>
  
                                    @endforeach
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                      
                                      <th>Client and Parter Image</th>
                                      <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>    
                             
                              
                          </div>

                          <div class="tab-pane fade" id="account-vertical-news" role="tabpanel"
                              aria-labelledby="account-pill-news" aria-expanded="false">
                            <div class="media">
                                <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
                                    News & Opinions
                                </div>
                            </div>
                            <hr/>
                            <img style="width:100%" src="{{asset('page_sections/new_and_opinions.png')}}"/>
                           
                            <form method="POST" action="{{url('admin/store_news')}}"  enctype="multipart/form-data">
                                @csrf
                                  <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                              
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-username">News Title</label>
                                                <input type="text" name="news_title" class="form-control" id="account-username" required
                                                    data-validation-required-message="This username field is required">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-username">News Short Description</label>
                                                <input type="text" name="news_short_description" class="form-control" id="account-username" required
                                                    data-validation-required-message="This username field is required">
                                            </div>
                                        </div>
                                    </div>
  
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-username">News Image</label>
                                                <input type="file" name="news_image" class="form-control" id="account-username" required
                                                    data-validation-required-message="This username field is required">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-username">Link</label>
                                                <input type="text" name="link" class="form-control" id="account-username" required
                                                    data-validation-required-message="This username field is required">
                                            </div>
                                        </div>
                                    </div>
                                      
                                      <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                          <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create
                                              News and Opinions </button>
                                          <button type="reset" class="btn btn-light">Cancel</button>
                                      </div>
                                  </div>
                              </form>
                              <hr/>
                              <table class="table table-striped table-bordered dom-jQuery-events">
                                <thead>
                                    <tr>
                                        
                                        <th>News Title</th>
                                        <th>News Image</th>
                                        <th>Short Description</th>
                                        <th>Link</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($news as $row_news)
                                    <tr>
                                        
                                          <td>
                                            {{$row_news->title}}
                                            </td>
                                        <td>
                                            <img style="width:100px;" src="{{asset('news_and_opinions/'.$row_news->image)}}"/>
                                            </td>
                                            <td>
                                                {{$row_news->description}}
                                            </td>
                                            <td>
                                                {{$row_news->link}}
                                            </td>
                                        <td> <a onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('admin/delete_news/'.$row_news->id)}}"> Delete </a> 
                                            | <a data-toggle="modal" data-target="#newsModalCenter{{$row_news->id}}"> Edit</a>
                                            <div class="modal fade" id="newsModalCenter{{$row_news->id}}" tabindex="-1" role="dialog" aria-labelledby="newsModalCenter{{$row_news->id}}" aria-hidden="true">
                                              <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Testing</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                      <form method="POST" action="{{url('admin/edit_news')}}"  enctype="multipart/form-data">
                                                          @csrf
                                                          <input type="hidden" value="{{$row_news->id}}" name="id" >
                                          
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                            
                                                                <div class="col-8">
                                                                    
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <div class="controls">
                                                                                <label for="account-username">News and Opinions Image</label>
                                                                                <input type="file" name="news_image" class="form-control" id="account-username" required
                                                                                    data-validation-required-message="This username field is required">
                                                                            </div>
                                                                        </div>
                                                                    </div>
    
                                                                </div>
                                                                <div class="col-4">
                                                                    <img style="width:100px" src="{{asset('news_and_opinions/'.$row_news->image)}}"/>
                                                                </div>
                            
                                                              
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label for="account-username">News Title</label>
                                                                            <input type="text" value={{$row_news->title}} name="news_title" class="form-control" id="account-username" required
                                                                                data-validation-required-message="This username field is required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                            
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label for="account-username">News Short Description</label>
                                                                            <input type="text" name="news_short_description" value="{{$row_news->description}}" class="form-control" id="account-username" required
                                                                                data-validation-required-message="This username field is required">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label for="account-username"> Button Link</label>
                                                                            <input type="text" name="link" value="{{$row_news->link}}" class="form-control" id="account-username" required
                                                                                data-validation-required-message="This username field is required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                    <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit
                                                                        Slider</button>
                                                                    <button type="button" class="btn btn-light" data-dismiss="modal" aria-label="Close">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                  </div>
                                                  
                                                </div>
                                              </div>
                                            </div>

                                        </td>
                                    </tr>
  
                                    @endforeach
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                      
                                      <th>News Title</th>
                                      <th>News Image</th>
                                      <th>Short Description</th>
                                      <th>Link</th>
                                      <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>    
                           
                          </div>

                          <div class="tab-pane fade" id="account-vertical-request" role="tabpanel"
                          aria-labelledby="account-pill-request" aria-expanded="false">
                                <div class="media">
                                    <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
                                        Request a Meeting
                                    </div>
                                </div>
                                <hr/>
                                <img style="width:100%" src="{{asset('page_sections/request.png')}}"/>
                                <form method="POST" action="{{url('admin/store_request')}}"  enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="account-username">Section Name</label>
                                                    <input type="text" name="name" class="form-control" id="account-username" required
                                                        data-validation-required-message="This username field is required">
                                                </div>
                                            </div>
                                        </div>
    
    
                                        <div class="col-12">
                                            <script>
                                              $(document).ready(function () {
                                                // Denotes total number of rows
                                                var requestrowIdx = 0;
                                                // jQuery button click event to add a row
                                                $('#requestaddBtn').on('click', function () {
                                                  // Adding a row inside the tbody.
                                                  $('#requesttbody').append(`<tr id="R${++requestrowIdx}">
                                                      <td class="row-index text-center"><input type="text" name="request_title[]" class="form-control"/></td>
                                                      <td class="text-center"><button class="btn btn-danger remove" type="button">Remove</button></td>
                                                      </tr>`);
                                                });
                                                // jQuery button click event to remove a row.
                                                $('#requesttbody').on('click', '.remove', function () {
                                                  // Getting all the rows next to the row
                                                  // containing the clicked button
                                                  var child = $(this).closest('tr').nextAll();
                                                  // Iterating across all the rows 
                                                  // obtained to change the index
                                                  child.each(function () {
                                                    // Getting <tr> id.
                                                    var id = $(this).attr('id');
                                                    // Getting the <p> inside the .row-index class.
                                                    var idx = $(this).children('.row-index').children('p');
                                                    // Gets the row number from <tr> id.
                                                    var dig = parseInt(id.substring(1));
                                                    // Modifying row index.
                                                    idx.html(`Row ${dig - 1}`);
                                                    // Modifying row id.
                                                    $(this).attr('id', `R${dig - 1}`);
                                                  });
                                                  // Removing the current row.
                                                  $(this).closest('tr').remove();
                                                  // Decreasing total number of rows by 1.
                                                  requestrowIdx--;
                                                });
                                              });
                                            </script>
                                          
                                            <div class="container pt-4">
                                              <button class="btn btn-md btn-primary" id="requestaddBtn" type="button"> Add Request Meeting </button>
                                              <div class="table-responsive">
                                                <table class="table table-bordered">
                                                  <thead>
                                                    <tr>
                                                      <th class="text-center">Title</th>
                                                      <th class="text-center">Remove Row</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody id="requesttbody">
                                            
                                                  </tbody>
                                                </table>
                                              </div>
                                              
                                            </div>
                                      </div>
                                        
                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                            <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create
                                                Request a Meeting </button>
                                            <button type="reset" class="btn btn-light">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                                <hr/>
                                <table class="table table-striped table-bordered dom-jQuery-events">
                                    <thead>
                                        <tr>
                                            <th>Section Name</th>
                                            <th>Request A Meeting Title</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($request as $row_request)
                                        <tr>
                                            
                                            <td>
                                                {{$row_request->name}}
                                                </td>
                                            <td>
                                                {{$row_request->title}}
                                                </td>
                                                
                                                
                                            <td> <a onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('admin/delete_request/'.$row_request->id)}}"> Delete </a> 
                                                | <a data-toggle="modal" data-target="#requestModalCenter{{$row_request->id}}"> Edit</a>
                                                <div class="modal fade" id="requestModalCenter{{$row_request->id}}" tabindex="-1" role="dialog" aria-labelledby="requestModalCenter{{$row_request->id}}" aria-hidden="true">
                                                  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">{{$row_request->title}}</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                        </button>
                                                      </div>
                                                      <div class="modal-body">
                                                          <form method="POST" action="{{url('admin/edit_request')}}"  enctype="multipart/form-data">
                                                              @csrf
                                                              <input type="hidden" value="{{$row_request->id}}" name="id" >
                                              
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <div class="controls">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                
                                                                  
                                
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <div class="controls">
                                                                                <label for="account-username">Title</label>
                                                                                <input type="text" name="title" value="{{$row_request->title}}"  class="form-control" id="account-username" required
                                                                                    data-validation-required-message="This username field is required">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                            
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <div class="controls">
                                                                                <label for="account-username">Link</label>
                                                                                <input type="text" name="link" value="{{$row_request->link}}"  class="form-control" id="account-username" required
                                                                                    data-validation-required-message="This username field is required">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                        <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit
                                                                            Request a Meeting</button>
                                                                        <button type="button" class="btn btn-light" data-dismiss="modal" aria-label="Close">Cancel</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                      </div>
                                                      
                                                    </div>
                                                  </div>
                                                </div>

                                            </td>
                                        </tr>

                                        @endforeach
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            
                                            <th>Section Name</th>
                                            <th>Request A Meeting Title</th>
                                            <th>Link</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>    
                      </div>

                     
                      <div class="tab-pane fade" id="account-vertical-style_1" role="tabpanel"
                      aria-labelledby="account-pill-style_1" aria-expanded="false">
                            <div class="media">
                                <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
                                    Paragraph Left Image Right Text
                                </div>
                            </div>
                            <hr/>
                            <img style="width:100%" src="{{asset('page_sections/paragraph_left_image_right_text.png')}}"/>
                            
                            
                            <form method="POST" action="{{url('admin/store_para_style_1')}}"  enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                            
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-username">Section Name</label>
                                                <input type="text" name="name" class="form-control" id="account-username" required
                                                    data-validation-required-message="This username field is required">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <script>
                                          $(document).ready(function () {
                                            // Denotes total number of rows
                                            var paraStyleOnerowIdx = 0;
                                            // jQuery button click event to add a row
                                            $('#paraStyleOneaddBtn').on('click', function () {
                                              // Adding a row inside the tbody.
                                              $('#paraStyleOnetbody').append(`<tr id="R${++paraStyleOnerowIdx}">
                                                    <td class="row-index text-center"><input type="file" name="image[]" class="form-control"/></td>
                                                  <td class="row-index text-center"><input type="text" name="title[]" class="form-control"/></td>
                                                  <td class="row-index text-center"><input type="text" name="paragraph[]" class="form-control"/></td>
                                                  <td class="text-center"><button class="btn btn-danger remove" type="button">Remove</button></td>
                                                  </tr>`);
                                            });
                                            // jQuery button click event to remove a row.
                                            $('#paraStyleOnetbody').on('click', '.remove', function () {
                                              // Getting all the rows next to the row
                                              // containing the clicked button
                                              var child = $(this).closest('tr').nextAll();
                                              // Iterating across all the rows 
                                              // obtained to change the index
                                              child.each(function () {
                                                // Getting <tr> id.
                                                var id = $(this).attr('id');
                                                // Getting the <p> inside the .row-index class.
                                                var idx = $(this).children('.row-index').children('p');
                                                // Gets the row number from <tr> id.
                                                var dig = parseInt(id.substring(1));
                                                // Modifying row index.
                                                idx.html(`Row ${dig - 1}`);
                                                // Modifying row id.
                                                $(this).attr('id', `R${dig - 1}`);
                                              });
                                              // Removing the current row.
                                              $(this).closest('tr').remove();
                                              // Decreasing total number of rows by 1.
                                              paraStyleOnerowIdx--;
                                            });
                                          });
                                        </script>
                                      
                                        <div class="container pt-4">
                                          <button class="btn btn-md btn-primary" id="paraStyleOneaddBtn" type="button"> Add Para Style One </button>
                                          <div class="table-responsive">
                                            <table class="table table-bordered">
                                              <thead>
                                                <tr>
                                                    <th class="text-center">Image</th>
                                                    <th class="text-center">Title</th>
                                                    <th class="text-center">Paragraph</th>
                                                  <th class="text-center">Remove Row</th>
                                                </tr>
                                              </thead>
                                              <tbody id="paraStyleOnetbody">
                                        
                                              </tbody>
                                            </table>
                                          </div>
                                          
                                        </div>
                                  </div>

                                   
                                    
                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                        <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create
                                            Paragraph style 1 </button>
                                        <button type="reset" class="btn btn-light">Cancel</button>
                                    </div>
                                </div>
                            </form>
                            <hr/>
                            <table class="table table-striped table-bordered dom-jQuery-events">
                                <thead>
                                    <tr>
                                        
                                        <th>Section Name</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Paragraph</th>
                                        <th>Link</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($para_style_1 as $row_para_style_1)
                                    <tr>
                                        
                                        <td>
                                            {{$row_para_style_1->name}}
                                            </td>
                                        <td>
                                            <img style="width:100px" src="{{asset('para_style_1/'.$row_para_style_1->image)}}"/>
                                        </td>
                                        <td>
                                            {{$row_para_style_1->title}}
                                            </td>
                                        
                                            <td>
                                                {{$row_para_style_1->title}}
                                            </td>
                                            <td>
                                                {{$row_para_style_1->paragraph}}
                                            </td>
                                            <td>
                                                {{$row_para_style_1->link}}
                                            </td>
                                        <td> <a onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('admin/delete_para_style_1/'.$row_para_style_1->id)}}"> Delete </a> 
                                            | <a data-toggle="modal" data-target="#para_style_1_ModalCenter{{$row_para_style_1->id}}"> Edit</a>
                                            <div class="modal fade" id="para_style_1_ModalCenter{{$row_para_style_1->id}}" tabindex="-1" role="dialog" aria-labelledby="para_style_1_ModalCenter{{$row_para_style_1->id}}" aria-hidden="true">
                                              <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">{{$row_para_style_1->title}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                      <form method="POST" action="{{url('admin/edit_para_style_1')}}"  enctype="multipart/form-data">
                                                          @csrf
                                                          <input type="hidden" value="{{$row_para_style_1->id}}" name="id" >
                                          
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label for="account-username">Section Name</label>
                                                                            <input type="text" name="name" value="{{$row_para_style_1->name}}" class="form-control" id="account-username" required
                                                                                data-validation-required-message="This username field is required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                            
                                                              
                            
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label for="account-username">Title</label>
                                                                            <input type="text" name="title" value="{{$row_para_style_1->title}}" class="form-control" id="account-username" required
                                                                                data-validation-required-message="This username field is required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label for="account-username">image</label>
                                                                            <input type="file" name="image" class="form-control" id="account-username" required
                                                                                data-validation-required-message="This username field is required">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <img class="img-responsive" src="{{asset('para_style_1/'.$row_para_style_1->image)}}"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                            
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label for="account-username">Paragraph</label>
                                                                            <input type="text" name="paragraph" value="{{$row_para_style_1->paragraph}}" class="form-control" id="account-username" required
                                                                                data-validation-required-message="This username field is required">
                                                                        </div>
                                                                    </div>
                                                                </div>
                            
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label for="account-username">Link</label>
                                                                            <input type="text" name="link" value="{{$row_para_style_1->link}}" class="form-control" id="account-username" required
                                                                                data-validation-required-message="This username field is required">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                    <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit
                                                                        Para Style 1</button>
                                                                    <button type="button" class="btn btn-light" data-dismiss="modal" aria-label="Close">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                  </div>
                                                  
                                                </div>
                                              </div>
                                            </div>                                        
                                        </td>
                                    </tr>

                                    @endforeach
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        
                                        <th>Section Name</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Paragraph</th>
                                        <th>Link</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>    
                  </div>

                  <div class="tab-pane fade" id="account-vertical-style_2" role="tabpanel"
                  aria-labelledby="account-pill-style_2" aria-expanded="false">
                        <div class="media">
                            <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
                                Paragraph Right Image Left Text
                            </div>
                        </div>
                        <hr/>
                        <img style="width:100%" src="{{asset('page_sections/paragraph_right_image_left_text.png')}}"/>
                        
                        
                         
                        <form method="POST" action="{{url('admin/store_para_style_2')}}"  enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="controls">
                                        
                                        </div>
                                    </div>
                                </div>


                                
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="account-username">Section Name</label>
                                            <input type="text" name="name" class="form-control" id="account-username" required
                                                data-validation-required-message="This username field is required">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <script>
                                      $(document).ready(function () {
                                        // Denotes total number of rows
                                        var paraStyleTworowIdx = 0;
                                        // jQuery button click event to add a row
                                        $('#paraStyleTwoaddBtn').on('click', function () {
                                          // Adding a row inside the tbody.
                                          $('#paraStyleTwotbody').append(`<tr id="R${++paraStyleTworowIdx}">
                                                <td class="row-index text-center"><input type="file" name="image[]" class="form-control"/></td>

                                              <td class="row-index text-center"><input type="text" name="title[]" class="form-control"/></td>
                                              <td class="row-index text-center"><input type="text" name="paragraph[]" class="form-control"/></td>
                                              <td class="row-index text-center"><select class="form-control" name="flex_row_reverse[]">
                                                <option value=""> NO </option>
                                                <option value="flex_row_reverse"> Yes </option>
                                            </select></td>


                                              <td class="text-center"><button class="btn btn-danger remove" type="button">Remove</button></td>
                                              </tr>`);
                                        });
                                        // jQuery button click event to remove a row.
                                        $('#paraStyleTwotbody').on('click', '.remove', function () {
                                          // Getting all the rows next to the row
                                          // containing the clicked button
                                          var child = $(this).closest('tr').nextAll();
                                          // Iterating across all the rows 
                                          // obtained to change the index
                                          child.each(function () {
                                            // Getting <tr> id.
                                            var id = $(this).attr('id');
                                            // Getting the <p> inside the .row-index class.
                                            var idx = $(this).children('.row-index').children('p');
                                            // Gets the row number from <tr> id.
                                            var dig = parseInt(id.substring(1));
                                            // Modifying row index.
                                            idx.html(`Row ${dig - 1}`);
                                            // Modifying row id.
                                            $(this).attr('id', `R${dig - 1}`);
                                          });
                                          // Removing the current row.
                                          $(this).closest('tr').remove();
                                          // Decreasing total number of rows by 1.
                                          paraStyleTworowIdx--;
                                        });
                                      });
                                    </script>
                                  
                                    <div class="container pt-4">
                                      <button class="btn btn-md btn-primary" id="paraStyleTwoaddBtn" type="button"> Add Para Style Two </button>
                                      <div class="table-responsive">
                                        <table class="table table-bordered">
                                          <thead>
                                            <tr>
                                                <th class="text-center">Image</th>
                                                <th class="text-center">Title</th>
                                                <th class="text-center">Paragraph</th>
                                                <th class="text-center">Change Position</th>
                                                <th class="text-center">Remove Row</th>
                                            </tr>
                                          </thead>
                                          <tbody id="paraStyleTwotbody">
                                    
                                          </tbody>
                                        </table>
                                      </div>
                                      
                                    </div>
                              </div>


                                
                                
                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                    <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create
                                        Paragraph style 2 </button>
                                    <button type="reset" class="btn btn-light">Cancel</button>
                                </div>
                            </div>
                        </form>
                        <hr/>
                        <table class="table table-striped table-bordered dom-jQuery-events">
                            <thead>
                                <tr>
                                    
                                    <th>Section Name</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Paragraph</th>
                                    <th>Change Position</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($para_style_2 as $row_para_style_2)
                                <tr>
                                    
                                    <td>
                                        {{$row_para_style_2->name}}
                                        </td>
                                    <td>
                                        <img style="width:100px" src="{{asset('para_style_2/'.$row_para_style_2->image)}}"/>
                                    </td>
                                    
                                    
                                        <td>
                                            {{$row_para_style_2->title}}
                                        </td>
                                        <td>
                                            {{$row_para_style_2->paragraph}}
                                        </td>
                                        <td>
                                            @if($row_para_style_2->flex_row_reverse == NULL)
                                            NO
                                            @else()
                                            YES
                                            @endif
                                        </td>
                                        
                                    <td> <a onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('admin/delete_para_style_2/'.$row_para_style_2->id)}}"> Delete </a> 
                                        | <a data-toggle="modal" data-target="#para_style_2_ModalCenter{{$row_para_style_2->id}}"> Edit</a>
                                        <div class="modal fade" id="para_style_2_ModalCenter{{$row_para_style_2->id}}" tabindex="-1" role="dialog" aria-labelledby="para_style_2_ModalCenter{{$row_para_style_2->id}}" aria-hidden="true">
                                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">{{$row_para_style_2->title}}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                  <form method="POST" action="{{url('admin/edit_para_style_2')}}"  enctype="multipart/form-data">
                                                      @csrf
                                                      <input type="hidden" value="{{$row_para_style_2->id}}" name="id" >
                                      
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                       
                                                                    </div>
                                                                </div>
                                                            </div>
                        
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">Section Name</label>
                                                                        <input type="text" name="name" value="{{$row_para_style_2->name}}" class="form-control" id="account-username" required
                                                                            data-validation-required-message="This username field is required">
                                                                    </div>
                                                                </div>
                                                            </div>

                        
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">Title</label>
                                                                        <input type="text" name="title" value="{{$row_para_style_2->title}}" class="form-control" id="account-username" required
                                                                            data-validation-required-message="This username field is required">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">image</label>
                                                                        <input type="file" name="image" class="form-control" id="account-username" required
                                                                            data-validation-required-message="This username field is required">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <img class="img-responsive" src="{{asset('para_style_2/'.$row_para_style_2->image)}}"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                        
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">Paragraph</label>
                                                                        <input type="text" name="paragraph" value="{{$row_para_style_2->paragraph}}" class="form-control" id="account-username" required
                                                                            data-validation-required-message="This username field is required">
                                                                    </div>
                                                                </div>
                                                            </div>
                        
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">Link</label>
                                                                        <input type="text" name="link" value="{{$row_para_style_2->link}}" class="form-control" id="account-username" required
                                                                            data-validation-required-message="This username field is required">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit
                                                                    Para Style 2</button>
                                                                <button type="button" class="btn btn-light" data-dismiss="modal" aria-label="Close">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                              </div>
                                              
                                            </div>
                                          </div>
                                        </div>            
                                    </td>
                                </tr>

                                @endforeach
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Section Name</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Paragraph</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>    
                        
               
              </div>
              <div class="tab-pane fade" id="account-vertical-style_3" role="tabpanel"
              aria-labelledby="account-pill-style_3" aria-expanded="false">
                    <div class="media">
                        <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
                            Paragraph Two Column Image Top
                        </div>
                    </div>
                    <hr/>
                    <img style="width:100%" src="{{asset('page_sections/paragraph_two_column_image_top_title_text.png')}}"/>
                    
                    
                   
                    <form method="POST" action="{{url('admin/store_para_style_3')}}"  enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="controls">
                                    
                                    </div>
                                </div>
                            </div>


                            
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="account-username">Section Name</label>
                                        <input type="text" name="name" class="form-control" id="account-username" required
                                            data-validation-required-message="This username field is required">
                                    </div>
                                </div>
                            </div>


                            <div class="col-12">
                                <script>
                                  $(document).ready(function () {
                                    // Denotes total number of rows
                                    var paraStyleThreerowIdx = 0;
                                    // jQuery button click event to add a row
                                    $('#paraStyleThreeaddBtn').on('click', function () {
                                      // Adding a row inside the tbody.
                                      $('#paraStyleThreetbody').append(`<tr id="R${++paraStyleThreerowIdx}">
                                            <td class="row-index text-center"><input type="file" name="image[]" class="form-control"/></td>
                                          <td class="row-index text-center"><input type="text" name="title[]" class="form-control"/></td>
                                          <td class="row-index text-center"><input type="text" name="paragraph[]" class="form-control"/></td>
                                          <td class="text-center"><button class="btn btn-danger remove" type="button">Remove</button></td>
                                          </tr>`);
                                    });
                                    // jQuery button click event to remove a row.
                                    $('#paraStyleThreetbody').on('click', '.remove', function () {
                                      // Getting all the rows next to the row
                                      // containing the clicked button
                                      var child = $(this).closest('tr').nextAll();
                                      // Iterating across all the rows 
                                      // obtained to change the index
                                      child.each(function () {
                                        // Getting <tr> id.
                                        var id = $(this).attr('id');
                                        // Getting the <p> inside the .row-index class.
                                        var idx = $(this).children('.row-index').children('p');
                                        // Gets the row number from <tr> id.
                                        var dig = parseInt(id.substring(1));
                                        // Modifying row index.
                                        idx.html(`Row ${dig - 1}`);
                                        // Modifying row id.
                                        $(this).attr('id', `R${dig - 1}`);
                                      });
                                      // Removing the current row.
                                      $(this).closest('tr').remove();
                                      // Decreasing total number of rows by 1.
                                      paraStyleThreerowIdx--;
                                    });
                                  });
                                </script>
                              
                                <div class="container pt-4">
                                  <button class="btn btn-md btn-primary" id="paraStyleThreeaddBtn" type="button"> Add Para Style Three </button>
                                  <div class="table-responsive">
                                    <table class="table table-bordered">
                                      <thead>
                                        <tr>
                                            <th class="text-center">Image</th>
                                            <th class="text-center">Title</th>
                                            <th class="text-center">Paragraph</th>
                                          <th class="text-center">Remove Row</th>
                                        </tr>
                                      </thead>
                                      <tbody id="paraStyleThreetbody">
                                
                                      </tbody>
                                    </table>
                                  </div>
                                  
                                </div>
                          </div>

                            
                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create
                                    Paragraph style 3 </button>
                                <button type="reset" class="btn btn-light">Cancel</button>
                            </div>
                        </div>
                    </form>
                    <hr/>
                    <table class="table table-striped table-bordered dom-jQuery-events">
                        <thead>
                            <tr>
                                
                                <th>Section Name</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Paragraph</th>
                                <th>Link</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($para_style_3 as $row_para_style_3)
                            <tr>
                                
                                <td>
                                    {{$row_para_style_3->name}}
                                    </td>
                                <td>
                                    <img style="width:100px" src="{{asset('para_style_3/'.$row_para_style_3->image)}}"/>
                                </td>
                                <td>
                                    {{$row_para_style_3->title}}
                                    </td>
                                
                                    <td>
                                        {{$row_para_style_3->title}}
                                    </td>
                                    <td>
                                        {{$row_para_style_3->paragraph}}
                                    </td>
                                    
                                <td> <a onclick='return confirm("Are you sure? You want to delete this Record")'  href="{{url('admin/delete_para_style_3/'.$row_para_style_3->id)}}"> Delete </a> 
                                
                                    | <a data-toggle="modal" data-target="#para_style_3_ModalCenter{{$row_para_style_3->id}}"> Edit</a>
                                    <div class="modal fade" id="para_style_3_ModalCenter{{$row_para_style_3->id}}" tabindex="-1" role="dialog" aria-labelledby="para_style_3_ModalCenter{{$row_para_style_3->id}}" aria-hidden="true">
                                      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">{{$row_para_style_3->title}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                              <form method="POST" action="{{url('admin/edit_para_style_3')}}"  enctype="multipart/form-data">
                                                  @csrf
                                                  <input type="hidden" value="{{$row_para_style_3->id}}" name="id" >
                                  
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                    
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-username">Section Name</label>
                                                                    <input type="text" name="name" value="{{$row_para_style_3->name}}" class="form-control" id="account-username" required
                                                                        data-validation-required-message="This username field is required">
                                                                </div>
                                                            </div>
                                                        </div>

                    
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-username">Title</label>
                                                                    <input type="text" name="title" value="{{$row_para_style_3->title}}" class="form-control" id="account-username" required
                                                                        data-validation-required-message="This username field is required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-username">image</label>
                                                                    <input type="file" name="image" class="form-control" id="account-username" required
                                                                        data-validation-required-message="This username field is required">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <img class="img-responsive" src="{{asset('para_style_3/'.$row_para_style_3->image)}}"/>
                                                                </div>
                                                            </div>
                                                        </div>
                    
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-username">Paragraph</label>
                                                                    <input type="text" name="paragraph" value="{{$row_para_style_3->paragraph}}" class="form-control" id="account-username" required
                                                                        data-validation-required-message="This username field is required">
                                                                </div>
                                                            </div>
                                                        </div>
                    
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-username">Link</label>
                                                                    <input type="text" name="link" value="{{$row_para_style_3->link}}" class="form-control" id="account-username" required
                                                                        data-validation-required-message="This username field is required">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                            <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit
                                                                Para Style 3</button>
                                                            <button type="button" class="btn btn-light" data-dismiss="modal" aria-label="Close">Cancel</button>
                                                        </div>
                                                    </div>
                                                </form>
                                          </div>
                                          
                                        </div>
                                      </div>
                                    </div>            

                                </td>
                            </tr>

                            @endforeach
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                
                                <th>Image</th>
                                <th>Title</th>
                                <th>Paragraph</th>
                                <th>Link</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>    
                    
           
          </div>

          <div class="tab-pane fade" id="account-vertical-style_4" role="tabpanel"
              aria-labelledby="account-pill-style_4" aria-expanded="false">
                    <div class="media">
                        <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
                            Paragraph with Button
                        </div>
                    </div>
                    <hr/>
                    <img style="width:100%" src="{{asset('page_sections/paragraph_with_button.png')}}"/>
                    
                    
                   
                    <form method="POST" action="{{url('admin/store_para_style_4')}}"  enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="controls">
                                    
                                    </div>
                                </div>
                            </div>

                            
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="account-username">Section Name</label>
                                        <input type="text" name="name" class="form-control" id="account-username" required
                                            data-validation-required-message="This username field is required">
                                    </div>
                                </div>
                            </div>


                            <div class="col-12">
                                <script>
                                  $(document).ready(function () {
                                    // Denotes total number of rows
                                    var paraStyleFourrowIdx = 0;
                                    // jQuery button click event to add a row
                                    $('#paraStyleFouraddBtn').on('click', function () {
                                      // Adding a row inside the tbody.
                                      $('#paraStyleFourtbody').append(`<tr id="R${++paraStyleFourrowIdx}">
                                          <td class="row-index text-center"><input type="text" name="paragraph[]" class="form-control"/></td>
                                          <td class="text-center"><button class="btn btn-danger remove" type="button">Remove</button></td>
                                          </tr>`);
                                    });
                                    // jQuery button click event to remove a row.
                                    $('#paraStyleFourtbody').on('click', '.remove', function () {
                                      // Getting all the rows next to the row
                                      // containing the clicked button
                                      var child = $(this).closest('tr').nextAll();
                                      // Iterating across all the rows 
                                      // obtained to change the index
                                      child.each(function () {
                                        // Getting <tr> id.
                                        var id = $(this).attr('id');
                                        // Getting the <p> inside the .row-index class.
                                        var idx = $(this).children('.row-index').children('p');
                                        // Gets the row number from <tr> id.
                                        var dig = parseInt(id.substring(1));
                                        // Modifying row index.
                                        idx.html(`Row ${dig - 1}`);
                                        // Modifying row id.
                                        $(this).attr('id', `R${dig - 1}`);
                                      });
                                      // Removing the current row.
                                      $(this).closest('tr').remove();
                                      // Decreasing total number of rows by 1.
                                      paraStyleFourrowIdx--;
                                    });
                                  });
                                </script>
                              
                                <div class="container pt-4">
                                  <button class="btn btn-md btn-primary" id="paraStyleFouraddBtn" type="button"> Add Para Style Four </button>
                                  <div class="table-responsive">
                                    <table class="table table-bordered">
                                      <thead>
                                        <tr>
                                            <th class="text-center">TEXT</th>
                                          <th class="text-center">Remove Row</th>
                                        </tr>
                                      </thead>
                                      <tbody id="paraStyleFourtbody">
                                
                                      </tbody>
                                    </table>
                                  </div>
                                  
                                </div>
                          </div>

                            
                            
                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create
                                    Paragraph style 4 </button>
                                <button type="reset" class="btn btn-light">Cancel</button>
                            </div>
                        </div>
                    </form>
                    <hr/>
                    <table class="table table-striped table-bordered dom-jQuery-events">
                        <thead>
                            <tr>
                                <th>Page Section</th>
                                <th>Text</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($para_style_4 as $row_para_style_4)
                            <tr>
                                
                                <td>
                                    {{$row_para_style_4->name}}
                                </td>
                                
                                    <td>
                                        {{$row_para_style_4->title}}
                                    </td>
                                   
                                    </td>
                                <td> <a onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('admin/delete_para_style_4/'.$row_para_style_4->id)}}">Delete </a> 
                                    | <a data-toggle="modal" data-target="#para_style_4_ModalCenter{{$row_para_style_4->id}}"> Edit</a>
                                    <div class="modal fade" id="para_style_4_ModalCenter{{$row_para_style_4->id}}" tabindex="-1" role="dialog" aria-labelledby="para_style_4_ModalCenter{{$row_para_style_4->id}}" aria-hidden="true">
                                      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">{{$row_para_style_4->title}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                              <form method="POST" action="{{url('admin/edit_para_style_4')}}"  enctype="multipart/form-data">
                                                  @csrf
                                                  <input type="hidden" value="{{$row_para_style_4->id}}" name="id" >
                                  
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                    
                                                      
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-username">Section Name</label>
                                                                    <input type="text" name="name" value="{{$row_para_style_4->name}}" class="form-control" id="account-username" required
                                                                        data-validation-required-message="This username field is required">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-username">Title</label>
                                                                    <input type="text" name="title" value="{{$row_para_style_4->title}}" class="form-control" id="account-username" required
                                                                        data-validation-required-message="This username field is required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                       
                    
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-username">Text</label>
                                                                    <input type="text" name="paragraph" value="{{$row_para_style_4->title}}" class="form-control" id="account-username" required
                                                                        data-validation-required-message="This username field is required">
                                                                </div>
                                                            </div>
                                                        </div>
                    
                                                        

                                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                            <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit
                                                                Para Style 4</button>
                                                            <button type="button" class="btn btn-light" data-dismiss="modal" aria-label="Close">Cancel</button>
                                                        </div>
                                                    </div>
                                                </form>
                                          </div>
                                          
                                        </div>
                                      </div>
                                    </div>            
                                </td>
                            </tr>

                            @endforeach
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Section Name</th>
                                <th>Text</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>    
                    
           
          </div>

          <div class="tab-pane fade" id="account-vertical-style_5" role="tabpanel"
          aria-labelledby="account-pill-style_5" aria-expanded="false">
                <div class="media">
                    <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
                        Paragraph with main heading left right text 
                    </div>
                </div>
                <hr/>
                <img style="width:100%" src="{{asset('page_sections/paragraph_with_main_heading_left_right_text_column.png')}}"/>
                
                
                 
                <form method="POST" action="{{url('admin/store_para_style_5')}}"  enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                               
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-12">
                            <div class="form-group">
                                <div class="controls">
                                    <label for="account-username">Section Name</label>
                                    <input type="text" name="name" class="form-control" id="account-username" required
                                        data-validation-required-message="This username field is required">
                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                            <script>
                              $(document).ready(function () {
                                // Denotes total number of rows
                                var paraStyleFiverowIdx = 0;
                                // jQuery button click event to add a row
                                $('#paraStyleFiveaddBtn').on('click', function () {
                                  // Adding a row inside the tbody.
                                  $('#paraStyleFivetbody').append(`<tr id="R${++paraStyleFiverowIdx}">
                                        <td class="row-index text-center"><input type="text" name="heading[]" class="form-control"/></td>
                                      <td class="row-index text-center"><input type="text" name="text_left[]" class="form-control"/></td>
                                      <td class="row-index text-center"><input type="text" name="text_right[]" class="form-control"/></td>
                                      <td class="text-center"><button class="btn btn-danger remove" type="button">Remove</button></td>
                                      </tr>`);
                                });
                                // jQuery button click event to remove a row.
                                $('#paraStyleFivetbody').on('click', '.remove', function () {
                                  // Getting all the rows next to the row
                                  // containing the clicked button
                                  var child = $(this).closest('tr').nextAll();
                                  // Iterating across all the rows 
                                  // obtained to change the index
                                  child.each(function () {
                                    // Getting <tr> id.
                                    var id = $(this).attr('id');
                                    // Getting the <p> inside the .row-index class.
                                    var idx = $(this).children('.row-index').children('p');
                                    // Gets the row number from <tr> id.
                                    var dig = parseInt(id.substring(1));
                                    // Modifying row index.
                                    idx.html(`Row ${dig - 1}`);
                                    // Modifying row id.
                                    $(this).attr('id', `R${dig - 1}`);
                                  });
                                  // Removing the current row.
                                  $(this).closest('tr').remove();
                                  // Decreasing total number of rows by 1.
                                  paraStyleFiverowIdx--;
                                });
                              });
                            </script>
                          
                            <div class="container pt-4">
                              <button class="btn btn-md btn-primary" id="paraStyleFiveaddBtn" type="button"> Add Para Style Five </button>
                              <div class="table-responsive">
                                <table class="table table-bordered">
                                  <thead>
                                    <tr>
                                        <th class="text-center">Heading</th>
                                        <th class="text-center">Text Left</th>
                                        <th class="text-center">Text Right</th>
                                      <th class="text-center">Remove Row</th>
                                    </tr>
                                  </thead>
                                  <tbody id="paraStyleFivetbody">
                            
                                  </tbody>
                                </table>
                              </div>
                              
                            </div>
                      </div>

                         
                        
                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                            <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create
                                Paragraph style 5 </button>
                            <button type="reset" class="btn btn-light">Cancel</button>
                        </div>
                    </div>
                </form>
                <hr/>
                <table class="table table-striped table-bordered dom-jQuery-events">
                    <thead>
                        <tr>
                            
                            <th>Section Name</th>
                            <th>Heading</th>
                            <th>Text Left</th>
                            <th>Text Right</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($para_style_5 as $row_para_style_5)
                        <tr>
                            
                            
                            <td>{{$row_para_style_5->name}}</td>
                                <td>
                                    {{$row_para_style_5->heading}}
                                </td>
                                <td>
                                    {{$row_para_style_5->text_left}}
                                </td>
                                <td>
                                    {{$row_para_style_5->text_right}}
                                </td>
                                
                            <td> <a onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('admin/delete_para_style_5/'.$row_para_style_5->id)}}">Delete </a> 
                                | <a data-toggle="modal" data-target="#para_style_5_ModalCenter{{$row_para_style_5->id}}"> Edit</a>
                                <div class="modal fade" id="para_style_5_ModalCenter{{$row_para_style_5->id}}" tabindex="-1" role="dialog" aria-labelledby="para_style_5_ModalCenter{{$row_para_style_5->id}}" aria-hidden="true">
                                  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">{{$row_para_style_5->title}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                          <form method="POST" action="{{url('admin/edit_para_style_5')}}"  enctype="multipart/form-data">
                                              @csrf
                                              <input type="hidden" value="{{$row_para_style_5->id}}" name="id" >
                              
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                
                                                  
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-username">Section Name</label>
                                                                <input type="text" name="name" value="{{$row_para_style_5->name}}" class="form-control" id="account-username" required
                                                                    data-validation-required-message="This username field is required">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-username">Heading</label>
                                                                <input type="text" name="heading" value="{{$row_para_style_5->heading}}" class="form-control" id="account-username" required
                                                                    data-validation-required-message="This username field is required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-username">Paragraph Right</label>
                                                                <input type="text" name="text_right" value="{{$row_para_style_5->text_right}}" class="form-control" id="account-username" required
                                                                    data-validation-required-message="This username field is required">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="account-username">Paragraph Left</label>
                                                                <input type="text" name="text_left" value="{{$row_para_style_5->text_left}}" class="form-control" id="account-username" required
                                                                    data-validation-required-message="This username field is required">
                                                            </div>
                                                        </div>
                                                    </div>
                
                                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                        <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit
                                                            Para Style 5</button>
                                                        <button type="button" class="btn btn-light" data-dismiss="modal" aria-label="Close">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                      </div>
                                      
                                    </div>
                                  </div>
                                </div>            
                            </td>
                        </tr>

                        @endforeach
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            
                            <th>Image</th>
                            <th>Title</th>
                            <th>Paragraph</th>
                            <th>Link</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>     
      </div>

      <div class="tab-pane fade" id="account-vertical-image-bellow-text-and-button" role="tabpanel"
      aria-labelledby="account-pill-image-bellow-text-and-button" aria-expanded="false">
            <div class="media">
                <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
                    Image below text and button
                </div>
            </div>
            <hr/>
            <img style="width:100%" src="{{asset('page_sections/image_below_text_and_button.png')}}"/>
            
            
             
            <form method="POST" action="{{url('admin/store_section_15')}}"  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <div class="controls">
                           
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <div class="controls">
                                <label for="account-username">Slider Name</label>
                                <input type="text" name="name" class="form-control" id="account-username" required
                                    data-validation-required-message="This username field is required">
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <script>
                          $(document).ready(function () {
                            // Denotes total number of rows
                            var section15rowIdx = 0;
                            // jQuery button click event to add a row
                            $('#section15addBtn').on('click', function () {
                              // Adding a row inside the tbody.
                              $('#section15tbody').append(`<tr id="R${++section15rowIdx}">
                                  <td class="row-index text-center"><input type="file" name="image[]" class="form-control"/></td>
                                  <td class="row-index text-center"><input type="text" name="heading1[]" class="form-control"/></td>
                                  <td class="row-index text-center"><input type="text" name="heading2[]" class="form-control"/></td>
                                  <td class="row-index text-center"><input type="text" name="text[]" class="form-control"/></td>
                                  <td class="text-center"><button class="btn btn-danger remove" type="button">Remove</button></td>
                                  </tr>`);
                            });
                            // jQuery button click event to remove a row.
                            $('#section15tbody').on('click', '.remove', function () {
                              // Getting all the rows next to the row
                              // containing the clicked button
                              var child = $(this).closest('tr').nextAll();
                              // Iterating across all the rows 
                              // obtained to change the index
                              child.each(function () {
                                // Getting <tr> id.
                                var id = $(this).attr('id');
                                // Getting the <p> inside the .row-index class.
                                var idx = $(this).children('.row-index').children('p');
                                // Gets the row number from <tr> id.
                                var dig = parseInt(id.substring(1));
                                // Modifying row index.
                                idx.html(`Row ${dig - 1}`);
                                // Modifying row id.
                                $(this).attr('id', `R${dig - 1}`);
                              });
                              // Removing the current row.
                              $(this).closest('tr').remove();
                              // Decreasing total number of rows by 1.
                              section15rowIdx--;
                            });
                          });
                        </script>
                      
                        <div class="container pt-4">
                          <button class="btn btn-md btn-primary" id="section15addBtn" type="button"> Add new Section  </button>
                          <div class="table-responsive">
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th class="text-center">Image</th>
                                  <th class="text-center">Heading 1</th>
                                  <th class="text-center">Heading 2</th>
                                  <th class="text-center">Text</th>
                                  <th class="text-center">Remove Row</th>
                                </tr>
                              </thead>
                              <tbody id="section15tbody">
                        
                              </tbody>
                            </table>
                          </div>
                          
                        </div>
                  </div>



                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                        <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create
                            Section 15 </button>
                        <button type="reset" class="btn btn-light">Cancel</button>
                    </div>
                </div>
            </form>
            <hr/>
            <table class="table table-striped table-bordered dom-jQuery-events">
                <thead>
                    <tr>
                        
                        <th>Section Name</th>
                        <th>Heading 1</th>
                        <th>Heading 2</th>
                        <th>Image</th>
                        
                        <th>Text</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($section_15 as $row_section_15)
                    <tr>
                        <td>{{$row_section_15->name}}</td>
                        <td>{{$row_section_15->heading1}}</td>
                        <td>{{$row_section_15->heading2}}</td>
                            <td>
                                <img style="width:100px" src="{{asset('section_15/'.$row_section_15->image)}}"/>
                            </td>
                            <td>
                                {{$row_section_15->text}}
                            </td>
                        <td> <a onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('admin/delete_section_15/'.$row_section_15->id)}}">Delete </a> 
                            | <a data-toggle="modal" data-target="#para_style_5_ModalCenter{{$row_section_15->id}}"> Edit</a>
                            <div class="modal fade" id="para_style_5_ModalCenter{{$row_section_15->id}}" tabindex="-1" role="dialog" aria-labelledby="para_style_5_ModalCenter{{$row_section_15->id}}" aria-hidden="true">
                              <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">{{$row_section_15->text}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                      <form method="POST" action="{{url('admin/edit_para_style_5')}}"  enctype="multipart/form-data">
                                          @csrf
                                          <input type="hidden" value="{{$row_para_style_5->id}}" name="id" >
                          
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
            
                                              
            
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-username">Heading</label>
                                                            <input type="text" name="title" value="{{$row_para_style_5->title}}" class="form-control" id="account-username" required
                                                                data-validation-required-message="This username field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-username">Paragraph Right</label>
                                                            <input type="text" name="paragraph" value="{{$row_para_style_5->paragraph}}" class="form-control" id="account-username" required
                                                                data-validation-required-message="This username field is required">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-username">Paragraph Left</label>
                                                            <input type="text" name="paragraph_left" value="{{$row_para_style_5->para_left}}" class="form-control" id="account-username" required
                                                                data-validation-required-message="This username field is required">
                                                        </div>
                                                    </div>
                                                </div>
            
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-username">Link</label>
                                                            <input type="text" name="link" value="{{$row_para_style_5->link}}" class="form-control" id="account-username" required
                                                                data-validation-required-message="This username field is required">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                    <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit
                                                        Para Style 5</button>
                                                    <button type="button" class="btn btn-light" data-dismiss="modal" aria-label="Close">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                  </div>
                                  
                                </div>
                              </div>
                            </div>            
                        </td>
                    </tr>

                    @endforeach
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>Page Title</th>
                        <th>Section Name</th>
                        <th>Image</th>
                        <th>Text</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>     
  </div>

  <div class="tab-pane fade" id="account-vertical-paragraph-with-icon" role="tabpanel"
  aria-labelledby="account-pill-paragraph-with-icon" aria-expanded="false">
        <div class="media">
            <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
                Paragraph with icon
            </div>
        </div>
        <hr/>
        <img style="width:100%" src="{{asset('page_sections/paragraph_with_icon.png')}}"/>
        
        
         
        <form method="POST" action="{{url('admin/store_section_16')}}"  enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="controls">
                        
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <div class="controls">
                            <label for="account-username">Slider Name</label>
                            <input type="text" name="name" class="form-control" id="account-username" required
                                data-validation-required-message="This username field is required">
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <script>
                      $(document).ready(function () {
                        // Denotes total number of rows
                        var section16rowIdx = 0;
                        // jQuery button click event to add a row
                        $('#section16addBtn').on('click', function () {
                          // Adding a row inside the tbody.
                          $('#section16tbody').append(`<tr id="R${++section16rowIdx}">
                              <td class="row-index text-center"><input type="file" name="image[]" class="form-control"/></td>
                              <td class="row-index text-center"><input type="text" name="text[]" class="form-control"/></td>
                              <td class="row-index text-center"><input type="text" name="heading[]" class="form-control"/></td>
                              <td class="text-center"><button class="btn btn-danger remove" type="button">Remove</button></td>
                              </tr>`);
                        });
                        // jQuery button click event to remove a row.
                        $('#section16tbody').on('click', '.remove', function () {
                          // Getting all the rows next to the row
                          // containing the clicked button
                          var child = $(this).closest('tr').nextAll();
                          // Iterating across all the rows 
                          // obtained to change the index
                          child.each(function () {
                            // Getting <tr> id.
                            var id = $(this).attr('id');
                            // Getting the <p> inside the .row-index class.
                            var idx = $(this).children('.row-index').children('p');
                            // Gets the row number from <tr> id.
                            var dig = parseInt(id.substring(1));
                            // Modifying row index.
                            idx.html(`Row ${dig - 1}`);
                            // Modifying row id.
                            $(this).attr('id', `R${dig - 1}`);
                          });
                          // Removing the current row.
                          $(this).closest('tr').remove();
                          // Decreasing total number of rows by 1.
                          section16rowIdx--;
                        });
                      });
                    </script>
                  
                    <div class="container pt-4">
                      <button class="btn btn-md btn-primary" id="section16addBtn" type="button"> Add new Section 16  </button>
                      <div class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th class="text-center">Icon</th>
                              <th class="text-center">Text</th>
                              <th class="text-center">Heading</th>
                              <th class="text-center">Remove Row</th>
                            </tr>
                          </thead>
                          <tbody id="section16tbody">
                    
                          </tbody>
                        </table>
                      </div>
                      
                    </div>
              </div>
                
                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                    <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create
                        Section 16 </button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                </div>
            </div>
        </form>
        <hr/>
        <table class="table table-striped table-bordered dom-jQuery-events">
            <thead>
                <tr>
                    
                    <th>Section Name</th>
                    <th>Icon</th>
                    <th>Text</th>
                    <th>Heading</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($section_16 as $row_section_16)
                <tr>
                    
                    
                    <td>{{$row_section_16->name}}</td>
                        <td>
                            {{$row_section_16->image}}
                        </td>
                        <td>
                            {{$row_section_16->text}}
                        </td>
                        <td>
                            {{$row_section_16->heading}}
                        </td>
                        
                    <td> <a onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('admin/delete_section_16/'.$row_section_16->id)}}">Delete </a> 
                        | <a data-toggle="modal" data-target="#section_15_ModalCenter{{$row_section_16->id}}"> Edit</a>
                        <div class="modal fade" id="section_15_ModalCenter{{$row_section_16->id}}" tabindex="-1" role="dialog" aria-labelledby="section_15_ModalCenter{{$row_section_16->id}}" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">{{$row_section_16->text}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                  <form method="POST" action="{{url('admin/edit_section_16')}}"  enctype="multipart/form-data">
                                      @csrf
                                      <input type="hidden" value="{{$row_section_16->id}}" name="id" >
                      
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                       
                                                    </div>
                                                </div>
                                            </div>
        
                                          
        
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">Heading</label>
                                                        <input type="text" name="title" value="{{$row_para_style_5->title}}" class="form-control" id="account-username" required
                                                            data-validation-required-message="This username field is required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">Paragraph Right</label>
                                                        <input type="text" name="paragraph" value="{{$row_para_style_5->paragraph}}" class="form-control" id="account-username" required
                                                            data-validation-required-message="This username field is required">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">Paragraph Left</label>
                                                        <input type="text" name="paragraph_left" value="{{$row_para_style_5->para_left}}" class="form-control" id="account-username" required
                                                            data-validation-required-message="This username field is required">
                                                    </div>
                                                </div>
                                            </div>
        
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">Link</label>
                                                        <input type="text" name="link" value="{{$row_para_style_5->link}}" class="form-control" id="account-username" required
                                                            data-validation-required-message="This username field is required">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit
                                                    Para Style 5</button>
                                                <button type="button" class="btn btn-light" data-dismiss="modal" aria-label="Close">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                              </div>
                              
                            </div>
                          </div>
                        </div>            
                    </td>
                </tr>

                @endforeach
                
            </tbody>
            <tfoot>
                <tr>
                    
                    <th>Image</th>
                    <th>Title</th>
                    <th>Paragraph</th>
                    <th>Link</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>     
</div>


<div class="tab-pane fade" id="account-vertical-section_17" role="tabpanel"
aria-labelledby="account-pill-section_17" aria-expanded="false">
      <div class="media">
          <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
              Section 17
          </div>
      </div>
      <hr/>
      <img style="width:100%" src="{{asset('page_sections/section_17.png')}}"/>
      
      
     
      <form method="POST" action="{{url('admin/store_section_17')}}"  enctype="multipart/form-data">
          @csrf
          <div class="row">
              <div class="col-12">
                  <div class="form-group">
                      <div class="controls">
                      
                      </div>
                  </div>
              </div>

              
              <div class="col-12">
                  <div class="form-group">
                      <div class="controls">
                          <label for="account-username">Section Name</label>
                          <input type="text" name="name" class="form-control" id="account-username" required
                              data-validation-required-message="This username field is required">
                      </div>
                  </div>
              </div>


              <div class="col-12">
                  <script>
                    $(document).ready(function () {
                      // Denotes total number of rows
                      var section_17_rowIdx = 0;
                      // jQuery button click event to add a row
                      $('#section_17_addBtn').on('click', function () {
                        // Adding a row inside the tbody.
                        $('#section_17_tbody').append(`<tr id="R${++section_17_rowIdx}">
                            <td class="row-index text-center"><input type="text" name="paragraph[]" class="form-control"/></td>
                            <td class="text-center"><button class="btn btn-danger remove" type="button">Remove</button></td>
                            </tr>`);
                      });
                      // jQuery button click event to remove a row.
                      $('#section_17_tbody').on('click', '.remove', function () {
                        // Getting all the rows next to the row
                        // containing the clicked button
                        var child = $(this).closest('tr').nextAll();
                        // Iterating across all the rows 
                        // obtained to change the index
                        child.each(function () {
                          // Getting <tr> id.
                          var id = $(this).attr('id');
                          // Getting the <p> inside the .row-index class.
                          var idx = $(this).children('.row-index').children('p');
                          // Gets the row number from <tr> id.
                          var dig = parseInt(id.substring(1));
                          // Modifying row index.
                          idx.html(`Row ${dig - 1}`);
                          // Modifying row id.
                          $(this).attr('id', `R${dig - 1}`);
                        });
                        // Removing the current row.
                        $(this).closest('tr').remove();
                        // Decreasing total number of rows by 1.
                        section_17_rowIdx--;
                      });
                    });
                  </script>
                
                  <div class="container pt-4">
                    <button class="btn btn-md btn-primary" id="section_17_addBtn" type="button"> Add Section 17 </button>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                              <th class="text-center">TEXT</th>
                            <th class="text-center">Remove Row</th>
                          </tr>
                        </thead>
                        <tbody id="section_17_tbody">
                  
                        </tbody>
                      </table>
                    </div>
                    
                  </div>
            </div>

              
              
              <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                  <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create
                      Section 17 </button>
                  <button type="reset" class="btn btn-light">Cancel</button>
              </div>
          </div>
      </form>
      <hr/>
      <table class="table table-striped table-bordered dom-jQuery-events">
          <thead>
              <tr>
                  <th>Page Section</th>
                  <th>Text</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
              @foreach($section_17 as $row_section_17)
              <tr>
                  
                  <td>
                      {{$row_section_17->name}}
                  </td>
                      <td>
                          {{$row_section_17->paragraph}}
                      </td>
                     
                      </td>
                  <td> <a onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('admin/delete_section_17/'.$row_section_17->id)}}">Delete </a> 
                      | <a data-toggle="modal" data-target="#para_style_4_ModalCenter{{$row_section_17->id}}"> Edit</a>
                      <div class="modal fade" id="para_style_4_ModalCenter{{$row_section_17->id}}" tabindex="-1" role="dialog" aria-labelledby="para_style_4_ModalCenter{{$row_section_17->id}}" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">{{$row_section_17->title}}</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{url('admin/edit_para_style_4')}}"  enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{$row_section_17->id}}" name="id" >
                    
                                      <div class="row">
                                          <div class="col-12">
                                              <div class="form-group">
                                                  <div class="controls">
                                                      
                                                  </div>
                                              </div>
                                          </div>
      
                                        
                                          <div class="col-12">
                                              <div class="form-group">
                                                  <div class="controls">
                                                      <label for="account-username">Section Name</label>
                                                      <input type="text" name="name" value="{{$row_section_17->name}}" class="form-control" id="account-username" required
                                                          data-validation-required-message="This username field is required">
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="col-12">
                                              <div class="form-group">
                                                  <div class="controls">
                                                      <label for="account-username">Title</label>
                                                      <input type="text" name="title" value="{{$row_section_17->title}}" class="form-control" id="account-username" required
                                                          data-validation-required-message="This username field is required">
                                                  </div>
                                              </div>
                                          </div>
                                         
      
                                          <div class="col-12">
                                              <div class="form-group">
                                                  <div class="controls">
                                                      <label for="account-username">Text</label>
                                                      <input type="text" name="paragraph" value="{{$row_section_17->title}}" class="form-control" id="account-username" required
                                                          data-validation-required-message="This username field is required">
                                                  </div>
                                              </div>
                                          </div>
      
                                          

                                          <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                              <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit
                                                  Section 17</button>
                                              <button type="button" class="btn btn-light" data-dismiss="modal" aria-label="Close">Cancel</button>
                                          </div>
                                      </div>
                                  </form>
                            </div>
                            
                          </div>
                        </div>
                      </div>            
                  </td>
              </tr>

              @endforeach
              
          </tbody>
          <tfoot>
              <tr>
                  <th>Section Name</th>
                  <th>Text</th>
                  <th>Action</th>
              </tr>
          </tfoot>
      </table>    
      

</div>



<div class="tab-pane fade" id="account-vertical-section_18" role="tabpanel"
aria-labelledby="account-pill-section_18" aria-expanded="false">
      <div class="media">
          <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
              Section 18
          </div>
      </div>
      <hr/>
      <img style="width:100%" src="{{asset('page_sections/section_18.png')}}"/>
      
      
     
      <form method="POST" action="{{url('admin/store_section_18')}}"  enctype="multipart/form-data">
          @csrf
          <div class="row">
              <div class="col-12">
                  <div class="form-group">
                      <div class="controls">
                      
                      </div>
                  </div>
              </div>

              
              <div class="col-12">
                  <div class="form-group">
                      <div class="controls">
                          <label for="account-username">Section Name</label>
                          <input type="text" name="name" class="form-control" id="account-username" required
                              data-validation-required-message="This username field is required">
                      </div>
                  </div>
              </div>

              <div class="col-12">
                <div class="form-group">
                    <div class="controls">
                        <label for="account-username">Heading One</label>
                        <input type="text" name="headingone" class="form-control" id="account-username" required
                            data-validation-required-message="This username field is required">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <div class="controls">
                        <label for="account-username">Heading Two</label>
                        <input type="text" name="headingtwo" class="form-control" id="account-username" required
                            data-validation-required-message="This username field is required">
                    </div>
                </div>
            </div>



              <div class="col-12">
                  <script>
                    $(document).ready(function () {
                      // Denotes total number of rows
                      var section_18_rowIdx = 0;
                      // jQuery button click event to add a row
                      $('#section_18_addBtn').on('click', function () {
                        // Adding a row inside the tbody.
                        $('#section_18_tbody').append(`<tr id="R${++section_18_rowIdx}">
                            
                            <td class="row-index text-center"><input type="file" name="image[]" class="form-control"/></td>
                            <td class="text-center"><button class="btn btn-danger remove" type="button">Remove</button></td>
                            </tr>`);
                      });
                      // jQuery button click event to remove a row.
                      $('#section_18_tbody').on('click', '.remove', function () {
                        // Getting all the rows next to the row
                        // containing the clicked button
                        var child = $(this).closest('tr').nextAll();
                        // Iterating across all the rows 
                        // obtained to change the index
                        child.each(function () {
                          // Getting <tr> id.
                          var id = $(this).attr('id');
                          // Getting the <p> inside the .row-index class.
                          var idx = $(this).children('.row-index').children('p');
                          // Gets the row number from <tr> id.
                          var dig = parseInt(id.substring(1));
                          // Modifying row index.
                          idx.html(`Row ${dig - 1}`);
                          // Modifying row id.
                          $(this).attr('id', `R${dig - 1}`);
                        });
                        // Removing the current row.
                        $(this).closest('tr').remove();
                        // Decreasing total number of rows by 1.
                        section_17_rowIdx--;
                      });
                    });
                  </script>
                
                  <div class="container pt-4">
                    <button class="btn btn-md btn-primary" id="section_18_addBtn" type="button"> Add Section 18 </button>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                              <th class="text-center">Logo Image</th>
                            <th class="text-center">Remove Row</th>
                          </tr>
                        </thead>
                        <tbody id="section_18_tbody">
                  
                        </tbody>
                      </table>
                    </div>
                    
                  </div>
            </div>

              
              
              <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                  <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create Section 18 </button>
                  <button type="reset" class="btn btn-light">Cancel</button>
              </div>
          </div>
      </form>
      <hr/>
      <table class="table table-striped table-bordered dom-jQuery-events">
          <thead>
              <tr>
                  <th>Section Name</th>
                  <th>Heading 1</th>
                  <th>Heading 2</th>
                  <th>Image</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
              @foreach($section_18 as $row_section_18)
              <tr>
                  
                  <td>
                      {{$row_section_18->name}}
                  </td>
                      <td>
                          {{$row_section_18->headingone}}
                      </td>
                      <td>
                        {{$row_section_18->headingtwo}}
                    </td>
                    <td style="width:200px;">
                        <img style="width:250px;" src="{{asset('section_18/'.$row_section_18->image)}}"/>
                        
                    </td>
                     
                      </td>
                  <td> <a onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('admin/delete_section_18/'.$row_section_18->id)}}">Delete </a> 
                      | <a data-toggle="modal" data-target="#row_section_18_ModalCenter{{$row_section_18->id}}"> Edit</a>
                      <div class="modal fade" id="row_section_18_ModalCenter{{$row_section_18->id}}" tabindex="-1" role="dialog" aria-labelledby="row_section_18_ModalCenter{{$row_section_18->id}}" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">{{$row_section_18->title}}</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{url('admin/edit_row_section_18')}}"  enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{$row_section_18->id}}" name="id" >
                    
                                      <div class="row">
                                          <div class="col-12">
                                              <div class="form-group">
                                                  <div class="controls">
                                                      
                                                  </div>
                                              </div>
                                          </div>
      
                                        
                                          <div class="col-12">
                                              <div class="form-group">
                                                  <div class="controls">
                                                      <label for="account-username">Section Name</label>
                                                      <input type="text" name="name" value="{{$row_section_18->name}}" class="form-control" id="account-username" required
                                                          data-validation-required-message="This username field is required">
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="col-12">
                                              <div class="form-group">
                                                  <div class="controls">
                                                      <label for="account-username">Title</label>
                                                      <input type="text" name="title" value="{{$row_section_17->title}}" class="form-control" id="account-username" required
                                                          data-validation-required-message="This username field is required">
                                                  </div>
                                              </div>
                                          </div>
                                         
      
                                          <div class="col-12">
                                              <div class="form-group">
                                                  <div class="controls">
                                                      <label for="account-username">Text</label>
                                                      <input type="text" name="paragraph" value="{{$row_section_17->title}}" class="form-control" id="account-username" required
                                                          data-validation-required-message="This username field is required">
                                                  </div>
                                              </div>
                                          </div>
      
                                          

                                          <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                              <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Edit
                                                  Section 17</button>
                                              <button type="button" class="btn btn-light" data-dismiss="modal" aria-label="Close">Cancel</button>
                                          </div>
                                      </div>
                                  </form>
                            </div>
                            
                          </div>
                        </div>
                      </div>            
                  </td>
              </tr>

              @endforeach
              
          </tbody>
          <tfoot>
              <tr>
                  <th>Section Name</th>
                  <th>Text</th>
                  <th>Action</th>
              </tr>
          </tfoot>
      </table>    
      

</div>

                        </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- account setting page end -->
      </div>
    </div>
  </div>
  <!-- END: Content-->

  @endsection
