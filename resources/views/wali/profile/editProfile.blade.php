@extends('wali/base')
@section('content')
<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-12 col-md-offset-6">
                <div class="box box-primary">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Edit Profil</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-md-right" style="font-size:14px">
                                    <li class="breadcrumb-item">
                                        <a href="/profileWali">Profile Wali</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        Edit Profile
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
@php $no = 1; @endphp
@foreach($data as $d)
<form action="{{ route('siswaWali.update', $d->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <i class="fas fa-user mr-2"></i>Foto Profile

                            <hr class="photo">
                            <div class="d-flex justify-content-center" style="overflow-x:auto;">
                                @if($d->file==null)
                                <img id="gambar" class="navbar-brand-full" src="{{('/tema/images/user.png')}}"
                                    width="300px" alt="upload foto"
                                    style="display:block; margin-left:auto; margin-right:auto;">
                                @else
                                <a href="{{ url('/data_file/'.$d->file) }}" target="_blank">
                                    <img id="gambar" width="250px" src="{{ url('/data_file/'.$d->file) }}"
                                        style="display:block; margin-left:auto; margin-right:auto;">
                                </a>
                                @endif

                            </div>
                            <br>
                            <div style="text-align:center">
                                <label for="change_pic">Ganti Foto Profile</label>

                                <br>
                                <strong style=>Info!</strong> Maximum Size Upload : 2MB
                                <input id="foto" class="form-control" name="foto" type="file">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <table class="w-100 table-responsive-md">
                                <tbody>
                                    @endforeach
                                    @foreach($user as $d)
                                    <div class="form-group">
                                        <label for="">Nama :</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{$d->name}}" required>
                                    </div>
                                    @if ($errors->has('name'))
                                    <span class="help-block" style="color:red">
                                        {{ $errors->first('name') }}
                                    </span>
                                    @endif
                            

                                    <div class="form-group">
                                        <label for="">No Telepon :</label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            value="{{$d->phone}}" required>
                                    </div>

                                    @if ($errors->has('phone'))
                                    <span class="help-block" style="color:red">
                                        {{ $errors->first('phone') }}
                                    </span>
                                    @endif

                                    <div class="form-group">
                                        <label for="">Email :</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            value="{{$d->email}}" required>
                                    </div>
                                    @if ($errors->has('email'))
                                    <span class="help-block" style="color:red">
                                        {{ $errors->first('email') }}
                                    </span>
                                    @endif

                                    @endforeach
                                    @foreach($data as $d)

                                    <div class="form-group">
                                        <div class="input-group-prepend">
                                            <label> Tanggal Lahir
                                            </label>
                                        </div>
                                        <input class="form-control" id="tanggal" name="tanggal_lahir"
                                            placeholder="MM/DD/YYY" type="text" value="{{ $d->tanggal_lahir }}"
                                            required>
                                    </div>

                                    <input type=" text" class="form-control" id="status" name="status"
                                        value=" {{ $d->status }}" style="display:none">
                                </tbody>
                            </table>

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
                        </div>
                    </div>
                </div>
</form>
<!-- /.col-md-6 -->
@endforeach
</div>
</div>

<!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content -->

@endsection
@section('sweet')
<script>
    //buat profile
    $(function () {
        $("#foto").change(function () {
            readURL(this);
        });
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#gambar').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(document).ready(function () {
        var date_input = $('input[name="tanggal_lahir"]'); //our date input has the name "date"
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() :
            "body";
        var options = {
            format: 'dd MM yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        };
        date_input.datepicker(options);

    });
</script>
@endsection