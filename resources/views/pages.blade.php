@extends('layouts.backend')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"crossorigin="anonymous">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@section('content')
 <!-- BEGIN: Content-->
 
 <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title mb-0">Website Pages</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('admin/')}}">Home</a>
                </li>
                <li class="breadcrumb-item active">Website Pages </li>
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
              <h3 class="m-0">20</h3><span class="text-muted">Website Pages</span>
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
                      Create Page
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link d-flex" id="account-pill-password" data-toggle="pill" href="#account-vertical-password"
                      aria-expanded="false">
                      <i class="feather icon-list"></i>
                      View Pages List
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
                                      Create Page
                                  </div>
                              </div>
                              <hr>
                              <form method="POST" action="{{url('admin/create_page')}}">
                                @csrf
                                
                                  <div class="row">
                                      <div class="col-12">
                                          <div class="form-group">
                                              <div class="controls">
                                                  <label  style="font-weight:bold" for="account-username">Page Title</label>
                                                  <input type="text" name="page_title" class="form-control" id="account-username" required
                                                      data-validation-required-message="This username field is required">
                                              </div>
                                          </div>
                                      </div>

                                      <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label  style="font-weight:bold" for="account-username">Page Slug</label>
                                                <input type="text" name="page_slug" class="form-control" id="account-username" required
                                                    data-validation-required-message="This username field is required">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group">
                                            <div class="controls">
                                                        <label  style="font-weight:bold" for="account-username">Main Menu</label>
                                                        <select id="page_sections" class="form-control" name="main_menu_id">
                                                            <option value="#">  --- Select Services --- </option>
                                                            @foreach($main_menu as $row_main_menu)
                                                                <option value="{{$row_main_menu->id}}"> {{$row_main_menu->menu_name}} </option>
                                                            @endforeach
                                                        </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label  style="font-weight:bold" for="account-username">Sub Menu</label>
                                                        <select id="dependent_page_sections" class="form-control" name="sub_menu_id">
                                                            <option></option>
                                                        </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label  style="font-weight:bold" for="account-username">Child Menu</label>
                                                        <select id="child_dependent_page_sections" class="form-control" name="child_menu_id">
                                                            <option></option>
                                                        </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label  style="font-weight:bold" for="account-username">Meta Keywords</label>
                                                <input type="text" name="meta_keword" class="form-control" id="account-username" required
                                                    data-validation-required-message="This username field is required">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label  style="font-weight:bold" for="account-username">Meta Descriptions</label>
                                                <input type="text" name="meta_desc" class="form-control" id="account-username" required
                                                    data-validation-required-message="This username field is required">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label  style="font-weight:bold" for="account-username">Page Status</label>
                                                <select class="form-control" name="status">
                                                    <option value=""> --- Select Status --- </option>
                                                    <option value="published"> Published </option>
                                                    <option value="unpublished"> Unpublished </option>
                                                </select>
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
                                                  <td class="row-index text-center">
                                                    <select id="page_sections_${caseStudyrowIdx}" class="form-control" name="section[]">
                                                    <option value="">  --- Select Section --- </option>
                                                    @foreach($page_section as $row_page_section)
                                                        <option value="{{$row_page_section->id}}"> {{$row_page_section->name}} </option>
                                                    @endforeach
                                                </select>
                                                    </td>
                                                  <td class="row-index text-center">
                                                    <select id="dependent_page_sections_${caseStudyrowIdx}" class="form-control" name="section_type[]">
                                                        <option></option>
                                                    </select>
                                                    </td>
                                                  <td class="text-center"><button class="btn btn-danger remove" type="button">Remove</button></td>
                                                  </tr>`);

                                                  $(`#page_sections_${caseStudyrowIdx}`).change(function(){
                                                        var page_section = $(this).children("option:selected").val();
                                                            // alert(page_section);
                                                        $.ajax({
                                                            type:'GET',
                                                            url:'page_section_id/'+page_section,
                                                            success:function(data){
                                                                console.log(data);
                                                                $(`#dependent_page_sections_${caseStudyrowIdx}`).html(data);
                                                            }});
                                                    });
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
                                          <button class="btn btn-md btn-primary" id="caseStudyaddBtn" type="button"> Add Sections </button>
                                          <div class="table-responsive">
                                            <table class="table table-bordered">
                                              <thead>
                                                <tr>
                                                  <th class="text-center">Section</th>
                                                  <th class="text-center">Select Section</th>
                                                  <th style="width:100px;" class="text-center">Remove Row</th>
                                                </tr>
                                              </thead>
                                              <tbody id="caseStudytbody">
                                        
                                              </tbody>
                                            </table>
                                          </div>
                                          
                                        </div>
                                  </div>

                                    
                                      <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                          <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create
                                              Page</button>
                                          <button type="reset" class="btn btn-light">Cancel</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                          <div class="tab-pane fade " id="account-vertical-password" role="tabpanel"
                              aria-labelledby="account-pill-password" aria-expanded="false">
                               <!-- BEGIN: Content-->
                                    <div class="app-content content">
                                        <div class="content-overlay"></div>
                                        <div class="content-wrapper">
                                        <div class="content-header row">
                                            <div class="content-header-right col-md-6 col-12 mb-md-0 mb-2">
                                            <div class="media width-250 float-right">
                                                <div class="media-left media-middle">
                                                <div id="sp-bar-total-sales"></div>
                                                </div>
                                                <div class="media-body media-right text-right">
                                                {{-- <h3 class="m-0">$5,668</h3><span class="text-muted">Sales</span> --}}
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="content-body"><!-- DOM - jQuery events table -->
                                            <section id="dom">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4 style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75" class="card-title">Pages List</h4>
                                                            </div>
                                                            <div class="card-content collapse show">
                                                                <div class="card-body card-dashboard">
                                                                    <table class="table table-striped table-bordered dom-jQuery-events">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Page Title</th>
                                                                                <th>Page Slug</th>
                                                                                <th>Status</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach($pages as $row_pages)
                                                                            <tr>
                                                                                <td>{{$row_pages->title}}</td>
                                                                                <td>{{$row_pages->slug}}</td>
                                                                                <td>{{$row_pages->status}}</td>
                                                                                <td> 
                                                                                  <a href="{{url('admin/edit_page_content',$row_pages->id)}}"> Edit</a> | <a onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('admin/delete_page',$row_pages->id)}}"> Delete </a> </td>
                                                                                  <!-- Modal -->
                                                                            </tr>

                                                                            @endforeach
                                                                            
                                                                        </tbody>
                                                                        <tfoot>
                                                                            <tr>
                                                                                <th>Page Title</th>
                                                                                <th>Page Slug</th>
                                                                                <th>Status</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </tfoot>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                
                                
                                        </div>
                                        </div>
                                    </div>
                                    <!-- END: Content-->
  
                          </div>
                          <div class="tab-pane fade" id="account-vertical-info" role="tabpanel"
                              aria-labelledby="account-pill-info" aria-expanded="false">
                              <form method="POST" action="{{url('admin/store_main_menu')}}">
                                @csrf
                                  <div class="row">
                                      <div class="col-12">
                                          <div class="form-group">
                                              <div class="controls">
                                                  <label  style="font-weight:bold" for="account-username">Name Main Menu</label>
                                                  <input type="text" name="main_menu" class="form-control" id="account-username" required
                                                      data-validation-required-message="This username field is required">
                                              </div>
                                          </div>
                                      </div>

                                      <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label  style="font-weight:bold" for="account-username">Menu Link</label>
                                                <input type="text" name="menu_link" class="form-control" id="account-username" required
                                                    data-validation-required-message="This username field is required">
                                            </div>
                                        </div>
                                    </div>
                                      
                                      <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                          <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create
                                              Menu</button>
                                          <button type="reset" class="btn btn-light">Cancel</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                          <div class="tab-pane fade " id="account-vertical-social" role="tabpanel"
                              aria-labelledby="account-pill-social" aria-expanded="false">
                              <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Child Menu List</h4>
                                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                            <div class="heading-elements">
                                                <ul class="list-inline mb-0">
                                                    <li><a data-action="collapse"><i class="feather icon-minus"></i></a></li>
                                                    <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                                                    <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                                                    <li><a data-action="close"><i class="feather icon-x"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-content collapse show">
                                            <div class="card-body card-dashboard">
                                                <table class="table table-striped table-bordered dom-jQuery-events">
                                                    <thead>
                                                        <tr>
                                                            <th>Main Menu ID</th>
                                                            <th>Child Menu Name</th>
                                                            <th>Child Menu Link</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                       
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Main Menu ID</th>
                                                            <th>Child Menu Name</th>
                                                            <th>Child Menu Link</th>
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
                          <div class="tab-pane fade" id="account-vertical-connections" role="tabpanel"
                              aria-labelledby="account-pill-connections" aria-expanded="false">
                              <form method="POST" action="{{url('admin/store_main_menu')}}">
                                @csrf
                                  <div class="row">
                                      <div class="col-12">
                                          <div class="form-group">
                                              <div class="controls">
                                                  <label  style="font-weight:bold" for="account-username">Name Main Menu</label>
                                                  <input type="text" name="main_menu" class="form-control" id="account-username" required
                                                      data-validation-required-message="This username field is required">
                                              </div>
                                          </div>
                                      </div>

                                      <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label  style="font-weight:bold" for="account-username">Menu Link</label>
                                                <input type="text" name="menu_link" class="form-control" id="account-username" required
                                                    data-validation-required-message="This username field is required">
                                            </div>
                                        </div>
                                    </div>
                                      
                                      <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                          <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create
                                              Menu</button>
                                          <button type="reset" class="btn btn-light">Cancel</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                          <div class="tab-pane fade" id="account-vertical-notifications" role="tabpanel"
                              aria-labelledby="account-pill-notifications" aria-expanded="false">
                              
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Child Sub  Menu List</h4>
                                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                                <div class="heading-elements">
                                                    <ul class="list-inline mb-0">
                                                        <li><a data-action="collapse"><i class="feather icon-minus"></i></a></li>
                                                        <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                                                        <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                                                        <li><a data-action="close"><i class="feather icon-x"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-content collapse show">
                                                <div class="card-body card-dashboard">
                                                    <table class="table table-striped table-bordered dom-jQuery-events">
                                                        <thead>
                                                            <tr>
                                                                <th>Main Menu ID</th>
                                                                <th>Child Menu Name</th>
                                                                <th>Child Menu Link</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            
                                                           
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>Main Menu ID</th>
                                                                <th>Child Menu Name</th>
                                                                <th>Child Menu Link</th>
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
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script>
  $(document).ready(function(){

      $("#page_sections_1").change(function(){
          var page_section = $(this).children("option:selected").val();
        //    alert(page_section);
           $.ajax({
                                type:'GET',
                                url:'page_section_id/'+page_section,
                                success:function(data){
                                     console.log(data);
                                   $('#dependent_page_sections_1').html(data);

                                   
                                }
                            });
         
      });

      $("#page_sections_2").change(function(){
          var page_section = $(this).children("option:selected").val();
        //    alert(page_section);
           $.ajax({
                                type:'GET',
                                url:'page_section_id/'+page_section,
                                success:function(data){
                                     console.log(data);
                                   $('#dependent_page_sections_2').html(data);

                                   
                                }
                            });
         
      });

      $("#page_sections_3").change(function(){
          var page_section = $(this).children("option:selected").val();
        //    alert(page_section);
           $.ajax({
                                type:'GET',
                                url:'page_section_id/'+page_section,
                                success:function(data){
                                     console.log(data);
                                   $('#dependent_page_sections_3').html(data);

                                   
                                }
                            });
         
      });

      $("#page_sections_4").change(function(){
          var page_section = $(this).children("option:selected").val();
        //    alert(page_section);
           $.ajax({
                                type:'GET',
                                url:'page_section_id/'+page_section,
                                success:function(data){
                                     console.log(data);
                                   $('#dependent_page_sections_4').html(data);

                                   
                                }
                            });
         
      });

      $("#page_sections_5").change(function(){
          var page_section = $(this).children("option:selected").val();
        //    alert(page_section);
           $.ajax({
                                type:'GET',
                                url:'page_section_id/'+page_section,
                                success:function(data){
                                     console.log(data);
                                   $('#dependent_page_sections_5').html(data);

                                   
                                }
                            });
         
      });

      $("#page_sections_6").change(function(){
          var page_section = $(this).children("option:selected").val();
        //    alert(page_section);
           $.ajax({
                                type:'GET',
                                url:'page_section_id/'+page_section,
                                success:function(data){
                                     console.log(data);
                                   $('#dependent_page_sections_6').html(data);

                                   
                                }
                            });
         
      });

      $("#page_sections_7").change(function(){
          var page_section = $(this).children("option:selected").val();
        //    alert(page_section);
           $.ajax({
                                type:'GET',
                                url:'page_section_id/'+page_section,
                                success:function(data){
                                     console.log(data);
                                   $('#dependent_page_sections_7').html(data);

                                   
                                }
                            });
         
      });

      $("#page_sections_8").change(function(){
          var page_section = $(this).children("option:selected").val();
        //    alert(page_section);
           $.ajax({
                                type:'GET',
                                url:'page_section_id/'+page_section,
                                success:function(data){
                                     console.log(data);
                                   $('#dependent_page_sections_8').html(data);
                                }
                            });
         
      });

      $("#page_sections_9").change(function(){
          var page_section = $(this).children("option:selected").val();
        //    alert(page_section);
           $.ajax({
                                type:'GET',
                                url:'page_section_id/'+page_section,
                                success:function(data){
                                     console.log(data);
                                   $('#dependent_page_sections_9').html(data);

                                   
                                }
                            });
         
      });










      $("#edit_page_sections_1").change(function(){
          var page_section = $(this).children("option:selected").val();
        //    alert(page_section);
           $.ajax({
                                type:'GET',
                                url:'page_section_id/'+page_section,
                                success:function(data){
                                     console.log(data);
                                   $('#edit_dependent_page_sections_1').html(data);

                                   
                                }
                            });
         
      });

      $("#edit_page_sections_2").change(function(){
          var page_section = $(this).children("option:selected").val();
        //    alert(page_section);
           $.ajax({
                                type:'GET',
                                url:'page_section_id/'+page_section,
                                success:function(data){
                                     console.log(data);
                                   $('#edit_dependent_page_sections_2').html(data);

                                   
                                }
                            });
         
      });

      $("#edit_page_sections_3").change(function(){
          var page_section = $(this).children("option:selected").val();
        //    alert(page_section);
           $.ajax({
                                type:'GET',
                                url:'page_section_id/'+page_section,
                                success:function(data){
                                     console.log(data);
                                   $('#edit_dependent_page_sections_3').html(data);

                                   
                                }
                            });
         
      });

      $("#edit_page_sections_4").change(function(){
          var page_section = $(this).children("option:selected").val();
        //    alert(page_section);
           $.ajax({
                                type:'GET',
                                url:'page_section_id/'+page_section,
                                success:function(data){
                                     console.log(data);
                                   $('#edit_dependent_page_sections_4').html(data);

                                   
                                }
                            });
         
      });

      $("#edit_page_sections_5").change(function(){
          var page_section = $(this).children("option:selected").val();
        //    alert(page_section);
           $.ajax({
                                type:'GET',
                                url:'page_section_id/'+page_section,
                                success:function(data){
                                     console.log(data);
                                   $('#edit_dependent_page_sections_5').html(data);

                                   
                                }
                            });
         
      });

      $("#edit_page_sections_6").change(function(){
          var page_section = $(this).children("option:selected").val();
        //    alert(page_section);
           $.ajax({
                                type:'GET',
                                url:'page_section_id/'+page_section,
                                success:function(data){
                                     console.log(data);
                                   $('#edit_dependent_page_sections_6').html(data);

                                   
                                }
                            });
         
      });

      $("#edit_page_sections_7").change(function(){
          var page_section = $(this).children("option:selected").val();
        //    alert(page_section);
           $.ajax({
                                type:'GET',
                                url:'page_section_id/'+page_section,
                                success:function(data){
                                     console.log(data);
                                   $('#edit_dependent_page_sections_7').html(data);

                                   
                                }
                            });
         
      });

      $("#edit_page_sections_8").change(function(){
          var page_section = $(this).children("option:selected").val();
        //    alert(page_section);
           $.ajax({
                                type:'GET',
                                url:'page_section_id/'+page_section,
                                success:function(data){
                                     console.log(data);
                                   $('#edit_dependent_page_sections_8').html(data);

                                   
                                }
                            });
         
      });

      $("#edit_page_sections_9").change(function(){
          var page_section = $(this).children("option:selected").val();
        //    alert(page_section);
           $.ajax({
                                type:'GET',
                                url:'page_section_id/'+page_section,
                                success:function(data){
                                     console.log(data);
                                   $('#edit_dependent_page_sections_9').html(data);

                                   
                                }
                            });
         
      });


  });

  
$('#page_sections').change(function() {
    if ($(this).val() != '') {
        var select = $(this).attr("id");
        var value = $(this).val();

        var dependent = $(this).data('dependent');
        var _token = $('input[name="_token"]').val();
        $.ajax({
            url: "services_by_id/" + value,
            method: "GET",
            success: function(result) {
                console.log(result);
                $('#dependent_page_sections').html(result);
            }

        })
    }
    
    if ($(this).val() == '#') {
        $('#dependent_page_sections').val('');
        $('#child_dependent_page_sections').val('');
    }
    
});

$('#dependent_page_sections').change(function() {
    if ($(this).val() != '') {
        var select = $(this).attr("id");
        var value = $(this).val();

        var dependent_page_sections = $(this).data('dependent');
        var _token = $('input[name="_token"]').val();
        $.ajax({
            url: "child_services_by_id/" + value,
            method: "GET",
            success: function(result) {
                console.log(result);
                $('#child_dependent_page_sections').html(result);
            }

        })
    }
    
});

  </script>

  @endsection
