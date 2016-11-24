<!DOCTYPE html>
<html lang="en">
  <!-- <script src="../assets/jquerypic.js"></script> -->
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
                    <div class="x_content">
                    <a href="{{URL ('printbayar')}}" target="_blank" class="btn btn-success" align="left"><i class="glyphicon glyphicon-print"></i> Print</a>

                    <!-- modals -->
                    <!-- Modal Pembayaran-->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Pembayaran</button>
                                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                                        </button>
                                                        <h4 class="modal-title" id="myModalLabel">Masukan Data Pembayaran</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form  class="form-horizontal form-label-left" method="post"  target="blank" action="{{url('bayar')}}">
                                                            <Input type="hidden" name"_token" value="{{csrf_token()}}">
                                                            {{csrf_field()}}
                                                            <div class="form-group">
                                                                <label class="control-label col-md-2 col-sm-3 col-xs-12">Nis / nama</label>
                                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                                    <select class="form-control" name="nis">
                                                                        @foreach($data as $value)
                                                                        <option value="{{ $value->nis }}">{{  $value->nama_panggilan }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-md-2 col-sm-3 col-xs-12">Uang Makan selama </label>
                                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                                    <input type="number" class="form-control"  name="jumlah_bulan" required="">
                                                                </div>
                                                                <label class="control-label col-md-1 col-sm-1 col-xs-12">Bulan </label>
                                                            </div>
                                                            <!-- </div> -->
                                                            <div class="form-group">
                                                                <label class="control-label col-md-2 col-sm-3 col-xs-12">Dari bulan</label>
                                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                                    <select class="form-control" name="awal">
                                                                        <option value="January">January</option>
                                                                        <option value="February">Februari</option>
                                                                        <option value="Maret">Maret</option>
                                                                        <option value="April">April</option>
                                                                        <option value="Mei">Mei</option>
                                                                        <option value="Juni">Juni</option>
                                                                        <option value="Juli">Juli</option>
                                                                        <option value="Agustus">Agustus</option>
                                                                        <option value="September">September</option>
                                                                        <option value="Oktober">Oktober</option>
                                                                        <option value="November">November</option>
                                                                        <option value="Desember">Desember</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                            <div class="form-group">
                                                                <label class="control-label col-md-2 col-sm-3 col-xs-12">Sampai Bulan  </label>
                                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                                    <select class="form-control" name="akhir">
                                                                        <option value=""> -</option>
                                                                        <option value="January">January</option>
                                                                        <option value="February">Februari</option>
                                                                        <option value="Maret">Maret</option>
                                                                        <option value="April">April</option>
                                                                        <option value="Mei">Mei</option>
                                                                        <option value="Juni">Juni</option>
                                                                        <option value="Juli">Juli</option>
                                                                        <option value="Agustus">Agustus</option>
                                                                        <option value="September">September</option>
                                                                        <option value="Oktober">Oktober</option>
                                                                        <option value="November">November</option>
                                                                        <option value="Desember">Desember</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" value="kirim" class="btn btn-primary"> Bayar </button>
                                                            
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
                          <th> No Pembayaran </th>
                          <th> Nis Siswa </th>
                          <th> Penerima</th>
                          <th> Jumlah Bulan</th>
                          <th> Total </th>
                          <th> Pilihan </th>
                        </tr>
                      </thead>
                      <?php $ni=1; ?>
                      @foreach($bayar as $data1)
                      <tr>
                        <td>{{$ni++}}</td>
                        <td>{{$data1 -> no_pembayaran}}</td>
                        <td>{{$data1 -> nis}}</td>
                        <td>{{Auth::user()->username}}</td>
                        <td>{{$data1 -> jumlah_bulan}}</td>
                        <td>{{$data1 -> total}}</td>
                        
                        <td> <a href="del/{{ $data1->no_pembayaran}}" onclick="return confirm('Are your sure want delete this data?')" <i class="fa fa-trash"> </i> Delete </a>
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
                <!-- <script src="blueprint-master/storage/jquerypic.js"></script> -->
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