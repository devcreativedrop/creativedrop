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
          <h3 class="content-header-title mb-0">System Configuration</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('admin/')}}">Home</a>
                </li>
                <li class="breadcrumb-item active">System Configuration </li>
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
              <h3 class="m-0">20</h3><span class="text-muted">System Configuration</span>
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
                      Social Media
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link d-flex" id="account-pill-password" data-toggle="pill" href="#account-vertical-password"
                      aria-expanded="false">
                      <i class="feather icon-list"></i>
                      Footer
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link d-flex" id="account-pill-logo" data-toggle="pill" href="#account-vertical-logo"
                      aria-expanded="false">
                      <i class="feather icon-list"></i>
                      Logo
                  </a>
              </li>

              <li class="nav-item">
                  <a class="nav-link d-flex" id="account-pill-password" data-toggle="pill" href="#account-vertical-password"
                      aria-expanded="false">
                      <i class="feather icon-list"></i>
                      Create Password
                  </a>
              </li>

              
              <li class="nav-item">
                <a class="nav-link d-flex" id="account-pill-footerBottom" data-toggle="pill" href="#account-vertical-footerBottom"
                    aria-expanded="false">
                    <i class="feather icon-list"></i>
                    Footer Bottom
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
                                  <div style="color:#fff; border-radius:5px; background-color:#00B5B8; padding:10px;" class="media-body mt-75">
                                      Social Media
                                  </div>
                              </div>
                              <hr>
                              <div class="row">
                                {{-- <img style="width:100%" src="{{asset('page_sections/slider.png')}}"/> --}}
                                    <div class="col-md-12">
                                       <h1>Add Social Media</h1>

                                       <div class="col-12">
                                        <script>
                                          $(document).ready(function () {
                                            // Denotes total number of rows
                                            var SliderrowIdx = 0;
                                            // jQuery button click event to add a row
                                            $('#slideraddBtn').on('click', function () {
                                              // Adding a row inside the tbody.
                                              $('#slidertbody').append(`<tr id="R${++SliderrowIdx}">
                                                  <td class="row-index text-center"><input type="file" name="icon[]" class="form-control"/></td>
                                                  <td class="row-index text-center"><input type="text" name="name[]" class="form-control"/></td>
                                                  <td class="row-index text-center"><input type="text" name="link[]" class="form-control"/></td>
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
                                          <button class="btn btn-md btn-primary" id="slideraddBtn" type="button"> Add Social Media Icon </button>
                                          <div class="table-responsive">
                                            <table class="table table-bordered">
                                              <thead>
                                                <tr>
                                                  <th class="text-center">Social Media Icon</th>
                                                  <th class="text-center">Name</th>
                                                  <th class="text-center">Link</th>
                                                  <th class="text-center">Remove Row</th>
                                                </tr>
                                              </thead>
                                              <tbody id="slidertbody">
                                        
                                              </tbody>
                                            </table>
                                          </div>
                                          
                                        </div>
                                  </div>

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
                                  
                                <div style="color:#fff; border-radius:5px; background-color:#00B5B8; padding:10px;" class="media-body mt-75">
                                    Create Video Section
                                </div>
                            </div>
                            <hr>
                          
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


                          <div class="tab-pane fade " id="account-vertical-logo" role="tabpanel"
                              aria-labelledby="account-pill-logo" aria-expanded="false">
                               <!-- BEGIN: Content-->
                               <div class="media">
                                  
                                <div style="color:#fff; border-radius:5px; background-color:#00B5B8; padding:10px;" class="media-body mt-75">
                                    Logo
                                </div>
                            </div>
                            <hr>
                          
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

                          <div class="tab-pane fade " id="account-vertical-password" role="tabpanel"
                              aria-labelledby="account-pill-password" aria-expanded="false">
                               <!-- BEGIN: Content-->
                               <div class="media">
                                  
                                <div style="color:#fff; border-radius:5px; background-color:#00B5B8; padding:10px;" class="media-body mt-75">
                                    Logo
                                </div>
                            </div>
                            <hr>
                          
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


                          <div class="tab-pane fade " id="account-vertical-footerBottom" role="tabpanel"
                              aria-labelledby="account-pill-footerBottom" aria-expanded="false">
                               <!-- BEGIN: Content-->
                               <div class="media">
                                  
                                <div style="color:#fff; border-radius:5px; background-color:#00B5B8; padding:10px;" class="media-body mt-75">
                                    Footer Bottom
                                </div>
                            </div>
                            <hr>
                          
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
