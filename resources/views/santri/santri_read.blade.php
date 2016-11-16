
<!DOCTYPE html>
<html lang="en">
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
            
            @include('admin/sidebar')

          </div>
        </div>


        @include('admin/topmenu')


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>LUHUR AL-KAUTSAR <small>Admin System</small></h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Daftar santri Pondok luhur Al-KAUTSAR</h2>
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
                    <!-- <a href="{{ URL('tambah_santri')}}" class="btn btn-primary"> Add Santri </a> -->
                  <div class="x_content">

                  <!-- modals -->
                  <!-- Large modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Add Santi</button>
                  <form  class="form-horizontal form-label-left" method="post" action="{{url('/daftar_santri')}}">
                      <Input type="hidden" name"_token" value="{{csrf_token()}}">
                      {{csrf_field()}}

                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-lg">
                      

                      
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Masukan Data Santri</h4>
                        </div>

                        
                          <div class="modal-body">

                       
                       

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
                            <option value="pelajar">Pelajar</option>
                            <option value="person">Person</option>
                            <option value="ckm">CKM</option>
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
                            <option value="tajwid">Tajwid</option>
                            <option value="pegon">Pegon-Bacaan</option>
                            <option value="lambatan">Lambatan</option>
                            <option value="cepatan">Cepatan</option>
                          </select>
                        </div>
                      </div>
                      
                       <div class="form-group">
                        <div id="image-preview">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image-upload" id="image-label">Choose File</label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="file" name="picture" id="image-upload" />
                        </div>
                      </div> 
                      </div>
                  
                      <div class="modal-footer">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="submit" value ="kirim" class="btn btn-primary">Submit</button>
                          <button type="reset" value="reset" class="btn btn-danger">Reset</button>
                        </div>
                      </div>
                      </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>

                  <!-- End Modal -->
                

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
                <td>{{$data3 -> kelas_pondok}}</td>
               
                <td> <a href="hapus/{{ $data3->nis}}" onclick="return confirm('Are your sure want delete this data?')" <i class="fa fa-trash"> </i> Delete </a> ||
                     <a href="form-edit/{{ $data3->nis}}" <i class="fa fa-edit"></i> Edit </a>
                </td>
                </tr>
				      	<!--  -->
				  	
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
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.uploadPreview.min.js"></script>

    <!-- Datatables -->
    <script>
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