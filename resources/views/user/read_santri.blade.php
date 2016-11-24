<!DOCTYPE html>
<html lang="en">
  <script src="../assets/jquerypic.js"></script>
  <head>
    
    @include('headermeta')
    
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
            
            @include('user/sidebar')
          </div>
        </div>
        @include('user/topmenu')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Luhur Al-Kautsar <small>Admin System</small></h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Data Santri </h2>
                    
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link">&nbsp;</a></li>
                      <li><a class="collapse-link">&nbsp;</a></li>
                      <li><a class="collapse-link">&nbsp;</a></li>
                      <li><a class="collapse-link">&nbsp;</a></li>
                      <li><a class="collapse-link">&nbsp;</a></li>
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    
                    @if(Session::has('message'))
                    <span>{{ Session::get('message') }}</span>
                    @endif
                    <!-- <a href="{{ URL('data-sis')}}" class="btn btn-primary"> Add Data Siswa </a>  -->
                    <div class="x_content">
                      <a href="{{URL ('print')}}" target="_blank" class="btn btn-success" align="left"><i class="glyphicon glyphicon-print"></i> Print</a>
                      <!-- modals -->
                      <!-- Modal pendaftaran-->
                      
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Add Santri</button>
                      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                              </button>
                              <h4 class="modal-title" id="myModalLabel">Masukan Data Santri</h4>
                            </div>
                            <div class="modal-body">
                              <form  class="form-horizontal form-label-left" method="post"  target="_blank" action="{{url('/daftar_santri')}}">
                                <Input type="hidden" name"_token" value="{{csrf_token()}}">
                                {{csrf_field()}}
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama lengkap</label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" placeholder="Nama lengkap" name="nama_lengkap" required="">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Panggilan </label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" placeholder="Nama Panggilan"  name="nama_panggilan" required="">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Tangga Lahir</label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="date" class="form-control" name="tanggal_lahir" required="">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis kelamin</label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div id="gender" class="btn-group" data-toggle="buttons">
                                      <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                        <input type="radio" name="jenis_kelamin" value="Laki-Laki" data-parsley-multiple="gender"> &nbsp; Male &nbsp;
                                      </label>
                                      <label class="btn btn-info" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                        <input type="radio" name="jenis_kelamin" value="Perempuan" data-parsley-multiple="gender"> Female
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <textarea class="form-control" rows="3" placeholder="Alamat" name="alamat" required=""></textarea>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Daerah Asal</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control" name="daerah" placeholder="Daerah Asal" required="">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select class="form-control" name="status">
                                    <option value="Pelajar">Pelajar</option>
                                    <option value="Person">Person</option>
                                    <option value="CKM">CKM</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Ayah</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control" name="ayah" placeholder="Nama Ayah" required="">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Ibu</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control" name="ibu" placeholder="Nama Ibu" required="">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nomer HandPhone</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="number" class="form-control" name="no_hp" placeholder="Nomer Handphone OrangTua" required="">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Di terima diKelas </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select class="form-control" name="kelas_pondok">
                                    <option value="1">Tajwid</option>
                                    <option value="2">Pegon-Bacaan</option>
                                    <option value="3">Lambatan</option>
                                    <option value="4">Cepatan</option>
                                    <option value="5">Saringan</option>
                                  </select>
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <div id="image-preview">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image-upload" id="image-label">Choose File</label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="file" name="file" id="profile-img">
                                    <img src="" id="profile-img-tag" width="200px" />
                                    <script type="text/javascript">
                                    function readURL(input) {
                                    if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                                    
                                    reader.onload = function (e) {
                                    $('#profile-img-tag').attr('src', e.target.result);
                                    }
                                    reader.readAsDataURL(input.files[0]);
                                    }
                                    }
                                    $("#profile-img").change(function(){
                                    readURL(this);
                                    });
                                    </script>
                                  </div>
                                </div>
                              </div>
                              
                              
                            </div>
                            <div class="modal-footer">
                              <button type="submit" value="kirim" class="btn btn-primary"> Daftar </button>
                              
                              <button type="reset"  value="reset" class="btn btn-danger" >Reset</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--- End Modal pendaftaran-->
                    
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th> No </th>
                          <th> Nis </th>
                          <th> Nama Lengakap </th>
                          <th> Jenis Kelamin</th>
                          <th> Daerah </th>
                          <th> Status</th>
                          <th> Nama Ayah </th>
                          <th> No Hp</th>
                          <th> Kelas</th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <?php $ni=1; ?>
                      @foreach($santri as $data3)
                      <tr>
                        <td>{{$ni++}}</td>
                        <td>{{$data3 -> nis}}</td>
                        <td>{{$data3 -> nama_lengkap}}</td>
                        <td>{{$data3 -> jenis_kelamin}}</td>
                        <td>{{$data3 -> daerah}}</td>
                        <td>{{$data3 -> status}}</td>
                        <td>{{$data3 -> ayah}}</td>
                        <td>{{$data3 -> no_hp}}</td>
                        <td>{{$data3 -> id_kelas}}</td>
                        
                        <td> <a href="hapus/{{ $data3->nis}}" onclick="return confirm('Are your sure want delete this data?')" <i class="fa fa-trash"> </i> Delete </a> ||
                        <a href="santri_edit/{{ $data3->nis}}" <i class="fa fa-edit"></i> Edit </a>
                        <!-- <a href="{{URL ('print_santri')}}" target="_blank"><i class="fa fa-print"></i> Print</a> -->
                      </td>
                    </tr>
                    @endforeach
                    <!-- /page content -->
                    
                    @include('footer')
                    
                  </div>
                </div>
                @include('footerjs')
                
                <!-- Datatables -->
                <script src="{{ asset("assets/gentelella/vendors/datatables.net/js/jquery.dataTables.min.js") }}" ></script>
                <script src="{{ asset("assets/gentelella/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js") }}" ></script>
                <script src="{{ asset("assets/gentelella/vendors/datatables.net-buttons/js/dataTables.buttons.min.js") }}" ></script>
                <script src="{{ asset("assets/gentelella/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js") }}" ></script>
                <script src="{{ asset("assets/gentelella/vendors/datatables.net-buttons/js/buttons.flash.min.js") }}" ></script>
                <script src="{{ asset("assets/gentelella/vendors/datatables.net-buttons/js/buttons.html5.min.js") }}" ></script>
                <script src="{{ asset("assets/gentelella/vendors/datatables.net-buttons/js/buttons.print.min.js") }}" ></script>
                <script src="{{ asset("assets/gentelella/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js") }}" ></script>
                <script src="{{ asset("assets/gentelella/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js") }}" ></script>
                <script src="{{ asset("assets/gentelella/vendors/datatables.net-responsive/js/dataTables.responsive.min.js") }}" ></script>
                <script src="{{ asset("assets/gentelella/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js") }}" ></script>
                <script src="{{ asset("assets/gentelella/vendors/datatables.net-scroller/js/datatables.scroller.min.js") }}" ></script>
                <script src="{{ asset("assets/gentelella/vendors/jszip/dist/jszip.min.js") }}" ></script>
                <script src="{{ asset("assets/gentelella/vendors/pdfmake/build/pdfmake.min.js") }}" ></script>
                <script src="{{ asset("assets/gentelella/vendors/pdfmake/build/vfs_fonts.js") }}" ></script>
                <!-- Custom Theme Scripts -->
                <script src="{{ asset("assets/gentelella/build/js/custom.min.js") }}" ></script>
                <script src="blueprint-master/storage/jquerypic.js"></script>
                <!-- Datatables -->
                <script>
                
                $('#addImage').on('change', function(evt) {
                var selectedImage = evt.currentTarget.files[0];
                var imageWrapper = document.querySelector('.image-wrapper');
                var theImage = document.createElement('img');
                imageWrapper.innerHTML = '';
                
                var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                if (regex.test(selectedImage.name.toLowerCase())) {
                if (typeof(FileReader) != 'undefined') {
                var reader = new FileReader();
                reader.onload = function(e) {
                theImage.id = 'new-selected-image';
                theImage.src = e.target.result;
                imageWrapper.appendChild(theImage);
                }
                //
                reader.readAsDataURL(selectedImage);
                } else {
                //-- Let the user knwo they cannot peform this as browser out of date
                console.log('browser support issue');
                }
                } else {
                //-- no image so let the user knwo we need one...
                $(this).prop('value', null);
                console.log('please select and image file');
                }
                });
                $(document).ready(function() {
                var handleDataTableButtons = function() {
                if ($("#datatable-buttons").length) {
                $("#datatable-buttons").DataTable({
                dom: "Bfrtip",
                buttons: [
                {
                extend: "copy",
                className: "btn-sm"
                },
                {
                extend: "csv",
                className: "btn-sm"
                },
                {
                extend: "excel",
                className: "btn-sm"
                },
                {
                extend: "pdfHtml5",
                className: "btn-sm"
                },
                {
                extend: "print",
                className: "btn-sm"
                },
                ],
                responsive: true
                });
                }
                };
                TableManageButtons = function() {
                "use strict";
                return {
                init: function() {
                handleDataTableButtons();
                }
                };
                }();
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable({
                keys: true
                });
                $('#datatable-responsive').DataTable();
                $('#datatable-scroller').DataTable({
                ajax: "js/datatables/json/scroller-demo.json",
                deferRender: true,
                scrollY: 380,
                scrollCollapse: true,
                scroller: true
                });
                var table = $('#datatable-fixed-header').DataTable({
                fixedHeader: true
                });
                TableManageButtons.init();
                });
                </script>
                <!-- /Datatables -->
              </body>
            </html>