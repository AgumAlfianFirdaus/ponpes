
<!DOCTYPE html>
<html lang="en">
  <head>
    
    @include('gentelella/headermeta')
    
    <!-- Datatables -->
    <link href="{{ asset("assets/gentelella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css") }}"  rel="stylesheet">
    <link href="{{ asset("assets/gentelella/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css") }}"  rel="stylesheet">
    <link href="{{ asset("assets/gentelella/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css") }}"  rel="stylesheet">
    <link href="{{ asset("assets/gentelella/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css") }}"  rel="stylesheet">
    <link href="{{ asset("assets/gentelella/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css") }}"  rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset("assets/gentelella/build/css/custom.min.css") }}"  rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            
            @include('gentelella/sidebar')

          </div>
        </div>


        @include('gentelella/topmenu')


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>User Profile</h3>
              </div>

            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>User Report <small>Activity report</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">

                      <div class="profile_img">

                        <!-- end of image cropping -->
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="images/picture.jpg" alt="Avatar" title="Change the avatar">

                          <!-- Cropping modal -->
                          <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <form class="avatar-form" action="crop.php" enctype="multipart/form-data" method="post">
                                  <div class="modal-header">
                                    <button class="close" data-dismiss="modal" type="button">&times;</button>
                                    <h4 class="modal-title" id="avatar-modal-label">Change Avatar</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="avatar-body">

                                      <!-- Upload image and data -->
                                      <div class="avatar-upload">
                                        <input class="avatar-src" name="avatar_src" type="hidden">
                                        <input class="avatar-data" name="avatar_data" type="hidden">
                                        <label for="avatarInput">Local upload</label>
                                        <input class="avatar-input" id="avatarInput" name="avatar_file" type="file">
                                      </div>

                                      <!-- Crop and preview -->
                                      <div class="row">
                                        <div class="col-md-9">
                                          <div class="avatar-wrapper"></div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="avatar-preview preview-lg"></div>
                                          <div class="avatar-preview preview-md"></div>
                                          <div class="avatar-preview preview-sm"></div>
                                        </div>
                                      </div>

                                      <div class="row avatar-btns">
                                        <div class="col-md-9">
                                          <div class="btn-group">
                                            <button class="btn btn-primary" data-method="rotate" data-option="-90" type="button" title="Rotate -90 degrees">Rotate Left</button>
                                            <button class="btn btn-primary" data-method="rotate" data-option="-15" type="button">-15deg</button>
                                            <button class="btn btn-primary" data-method="rotate" data-option="-30" type="button">-30deg</button>
                                            <button class="btn btn-primary" data-method="rotate" data-option="-45" type="button">-45deg</button>
                                          </div>
                                          <div class="btn-group">
                                            <button class="btn btn-primary" data-method="rotate" data-option="90" type="button" title="Rotate 90 degrees">Rotate Right</button>
                                            <button class="btn btn-primary" data-method="rotate" data-option="15" type="button">15deg</button>
                                            <button class="btn btn-primary" data-method="rotate" data-option="30" type="button">30deg</button>
                                            <button class="btn btn-primary" data-method="rotate" data-option="45" type="button">45deg</button>
                                          </div>
                                        </div>
                                        <div class="col-md-3">
                                          <button class="btn btn-primary btn-block avatar-save" type="submit">Done</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- <div class="modal-footer">
                                                    <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                                                  </div> -->
                                </form>
                              </div>
                            </div>
                          </div>
                          <!-- /.modal -->

                          <!-- Loading state -->
                          <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
                        </div>
                        <!-- end of image cropping -->

                      </div>
                      <h3>Samuel Doe</h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> San Francisco, California, USA
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> Software Engineer
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i>
                          <a href="http://www.kimlabs.com/profile/" target="_blank">www.kimlabs.com</a>
                        </li>
                      </ul>

                      <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                      <br />

                      <!-- start skills -->
                      <h4>Skills</h4>
                      <ul class="list-unstyled user_data">
                        <li>
                          <p>Web Applications</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                          </div>
                        </li>
                        <li>
                          <p>Website Design</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="70"></div>
                          </div>
                        </li>
                        <li>
                          <p>Automation & Testing</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="30"></div>
                          </div>
                        </li>
                        <li>
                          <p>UI / UX</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                          </div>
                        </li>
                      </ul>
                      <!-- end of skills -->

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Projects Worked on</a>
                          </li>
                          <li role="presentation" class="active"><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="home-tab">

                            <!-- start user projects -->
                            <table class="data table table-striped no-margin">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Project Name</th>
                                  <th>Client Company</th>
                                  <th class="hidden-phone">Hours Spent</th>
                                  <th>Contribution</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>New Company Takeover Review</td>
                                  <td>Deveint Inc</td>
                                  <td class="hidden-phone">18</td>
                                  <td class="vertical-align-mid">
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-success" data-transitiongoal="35"></div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td>New Partner Contracts Consultanci</td>
                                  <td>Deveint Inc</td>
                                  <td class="hidden-phone">13</td>
                                  <td class="vertical-align-mid">
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-danger" data-transitiongoal="15"></div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td>Partners and Inverstors report</td>
                                  <td>Deveint Inc</td>
                                  <td class="hidden-phone">30</td>
                                  <td class="vertical-align-mid">
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-success" data-transitiongoal="45"></div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>4</td>
                                  <td>New Company Takeover Review</td>
                                  <td>Deveint Inc</td>
                                  <td class="hidden-phone">28</td>
                                  <td class="vertical-align-mid">
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-success" data-transitiongoal="75"></div>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                            <!-- end user projects -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content3" aria-labelledby="profile-tab">
                            <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                              photo booth letterpress, commodo enim craft beer mlkshk </p>
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
        <!-- /page content -->

        @include('gentelella/footer')
        
      </div>
    </div>

    @include('gentelella/footerjs')
    
    <!-- bootstrap-progressbar -->
    <script src="{{ asset("assets/gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js") }}"></script>
    
    <script src="{{ asset("assets/gentelella/build/js/custom.min.js") }}" ></script>

  </body>
</html>