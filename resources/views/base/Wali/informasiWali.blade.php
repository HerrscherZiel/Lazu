@include('base/header_page')
@extends('base/script_page')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Inofa Course</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/ material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

    <div class="main">
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        <br>
            <div class="col-md-12 col-md-offset-1">
            <div class="card" style="display:block; margin-left:auto; margin-right:auto;">
              <div class="card-body">
             

                    <h2 class="form-title">Perhatian!</h2>
                    <div>
                        <a>
                            Sebelum anda melihat data putra atau putri anda, anda harus menambahkan nama akun putra atau putri anda terlebih dahulu. 
                        </a>
                        <br>
                        <a>
                            Anda dapat menambahkan datanya pada halaman profil anda, kemudian tambahkan data siswa. 
                        </a>
                        <br>
                        <br>
                        <a>
                        Salam Hangat, Inofa Course!
                        </a>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                    @foreach($data as $d)
                        <div class="col-4">
                            <a class="btn btn-primary d-block" style="width: 180px; border-radius:50px; margin-left:auto; margin-right:auto;" href="/wali">
                                OK
                            </a>
                        </div>
                        <div class="col-2">
                        </div>
                        <div class="col-4">
                            <a class="btn btn-primary d-block" style="width: 180px; border-radius:50px; margin-left:auto; margin-right:auto;" href="{{route('tutor')}}">
                                Tambah Sekarang
                            </a>
                        </div>
                    @endforeach
                    </div>
                  
            </div>
            </div>
        </div>
        
    </div>
    </div>
    </div>
    </div>
    

@endsection
@section('day')
<script>

</script>