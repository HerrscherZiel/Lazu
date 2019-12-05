@extends('dashboard_admin/base')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manajemen Tutor</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
              <table class="table table-bordered table-striped table-responsive-sm" id="datakaryawan"> 
              <thead class="thead-dark"> 
                <tr class="table-secondary" style="text-align:center; text-transform: uppercase">
                  <th>No.</th>
                  <th>Nama Lengkap</th>
                  <th>Pendidikan</th>
                  <th>Mata Pelajaran</th>
                  <th>Alamat</th>
                  <th>Status</th>
                  <th>Aksi</th>
               </tr>
              </thead>
              <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Dewandaru Aji Darma</td>
                        <td>S1 Ilmu Komputer</td>
                        <td>Matematika</td>
                        <td>Pogung</td>
                        <td>
                          <a class=" btn btn-sm btn-warning" style="color:white;">
                            <span>TAHAP 1</span>
                          </a>
                        </td>
                        <td>
                          <a class=" btn btn-sm btn-success" style="color:white;">
                            <span>TERIMA</span>
                          </a>
                          <a href="#" class=" btn btn-sm btn-danger" style="color:white;">
                            <span>TOLAK</span>
                          </a>
                        </td>
                    </tr>
                </tbody>
          </table>
              </div>
            </div>

            
          </div>
          <!-- /.col-md-6 -->
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
  @section('sweet')
  <script>
         $(document).ready( function () {
           $('#datakaryawan').DataTable();
           });
      </script>
  @endsection