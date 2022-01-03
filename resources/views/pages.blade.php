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
                                                        <select id="page_sections" class="form-control" name="main_menu">
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
                                                        <select id="dependent_page_sections" class="form-control" name="sub_menu">
                                                            <option></option>
                                                        </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label  style="font-weight:bold" for="account-username">Child Menu</label>
                                                        <select id="child_dependent_page_sections" class="form-control" name="child_sub_menu">
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

                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label  style="font-weight:bold" for="account-username">Section 1</label>
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
                                                <label  style="font-weight:bold" for="account-username">Select Section 1</label>
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
                                                <label  style="font-weight:bold" for="account-username">Section 2</label>
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
                                                <label  style="font-weight:bold" for="account-username">Select Section 2</label>
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
                                                <label  style="font-weight:bold" for="account-username">Section 3</label>
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
                                                <label  style="font-weight:bold" for="account-username">Select Section 3</label>
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
                                                <label  style="font-weight:bold" for="account-username">Section 4</label>
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
                                                <label  style="font-weight:bold" for="account-username">Select Section 4</label>
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
                                                <label  style="font-weight:bold" for="account-username">Section 5</label>
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
                                                <label  style="font-weight:bold" for="account-username">Select Section 5</label>
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
                                                <label  style="font-weight:bold" for="account-username">Section 6</label>
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
                                                <label  style="font-weight:bold" for="account-username">Select Section 6</label>
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
                                                <label  style="font-weight:bold" for="account-username">Section 7</label>
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
                                                <label  style="font-weight:bold" for="account-username">Select Section 7</label>
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
                                                <label  style="font-weight:bold" for="account-username">Section 8</label>
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
                                                <label  style="font-weight:bold" for="account-username">Select Section 8</label>
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
                                                <label  style="font-weight:bold" for="account-username">Section 9</label>
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
                                                <label  style="font-weight:bold" for="account-username">Select Section 9</label>
                                                <select id="dependent_page_sections_9" class="form-control" name="section_9_type">
                                                    <option></option>
                                                </select>
                                            </div>
                                            <div id="sliders_data_9"> </div>
                                            
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
