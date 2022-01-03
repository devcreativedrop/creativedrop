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
          <h3 class="content-header-title mb-0">{{auth()->user()->name}} Profile</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('admin/')}}">Home</a>
                </li>
                <li class="breadcrumb-item active">{{auth()->user()->name}} Profile </li>
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
              <h3 class="m-0">20</h3><span class="text-muted">{{auth()->user()->name}} Profile</span>
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
                      Edit Profile
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link d-flex" id="account-pill-footer_section" data-toggle="pill" href="#account-vertical-footer_section"
                      aria-expanded="false">
                      <i class="feather icon-list"></i>
                      Tasks
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link d-flex" id="account-pill-logo" data-toggle="pill" href="#account-vertical-logo"
                      aria-expanded="false">
                      <i class="feather icon-list"></i>
                      Chat
                  </a>
              </li>

              <li class="nav-item">
                  <a class="nav-link d-flex" id="account-pill-password" data-toggle="pill" href="#account-vertical-password"
                      aria-expanded="false">
                      <i class="feather icon-list"></i>
                      See Attandence
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
                                      Edit Profile
                                  </div>
                              </div>
                              <hr>
                              <form action="{{url('admin/edit_system_user')}}" method="POST">
                                @csrf
                                <input type="hidden" name="user_id" value="{{auth()->user()->id}}"/>
                                <div class="col-12">
                                  <div class="form-group">
                                      <div class="controls">
                                          <label for="account-username">Name </label>
                                          <input type="text" name="name" value="{{$users[0]->name}}" class="form-control" id="account-username">
                                      </div>
                                  </div>
                                </div>  
  
                              <div class="col-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="account-username">Email ID </label>
                                        <input type="text" name="email" value="{{$users[0]->email}}"class="form-control" id="account-username">
                                    </div>
                                </div>
                              </div>  
  
                              <div class="col-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="account-username">Password </label>
                                        <input type="password" name="password" class="form-control" id="account-username" required>
                                            
                                    </div>
                                </div>
                              </div>
  
                              <div class="col-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="account-username">Role </label>
                                        <select name="role_id" class="form-control">
                                          <option value="1"> Admin </option>
                                          <option value="2"> Manager </option>
                                          <option value="3"> Staff </option>
                                        </select>
                                    </div>
                                </div>
                              </div>  
  
                              <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                <button type="submit" class="btn btn-success mr-sm-1 mb-1 mb-sm-0">Create User</button>
                                <button type="reset" class="btn btn-light">Cancel</button>
                            </div>
                            </form>
                              <hr/>
                              
                          </div>
                          <div class="tab-pane fade " id="account-vertical-footer_section" role="tabpanel"
                              aria-labelledby="account-pill-footer_section" aria-expanded="false">
                               <!-- BEGIN: Content-->
                               <div class="media">
                                <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
                                    Tasks
                                </div>
                            </div>
                            <hr>

                           
                            <hr/>
                          
                            
                           
                                    <!-- END: Content-->
  
                          </div>


                          <div class="tab-pane fade " id="account-vertical-logo" role="tabpanel"
                              aria-labelledby="account-pill-logo" aria-expanded="false">
                               <!-- BEGIN: Content-->
                               <div class="media">
                                  
                                <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
                                    Chat
                                </div>
                            </div>
                            <hr>
                            
                                    <!-- END: Content-->
  
                          </div>

                          <div class="tab-pane fade " id="account-vertical-password" role="tabpanel"
                              aria-labelledby="account-pill-password" aria-expanded="false">
                               <!-- BEGIN: Content-->
                               <div class="media">
                                  
                                <div style="color:#fff; border-radius:5px; background-color:#31036e; padding:10px;" class="media-body mt-75">
                                    See Attandance
                                </div>
                            </div>
                            <hr>
                            @php
                              $users = DB::table('users')->get();
                            @endphp
                            
                            <hr/>
  
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
