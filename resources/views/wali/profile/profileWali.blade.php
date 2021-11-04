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
                                <h1>Profile Wali</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-md-right" style="font-size:14px">
                                    <li class="breadcrumb-item">
                                        <a href="/tutor">Wali</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        Profile Wali
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
</div>
<!-- /.content-header -->
<!-- Main content -->
@php $no = 1; @endphp
@foreach($data as $d)
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
                            <img class="navbar-brand-full" src="{{('/tema/images/user.png')}}" width="300px"
                                alt="upload foto" style="display:block; margin-left:auto; margin-right:auto;">
                            @else
                            <a href="{{ url('/data_file/'.$d->file) }}" target="_blank">
                                <img width="250px" src="{{ url('/data_file/'.$d->file) }}"
                                    style="display:block; margin-left:auto; margin-right:auto;">
                            </a>
                            @endif
                        </div>
                        @endforeach
                        @foreach($user as $u)
                        <hr class="photo">
                        <h4 class="font-weight-normal" style="text-align:center" value="{{ $u->email }}">{{ $u->name }}
                        </h4>
                        <h6 class="font-weight-normal" style="text-align:center" value="{{ $u->email }}">{{ $u->email }}
                            </h4>
                                <br>
                                @php $hp = $u->phone @endphp
                            @endforeach
                           
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-user mr-2"></i>Biodata
                        <hr>
                        @foreach($data as $d)
                        @php $idWal = $d->id; @endphp
                        <table class="w-100 table-responsive-md">
                            <tbody>
                                <tr>
                                    <th>
                                        Nama
                                        <input type="text" class="form-control" value="{{DB::table('users')->where('id','=', Auth::user()->id)->value('name')}}"
                                            style="margin-right:190px;background:white;border:none" disabled>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        Tanggal Lahir
                                        <input type="text" class="form-control" value="{{ $d->tanggal_lahir }}"
                                            style="margin-right:190px;background:white;border:none" disabled>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        No HP
                                        <input type="text" class="form-control" value="{{ $hp}}"
                                            style="margin-right:190px;background:white;border:none" disabled>
                                    </th>
                                </tr>
                                <td>
                                    <a href="{{route('dataWali.edit',$d->id)}}" class="btn-edit" style="margin-left:auto;">Edit
                                    Profil</a>
                                </td>
                            </tbody>
                        </table>
                        @endforeach
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <i class="fas fa-user mr-2"></i>Siswa
                        </div>
                        <div class="col-2 offset-8">
                            <a href="{{route('siswaWali.create')}}" class="btn-edit">Tambah</a>
                        </div>
                    </div>
                    <hr>
                    @if(count($siswaWali) > 0)     
                        <table class="w-100 table-responsive-md">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($siswaWali as $sw)                             
                                <td>
                                    {{$sw->name}}
                                </td>
                                <td>
                                    {{$sw->status_siswa}}
                                </td>
                                <td>
                                    <form class="delete" action="{{ route('siswaWali.destroy', $sw->id)}}" method="post">
                                        <input type="hidden" name="_method" value="DELETE">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger delete-btn delete-confirm" style="margin-left: -2px">
                                            <i class="fa fa-lg fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                                @endforeach
 
                            </tbody>
                        </table>
                        @else
                            Belum ada data siswa
                        @endif  
                    </div>
                </div>
            </div>

<!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content -->

@endsection
