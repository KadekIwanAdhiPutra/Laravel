@extends('layout.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Daftar Karyawan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Karyawan</a></li>
        <li class="active">Input Karyawan</li>
      </ol>
</section>

    <!-- Main content -->
    <div class="col-lg-12">
    <section class="content">

      <!-- Default box -->
      <form action="{{(isset($karyawan))?route('karyawan.update',$karyawan->Id_Karyawan):route('karyawan.store')}}" methode="POST">
        @csrf
        @if(isset($karyawan))?@method('PUT')@endif
        <div class="box-body">
            <label class="control-label col-lg-2">Nama</label>
            <div class="col-lg-10">
             <input type="text" value="{{(isset($karyawan))?$karyawan->namaKaryawan:old('nama')}}" name="namaKaryawan" class="form-control">
             @error('namaKaryawan')<small style="color:red">{{$message}}</small>@enderror
            </div>
          </div>
          <div class="box-body">
            <label class="control-label col-lg-2">No</label>
            <div class="col-lg-10">
                <input type="text" value="{{(isset($karyawan))?$karyawan->noTelp:old('no')}}" name="noTelp" class="form-control">
                @error('noTelp')<small style="color:red">{{$message}}</small>@enderror
            </div>
        <div class="form-group">
            <button type="submit">SIMPAN</button>
        </div>
        <div class="box">
            <div class="box-header">

              <div class="box-tools">
          
              </div>
            </div>
        </div>
      </form>
    </div>
</div>
@endsection