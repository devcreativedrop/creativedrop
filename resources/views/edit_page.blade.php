@extends('layouts.backend')


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
      <div class="col-md-3 mb-2 mb-md-0">
          <ul class="nav nav-pills flex-column mt-md-0 mt-1">
              <li class="nav-item">
                  <a class="nav-link d-flex active" id="account-pill-general" data-toggle="pill"
                      href="#account-vertical-general" aria-expanded="true">
                      <i class="feather icon-list"></i>
                       Edit  Page 
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link d-flex" href="{{url('/')}}"
                      aria-expanded="false">
                      <i class="feather icon-list"></i>
                      Go Back
                  </a>
              </li>
          </ul>
      </div>
      <!-- right content section -->
      <div class="col-md-9">
          <div class="card">
              <div class="card-content">
                  <div class="card-body">
                      <div class="tab-content">
                          <div role="tabpanel" class="tab-pane active" id="account-vertical-general"
                              aria-labelledby="account-pill-general" aria-expanded="true">
                              <div class="media">
                                  
                                  <div style="color:#fff; border-radius:5px; background-color:#00B5B8; padding:10px;" class="media-body mt-75">
                                    <span style="font-size:29px;"> Page Name : <strong> {{$page[0]->title}} </strong></span>
                                  </div>
                              </div>
                              <hr>

                              <form method="POST" action="{{url('admin/edit_page')}}">
                                @csrf
                                <input type="hidden" value="{{$page[0]->id}}" name="id" >
                
                                  <div class="row">
                                      <div class="col-12">
                                          <div class="form-group">
                                              <div class="controls">
                                                  <label style="font-weight:bold;"for="account-username">Page Title</label>
                                                  <input type="text" value="{{$page[0]->title}}" name="title" class="form-control" id="account-username" required
                                                      data-validation-required-message="This username field is required">
                                              </div>
                                          </div>
                                      </div>
                
                                      <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label style="font-weight:bold;"for="account-username">Page Slug</label>
                                                <input type="text" name="slug" value="{{$page[0]->slug}}" class="form-control" id="account-username" required
                                                    data-validation-required-message="This username field is required">
                                            </div>
                                        </div>
                                    </div>
                
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label style="font-weight:bold;"for="account-username">Meta Keywords</label>
                                                <input type="text" value="{{$page[0]->meta_keyword}}" name="meta_keyword" class="form-control" id="account-username" required
                                                    data-validation-required-message="This username field is required">
                                            </div>
                                        </div>
                                    </div>
                
                                   
                
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label style="font-weight:bold;"for="account-username">Meta Description</label>
                                                    <textarea style="min-height: 122px;" value="{{$page[0]->meta_desc}}" name="meta_desc" class="form-control">{{$page[0]->meta_desc}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label style="font-weight:bold;"for="account-username">Page Status  <span style="font-weight:bold; color:green; font-size:16px;">  {{$page[0]->status}}</span></label>
                                                <select id="page_sections" class="form-control" name="status">
                                                    <option value=""> --- Select Status --- </option>
                                                    <option value="published"> Published </option>
                                                    <option value="unpublished"> Unpublished </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label style="font-weight:bold;"for="account-username">Section 1</label>
                                                <select id="page_sections_1" class="form-control" name="section1">
                                                    <option value="">  --- Select Section --- </option>
                                                    @foreach($page_section as $row_page_section)
                                                        <option value="{{$row_page_section->id}}"> {{$row_page_section->name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label style="font-weight:bold;"for="account-username">Select Section 1</label>
                                                <select id="dependent_page_sections_1" class="form-control" name="section_1_type">
                                                    <option></option>
                                                </select>
                                            </div>
                                            <div id="sliders_data"> </div>
                                            
                                        </div>
                                    </div>
                
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label style="font-weight:bold;"for="account-username">Section 2</label>
                                                <select id="page_sections_2" class="form-control" name="section2">
                                                    <option value="">  --- Select Section --- </option>
                                                    @foreach($page_section as $row_page_section)
                                                        <option value="{{$row_page_section->id}}"> {{$row_page_section->name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label style="font-weight:bold;"for="account-username">Select Section 2</label>
                                                <select id="dependent_page_sections_2" class="form-control" name="section_2_type">
                                                    <option></option>
                                                </select>
                                            </div>
                                            <div id="sliders_data_2"> </div>
                                            
                                        </div>
                                    </div>
                
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label style="font-weight:bold;"for="account-username">Section 3</label>
                                                <select id="page_sections_3" class="form-control" name="section3">
                                                    <option value="">  --- Select Section --- </option>
                                                    @foreach($page_section as $row_page_section)
                                                        <option value="{{$row_page_section->id}}"> {{$row_page_section->name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label style="font-weight:bold;"for="account-username">Select Section 3</label>
                                                <select id="dependent_page_sections_3" class="form-control" name="section_3_type">
                                                    <option></option>
                                                </select>
                                            </div>
                                            <div id="sliders_data_3"> </div>
                                            
                                        </div>
                                    </div>
                
                
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label style="font-weight:bold;"for="account-username">Section 4</label>
                                                <select id="page_sections_4" class="form-control" name="section4">
                                                    <option value="">  --- Select Section --- </option>
                                                    @foreach($page_section as $row_page_section)
                                                        <option value="{{$row_page_section->id}}"> {{$row_page_section->name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label style="font-weight:bold;"for="account-username">Select Section 4</label>
                                                <select id="dependent_page_sections_4" class="form-control" name="section_4_type">
                                                    <option></option>
                                                </select>
                                            </div>
                                            <div id="sliders_data_4"> </div>
                                            
                                        </div>
                                    </div>
                
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label style="font-weight:bold;"for="account-username">Section 5</label>
                                                <select id="page_sections_5" class="form-control" name="section5">
                                                    <option value="">  --- Select Section --- </option>
                                                    @foreach($page_section as $row_page_section)
                                                        <option value="{{$row_page_section->id}}"> {{$row_page_section->name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label style="font-weight:bold;"for="account-username">Select Section 5</label>
                                                <select id="dependent_page_sections_5" class="form-control" name="section_5_type">
                                                    <option></option>
                                                </select>
                                            </div>
                                            <div id="sliders_data_5"> </div>
                                            
                                        </div>
                                    </div>
                
                
                
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label style="font-weight:bold;"for="account-username">Section 6</label>
                                                <select id="page_sections_6" class="form-control" name="section6">
                                                    <option value="">  --- Select Section --- </option>
                                                    @foreach($page_section as $row_page_section)
                                                        <option value="{{$row_page_section->id}}"> {{$row_page_section->name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label style="font-weight:bold;"for="account-username">Select Section 6</label>
                                                <select id="dependent_page_sections_6" class="form-control" name="section_6_type">
                                                    <option></option>
                                                </select>
                                            </div>
                                            <div id="sliders_data_6"> </div>
                                            
                                        </div>
                                    </div>
                                    
                
                
                
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label style="font-weight:bold;"for="account-username">Section 7</label>
                                                <select id="page_sections_7" class="form-control" name="section7">
                                                    <option value="">  --- Select Section --- </option>
                                                    @foreach($page_section as $row_page_section)
                                                        <option value="{{$row_page_section->id}}"> {{$row_page_section->name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label style="font-weight:bold;"for="account-username">Select Section 7</label>
                                                <select id="dependent_page_sections_7" class="form-control" name="section_7_type">
                                                    <option></option>
                                                </select>
                                            </div>
                                            <div id="sliders_data_7"> </div>
                                            
                                        </div>
                                    </div>
                
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label style="font-weight:bold;"for="account-username">Section 8</label>
                                                <select id="page_sections_8" class="form-control" name="section8">
                                                    <option value="">  --- Select Section --- </option>
                                                    @foreach($page_section as $row_page_section)
                                                        <option value="{{$row_page_section->id}}"> {{$row_page_section->name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label style="font-weight:bold;"for="account-username">Select Section 8</label>
                                                <select id="dependent_page_sections_8" class="form-control" name="section_8_type">
                                                    <option></option>
                                                </select>
                                            </div>
                                            <div id="sliders_data_8"> </div>
                                            
                                        </div>
                                    </div>
                
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label style="font-weight:bold;"for="account-username">Section 9</label>
                                                <select id="page_sections_9" class="form-control" name="section9">
                                                    <option value="">  --- Select Section --- </option>
                                                    @foreach($page_section as $row_page_section)
                                                        <option value="{{$row_page_section->id}}"> {{$row_page_section->name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label style="font-weight:bold;"for="account-username">Select Section 9</label>
                                                <select id="dependent_page_sections_9" class="form-control" name="section_9_type">
                                                    <option></option>
                                                </select>
                                            </div>
                                            <div id="sliders_data_9"> </div>
                                            
                                        </div>
                                    </div>
                                      
                                      <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                          <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Edit Page</button>
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      </div>
                                  </div>
                              </form>

                             
                          </div>


                          <div class="tab-pane fade " id="account-vertical-password" role="tabpanel"
                              aria-labelledby="account-pill-password" aria-expanded="false">
                               <!-- BEGIN: Content-->
                                   
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
                                                  <label style="font-weight:bold;"for="account-username">Name Main Menu</label>
                                                  <input type="text" name="main_menu" class="form-control" id="account-username" required
                                                      data-validation-required-message="This username field is required">
                                              </div>
                                          </div>
                                      </div>

                                      <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label style="font-weight:bold;"for="account-username">Menu Link</label>
                                                <input type="text" name="menu_link" class="form-control" id="account-username" required
                                                    data-validation-required-message="This username field is required">
                                            </div>
                                        </div>
                                    </div>
                                      
                                      <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                          <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Create
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
                                                  <label style="font-weight:bold;"for="account-username">Name Main Menu</label>
                                                  <input type="text" name="main_menu" class="form-control" id="account-username" required
                                                      data-validation-required-message="This username field is required">
                                              </div>
                                          </div>
                                      </div>

                                      <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label style="font-weight:bold;"for="account-username">Menu Link</label>
                                                <input type="text" name="menu_link" class="form-control" id="account-username" required
                                                    data-validation-required-message="This username field is required">
                                            </div>
                                        </div>
                                    </div>
                                      
                                      <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                          <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Create
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
                                url:'http://localhost/creativedrop/cdapp0/public/admin/page_section_id/'+page_section,
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
                                url:'http://localhost/creativedrop/cdapp0/public/admin/page_section_id/'+page_section,
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
                                url:'http://localhost/creativedrop/cdapp0/public/admin/page_section_id/'+page_section,
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
                                url:'http://localhost/creativedrop/cdapp0/public/admin/page_section_id/'+page_section,
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
                                url:'http://localhost/creativedrop/cdapp0/public/admin/page_section_id/'+page_section,
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
                                url:'http://localhost/creativedrop/cdapp0/public/admin/page_section_id/'+page_section,
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
                                url:'http://localhost/creativedrop/cdapp0/public/admin/page_section_id/'+page_section,
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
                                url:'http://localhost/creativedrop/cdapp0/public/admin/page_section_id/'+page_section,
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
                                url:'http://localhost/creativedrop/cdapp0/public/admin/page_section_id/'+page_section,
                                success:function(data){
                                     console.log(data);
                                   $('#dependent_page_sections_9').html(data);

                                   
                                }
                            });
         
      });











      $("#page_sections_2").change(function(){
          var page_section = $(this).children("option:selected").val();
        //    alert(page_section);
           $.ajax({
                                type:'GET',
                                url:'http://localhost/creativedrop/cdapp0/public/admin/page_section_id/'+page_section,
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
                                url:'http://localhost/creativedrop/cdapp0/public/admin/page_section_id/'+page_section,
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
                                url:'http://localhost/creativedrop/cdapp0/public/admin/page_section_id/'+page_section,
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
                                url:'http://localhost/creativedrop/cdapp0/public/admin/page_section_id/'+page_section,
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
                                url:'http://localhost/creativedrop/cdapp0/public/admin/page_section_id/'+page_section,
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
                                url:'http://localhost/creativedrop/cdapp0/public/admin/page_section_id/'+page_section,
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
                                url:'http://localhost/creativedrop/cdapp0/public/admin/page_section_id/'+page_section,
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
                                url:'http://localhost/creativedrop/cdapp0/public/admin/page_section_id/'+page_section,
                                success:function(data){
                                     console.log(data);
                                   $('#dependent_page_sections_9').html(data);

                                   
                                }
                            });
         
      });


  });
  </script>

  @endsection
