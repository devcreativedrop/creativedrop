@extends('layouts.backend')


@section('content')
 <!-- BEGIN: Content-->
 
 <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title mb-0">Navigation Setting</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('admin//')}}">Home</a>
                </li>
                <li class="breadcrumb-item active">Navigation setting </li>
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
              <h3 class="m-0">20</h3><span class="text-muted">Navigation</span>
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
                      Create Main Navigation
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link d-flex" id="account-pill-password" data-toggle="pill" href="#account-vertical-password"
                      aria-expanded="false">
                      <i class="feather icon-list"></i>
                      View Main Navigation
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link d-flex" id="account-pill-info" data-toggle="pill" href="#account-vertical-info"
                      aria-expanded="false">
                      <i class="feather icon-info"></i>
                      Create Child Menu
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link d-flex" id="account-pill-social" data-toggle="pill" href="#account-vertical-social"
                      aria-expanded="false">
                      <i class="feather icon-camera"></i>
                      View Child Menu
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link d-flex" id="account-pill-connections" data-toggle="pill"
                      href="#account-vertical-connections" aria-expanded="false">
                      <i class="feather icon-feather"></i>
                      Create Sub Child Menu
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link d-flex" id="account-pill-notifications" data-toggle="pill"
                      href="#account-vertical-notifications" aria-expanded="false">
                      <i class="feather icon-message-circle"></i>
                      View Sub Child Menu
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
                                  
                                  <div style="color:#fff; border-radius:5px; background-color:#00B5B8; padding:10px;"  class="media-body mt-75">
                                      Create Main Menu
                                  </div>
                              </div>
                              <hr>
                              <form method="POST" action="{{url('admin/store_main_menu')}}">
                                @csrf
                                  <div class="row">
                                      <div class="col-12">
                                          <div class="form-group">
                                              <div class="controls">
                                                  <label for="account-username">Name Main Menu</label>
                                                  <input type="text" name="main_menu" class="form-control" id="account-username" required
                                                      data-validation-required-message="This username field is required">
                                              </div>
                                          </div>
                                      </div>

                                      <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-username">Menu Link</label>
                                                <input type="text" name="menu_link" class="form-control" id="account-username" required
                                                    data-validation-required-message="This username field is required">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-username">Sorting</label>
                                                <input type="text" name="sorting" class="form-control" id="account-username" required
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
                          <div class="tab-pane fade " id="account-vertical-password" role="tabpanel"
                              aria-labelledby="account-pill-password" aria-expanded="false">
                              <div class="media">
                                <div style="color:#fff; border-radius:5px; background-color:#00B5B8; padding:10px;"  class="media-body mt-75">
                                    List Main Menu
                                </div>
                            </div>
                            <hr>
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
                                                            <div class="card-content collapse show">
                                                                <div class="card-body card-dashboard">
                                                                    <table class="table table-striped table-bordered dom-jQuery-events">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Main Menu</th>
                                                                                <th>Menu Link</th>
                                                                                <th>Sorting</th>
                                                                                <th>Created at</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach($main_menu as $row_main_menu)
                                                                            <tr>
                                                                                <td>{{$row_main_menu->menu_name}}</td>
                                                                                <td>{{$row_main_menu->menu_link}}</td>
                                                                                <td>{{$row_main_menu->sorting}}</td>
                                                                                <td>{{$row_main_menu->created_at}}</td>
                                                                                <td>
                                                                                    
                                                                                    <a data-toggle="modal" data-target="#exampleModalCenter{{$row_main_menu->id}}"> Edit</a> | <a onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('/admin/delete_main_menu/'.$row_main_menu->id)}} "> Delete </a> 
                                                                          <!-- Modal -->
                                                                          <div class="modal fade" id="exampleModalCenter{{$row_main_menu->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle{{$row_main_menu->id}}" aria-hidden="true">
                                                                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                                              <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                  <h5 class="modal-title" id="exampleModalLongTitle">{{$row_main_menu->menu_name}}</h5>
                                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                  </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form method="POST" action="{{url('admin/edit_main_menu')}}">
                                                                                        @csrf
                                                                                        <input type="hidden" value="{{$row_main_menu->id}}" name="id" >
                                                                        
                                                                                          <div class="row">
                                                                                              <div class="col-12">
                                                                                                  <div class="form-group">
                                                                                                      <div class="controls">
                                                                                                          <label for="account-username">Menu Name</label>
                                                                                                          <input type="text" value="{{$row_main_menu->menu_name}}" name="menu_name" class="form-control" id="account-username" required
                                                                                                              data-validation-required-message="This username field is required">
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>

                                                                                              <div class="col-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="controls">
                                                                                                        <label for="account-username">Menu Link / Page Link</label>
                                                                                                        <input type="text" value="{{$row_main_menu->menu_link}}" name="menu_link" class="form-control" id="account-username" required
                                                                                                            data-validation-required-message="This username field is required">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="controls">
                                                                                                        <label for="account-username">Sorting</label>
                                                                                                        <input type="text" name="sorting" value="{{$row_main_menu->sorting}}" class="form-control" id="account-username" required
                                                                                                            data-validation-required-message="This username field is required">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                        
                                                                                           
                                                                                              
                                                                                              <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                                                  <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Create
                                                                                                      Menu</button>
                                                                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                                                                                <th>Main Menu</th>
                                                                                <th>Menu Link</th>
                                                                                <th>Sorting</th>
                                                                                <th>Created at</th>
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
                              <div class="media">
                                <div style="color:#fff; border-radius:5px; background-color:#00B5B8; padding:10px;"  class="media-body mt-75">
                                    Create Child Menu
                                </div>
                            </div>
                            <hr>
                              <form method="POST" action="{{url('admin/store_child_menu')}}">
                                @csrf
                                  <div class="row">
                                      <div class="col-12">
                                          <div class="form-group">
                                              <div class="controls">
                                                  <label for="account-username">Select Main Menu</label>
                                                  <select name="main_menu_id" class="form-control">
                                                      @foreach($main_menu as $main_menu_row)
                                                        <option value="{{$main_menu_row->id}}"> {{$main_menu_row->menu_name}} </option>
                                                      @endforeach
                                                  </select>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-username">Name Child Menu</label>
                                                <input type="text" name="child_menu" class="form-control" id="account-username" required
                                                    data-validation-required-message="This username field is required">
                                            </div>
                                        </div>
                                    </div>

                                      <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-username">Child Menu Link</label>
                                                <input type="text" name="child_menu_link" class="form-control" id="account-username" required
                                                    data-validation-required-message="This username field is required">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-username">Featured Service</label>
                                                <select name="featured_service" class="form-control">
                                                    <option value="No"> No </option>
                                                    <option value="yes"> Yes </option>
                                                </select>
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
                                            <div class="media">
                                                <div style="color:#fff; border-radius:5px; background-color:#00B5B8; padding:10px;"  class="media-body mt-75">
                                                    View Child Menu
                                                </div>
                                            </div>
                                            <hr>
                                            
                                        </div>
                                        <div class="card-content collapse show">
                                            <div class="card-body card-dashboard">
                                                <table class="table table-striped table-bordered dom-jQuery-events">
                                                    <thead>
                                                        <tr>
                                                            <th>Main Menu ID</th>
                                                            <th>Child Menu Name</th>
                                                            <th>Child Menu Link</th>
                                                            <th>Featured Service</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($child_menus as $row_child_menus)
                                                        @php
                                                            $main_menuID =  DB::table('menus')->where('id', '=', $row_child_menus->menu_id)->get();
                                                        @endphp
                                                        <tr>
                                                          <td>
                                                              @if(!$main_menuID->isEmpty())
                                                              {{$main_menuID[0]->menu_name}}
                                                              @endif
                                                              </td>
                                                          <td>{{$row_child_menus->item_name}}</td>
                                                          <td>{{$row_child_menus->item_link}}</td>
                                                          <td>{{$row_child_menus->featured_service}}</td>
                                                          <td>
                                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#childMenuModal{{$row_child_menus->id}}"> Edit</a> | <a onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('/admin/delete_child_menu/'.$row_child_menus->id)}} "> Delete </a> 
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="childMenuModal{{$row_child_menus->id}}" tabindex="-1" role="dialog" aria-labelledby="childMenuModal{{$row_child_menus->id}}" aria-hidden="true">
                                                              <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                  <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">{{$row_child_menus->item_name}}</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                      <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                      <form method="POST" action="{{url('admin/edit_child_menu')}}">
                                                                          @csrf
                                                                          <input type="hidden" value="{{$row_child_menus->id}}" name="id" >
                                                          
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                        <div class="controls">
                                                                                            <label for="account-username">Main Menu Name</label> 
                                                                                            
                                                                                                <select name="main_menu_id" class="form-control">
                                                                                                    @foreach($main_menu_four as $main_menu_row)
                                                                                                        @if($row_child_menus->menu_id == $main_menu_row->id)
                                                                                                                <option selected value="{{$main_menu_row->id}}"> {{$main_menu_row->menu_name}} </option>  
                                                                                                        @endif
                                                                                                      <option value="{{$main_menu_row->id}}"> {{$main_menu_row->menu_name}} </option>
                                                                                                    @endforeach
                                                                                                </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                        <div class="controls">
                                                                                            <label for="account-username">Child Menu Name</label>
                                                                                            <input type="text" value="{{$row_child_menus->item_name}}" name="item_name" class="form-control" id="account-username" required
                                                                                                data-validation-required-message="This username field is required">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-12">
                                                                                  <div class="form-group">
                                                                                      <div class="controls">
                                                                                          <label for="account-username">Menu Link / Page Link</label>
                                                                                          <input type="text" value="{{$row_child_menus->item_link}}" name="item_link" class="form-control" id="account-username" required
                                                                                              data-validation-required-message="This username field is required">
                                                                                      </div>
                                                                                  </div>
                                                                              </div>

                                                                              <div class="col-12">
                                                                                <div class="form-group">
                                                                                    <div class="controls">
                                                                                        <label for="account-username">Featured Service : {{$row_child_menus->featured_service}}</label>
                                                                                        <select name="featured_service" class="form-control">
                                                                                            <option value="No"> No </option>
                                                                                            <option value="yes"> Yes </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                          
                                                                             
                                                                                
                                                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                                    <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Create
                                                                                        Menu</button>
                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                  </div>
                                                                  
                                                                </div>
                                                              </div>
                                                            </div>
                                                      </tr>
                                                        @endforeach
                                                       
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Main Menu ID</th>
                                                            <th>Child Menu Name</th>
                                                            <th>Child Menu Link</th>
                                                            <th>Featured Service</th>
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
                              <div class="media">
                                <div style="color:#fff; border-radius:5px; background-color:#00B5B8; padding:10px;"  class="media-body mt-75">
                                    Create Sub Child Menu
                                </div>
                            </div>
                            <hr>
                              <form method="POST" action="{{url('admin/store_sub_child_menu')}}">
                                @csrf
                                  <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-username">Select Main Menu</label>
                                                <select name="main_menu_id" class="form-control">
                                                    @foreach($main_menu_two as $main_menu_row)
                                                      <option value="{{$main_menu_row->id}}"> {{$main_menu_row->menu_name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-username">Select Child Menu</label>
                                                <select name="child_menu_id" class="form-control">
                                                    @foreach($child_menus as $main_menu_row)
                                                      <option value="{{$main_menu_row->id}}"> {{$main_menu_row->item_name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                      <div class="col-12">
                                          <div class="form-group">
                                              <div class="controls">
                                                  <label for="account-username">Sub Child Menu Name</label>
                                                  <input type="text" name="sub_child_item_name" class="form-control" id="account-username" required
                                                      data-validation-required-message="This username field is required">
                                              </div>
                                          </div>
                                      </div>

                                      <div class="col-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="account-username">Child Sub Child Menu Link</label>
                                                <input type="text" name="sub_child_item_link" class="form-control" id="account-username" required
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
                                                <h4 style="color:#fff; border-radius:5px; background-color:#00B5B8; padding:10px;" class="card-title">Child Sub  Menu List</h4>
                                            </div>
                                            <div class="card-content collapse show">
                                                <div class="card-body card-dashboard">
                                                    <table class="table table-striped table-bordered dom-jQuery-events">
                                                        <thead>
                                                            <tr>
                                                                <th>Child Menu Name</th>
                                                                <th>Sub Child Menu Name</th>
                                                                <th>Sub Child Menu Link</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($sub_child_menus as $row_sub_child_menus)
                                                            @php
                                                                $child_menu_three =  DB::table('child_menus')->where('id', '=', $row_sub_child_menus->child_menu_id)->get();
                                                            @endphp
                                                            <tr>
                                                              <td>{{$child_menu_three[0]->item_name}}</td>
                                                              <td>{{$row_sub_child_menus->item_name}}</td>
                                                              <td>{{$row_sub_child_menus->item_link}}</td>
                                                              <td> 
                                                                  
                                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#subChildMenuModal{{$row_sub_child_menus->id}}"> Edit</a> | <a onclick='return confirm("Are you sure? You want to delete this Record")' href="{{url('/admin/delete_sub_child_menu/'.$row_sub_child_menus->id)}}"> Delete </a> 
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="subChildMenuModal{{$row_sub_child_menus->id}}" tabindex="-1" role="dialog" aria-labelledby="subChildMenuModal{{$row_sub_child_menus->id}}" aria-hidden="true">
                                                                  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                      <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLongTitle">{{$row_sub_child_menus->item_name}}</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                          <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                      </div>
                                                                      <div class="modal-body">
                                                                          <form method="POST" action="{{url('admin/edit_sub_child_menu')}}">
                                                                              @csrf
                                                                              <input type="hidden" value="{{$row_sub_child_menus->id}}" name="id" >
                                                              
                                                                                <div class="row">
                                                                                    <div class="col-12">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="account-username">Sub Menu Name</label> 
                                                                                                
                                                                                                    <select name="main_menu_id" class="form-control">
                                                                                                        @foreach($child_menu_four as $main_menu_row)
                                                                                                            @if($row_sub_child_menus->child_menu_id == $main_menu_row->id)
                                                                                                                    <option selected value="{{$main_menu_row->id}}"> {{$main_menu_row->item_name}} </option>  
                                                                                                            @endif
                                                                                                          <option value="{{$main_menu_row->id}}"> {{$main_menu_row->item_name}} </option>
                                                                                                        @endforeach
                                                                                                    </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
    
                                                                                    <div class="col-12">
                                                                                        <div class="form-group">
                                                                                            <div class="controls">
                                                                                                <label for="account-username">Sub Child Menu Name</label>
                                                                                                <input type="text" value="{{$row_sub_child_menus->item_name}}" name="edit_sub_child_item_name" class="form-control" id="account-username" required
                                                                                                    data-validation-required-message="This username field is required">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
    
                                                                                    <div class="col-12">
                                                                                      <div class="form-group">
                                                                                          <div class="controls">
                                                                                              <label for="account-username">Sub Child Menu Link / Page Link</label>
                                                                                              <input type="text" value="{{$row_sub_child_menus->item_link}}" name="edit_sub_child_item_link" class="form-control" id="account-username" required
                                                                                                  data-validation-required-message="This username field is required">
                                                                                          </div>
                                                                                      </div>
                                                                                  </div>
                                                              
                                                                                 
                                                                                    
                                                                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                                                        <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Create
                                                                                            Menu</button>
                                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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

  @endsection
