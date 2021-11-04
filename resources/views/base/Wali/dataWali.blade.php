@include('base/header_page')
@extends('base/script_page')
@section('content')
<!DOCTYPE html>
<html lang="en">
<style type="text/css">
    .form {
        margin-left: 4.5em;
    
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 20px;

    }
    .help-block3 {
        color: red;
        font-size: 14px;
        margin-left: 3px;
     
    }
    label {
        font-size: 17px;
    }

        @media screen and (width: 375px) {
        .form {
        margin-left: 0em;
        width: 13em;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 20px;
    }
    }
    @media screen and (width: 414px) {
        .form {
        margin-left: 0.5em;
        width: 13em;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 20px;
    }
    }
    @media screen and (width: 411px) {
        .form {
        margin-left: 0.5em;
        width: 12em;
        font-size: 22px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 20px;
    }
    }
    @media screen and (width: 320px) {
        .form {
        margin-left: -0.7em;
        width: 12em;
      
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 17px;
    }
    }
 @media screen and (width: 360px) {
        .form {
        margin-left: -0.4em;
        width: 12em;
   
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 20px;
    }
    }
    .help-block {
        color: red;
    }

    .has-error {
        color: red;
    }

    #custom-button {
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 7px;
        padding-bottom: 7px;
        color: white;
        background-color: #2b91ff;
        border: 1px solid #fff;
        border-radius: 5px;
        cursor: pointer;
    }
     #custom-button:focus {
 color: #ffffff;
 outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)
}
    }

    #custom-button:hover {
        opacity: 80%;
    }

    #custom-text {
        margin-left: 10px;
        font-family: sans-serif;
        color: #aaa;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Inofa Course</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/ material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="set('/ya')}}/assets/css/style.css">


</head>

<div class="main">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <br>
                <div class="col-md-12 col-md-offset-1">
                    <div class="card" style="display:block; margin-left:auto; margin-right:auto;">
                        <div class="card-body">
                            <form method="POST" action="{{ route('dataWali.store')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <h2 class="form">Lengkapi Profil Wali</h2>
                                <input id="id" value="{{ Auth::user()->id }}" type="text" class="form-control" name="id"
                                    required autofocus style="display:none">

                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <div class="form-group{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
                                    <div class="form-title">
                                        <input class="form-control" id="tanggal" name="tanggal_lahir"
                                            placeholder="Tanggal lahir" type="text" value="{{old('tanggal_lahir')}}">
                                    </div>
                                    @if ($errors->has('tanggal_lahir'))
                                    <span class="help-block">
                                        {{ $errors->first('tanggal_lahir') }}
                                    </span>
                                    @endif
                                </div>
                                <div class="alert alert-danger">
                                    <strong>Info!</strong> Ukuran foto maksimal : 2MB
                                </div>
                                Foto Diri
                                <div class="form-group">
                                    <input type="file" id="real-file" hidden="hidden" name="file">
                                    <button type="button" id="custom-button">&nbsp;Foto&nbsp;Anda</button>
                                    <span id="custom-text">Tidak ada foto yang dipilih</span>
                                    <br>
                                    @if($errors->has('file'))
                                    <span class="help-block3">{{$errors->first('file')}}</span>
                                    @endif
                                </div>
                                <br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary d-block"
                                        style="width: 180px; border-radius:50px; margin-left:auto; margin-right:auto;">
                                        Simpan
                                    </button>
                                </div>
                            </form>

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
    // $('#kabupaten').hide();
    $(document).ready(function () {
        $('#provinsi-select').change(function () {
            var provinsi_id = $(this).val();
            var provinsi_name = $("select[name='provinsi-select'] option:selected").text(); //add this
            if (provinsi_id) {
                $.ajax({
                    url: '/getKabupaten/' + provinsi_id,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        $('#provinsi').empty(); //add this
                        $('#provinsi')
                            .append(
                                "<input type='text' style='display:none' name='provinsi' id='provinsi' value='" +
                                provinsi_name + "'>");
                        console.log(data);
                        $('#kabupaten-select').empty();
                        $.each(data, function (key, value) {
                            $('#kabupaten-select')
                                .append('<option value="' + key + '">' + value +
                                    '</option>');
                        });

                    }

                });
            } else {
                $('#kabupaten-select').empty();
            }
        });
        $('#kabupaten-select').change(function () {
            var kabupaten_id = $(this).val();
            var kabupaten_name = $("select[name='kabupaten-select'] option:selected").text(); //add this
            if (kabupaten_id) {
                $.ajax({
                    url: '/getKecamatan/' + kabupaten_id,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        $('#kabupaten').empty(); //add this
                        $('#kabupaten')
                            .append(
                                "<input type='text' style='display:none' name='kabupaten' id='kabupaten' value='" +
                                kabupaten_name + "'>");
                        console.log(data);
                        $('#kecamatan-select').empty();
                        $.each(data, function (key, value) {
                            $('#kecamatan-select')
                                .append('<option value="' + key + '">' + value +
                                    '</option>');
                        });

                    }

                });
            } else {
                $('#kecamatan-select').empty();
            }
        });
        $('#kecamatan-select').change(function () {
            var kecamatan_name = $("select[name='kecamatan-select'] option:selected").text(); //add this
            $('#kecamatan').empty(); //add this
            $('#kecamatan')
                .append(
                    "<input type='text' style='display:none' name='kecamatan' id='kecamatan' value='" +
                    kecamatan_name + "'>");

        });

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


        })
    });
</script>
<script>
    const realFileBtn = document.getElementById("real-file");
    const customBtn = document.getElementById("custom-button");
    const customTxt = document.getElementById("custom-text");

    customBtn.addEventListener("click", function () {
        realFileBtn.click();
    });

    realFileBtn.addEventListener("change", function () {
        if (realFileBtn.value) {
            customTxt.innerHTML = realFileBtn.value.match(
                /[\/\\]([\w\d\s\.\-\(\)]+)$/
            )[1];
        } else {
            customTxt.innerHTML = "Tidak ada foto yang dipilih";
        }
    });
</script>

@endsection
