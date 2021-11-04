@extends('wali/base')
@section('content')
<!-- Content Wrapper. Contains page content --> 
    <div class="content-header">
        <div class="container-fluid">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-md-12">
                                <div class="container-fluid">
                                    <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <h1>Tambah Siswa</h1>
                                        </div>
                                        <div class="col-sm-6">
                                            <ol class="breadcrumb float-md-right" style="font-size:14px">
                                                <li class="breadcrumb-item">
                                                    <a href="javascript:history.back()">Profile Wali</a>
                                                </li>
                                                <li class="breadcrumb-item active">
                                                    Tambah Siswa
                                                </li>
                                            </ol>
                                        </div>

                                    </div>
                                </div>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                @foreach($user as $u)
                                @php $id = $u->id @endphp
                                @endforeach
                                <div class="form-group">
                                    <form action="{{ route('siswaWali.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                        @foreach ($errors->all() as $error)
                                        <p class="text-danger">{{ $error }}</p>
                                        @endforeach

                                        <div class="form-group">
                                            <label for="">Nama Siswa :</label>
                                            <select class="form-control selectbox" name="siswa_id" required="" style="width: 100%">
                                                @foreach($siswa as $s)
                                                <option value="{{$s->id}}">{{$s->name}}</option>
                                                @endforeach
                                            </select>
                                            <input type="hidden" class="form-control" id="status" name="status_siswa"
                                                value="Menunggu Persetujuan">
                                            <input type="hidden" class="form-control" id="status" name="wali_id"
                                                value="{{ auth()->user()->id }}">
                                        </div>
                                        <div class="d-flex">
                                            <button type="submit" class="btn btn-primary d-block"
                                                style="width: 180px; border-radius:50px;margin-left:35%;"
                                                onclick="return confirm('Anda yakin data sudah benar?')">
                                                Simpan
                                            </button>
                                            &nbsp;&nbsp;&nbsp;
                                            <a class="btn btn-danger d-block" href="javascript:history.back()"
                                                style="width: 180px; border-radius:50px;"
                                                onclick="return confirm('Anda yakin ingin membatalkan?')">
                                                Batal
                                            </a>
                                        </div>
                                    </form>
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
    </div>
<!-- /.content-header -->

@endsection
