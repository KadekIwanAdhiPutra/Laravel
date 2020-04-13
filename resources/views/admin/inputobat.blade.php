@extends('layout.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Daftar Obat
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Obat</a></li>
        <li class="active">Input Obat</li>
      </ol>
</section>

    <!-- Main content -->
    <div class="col-lg-12">
    <section class="content">

      <!-- Default box -->
      <form action="{{(isset($obat))?route('obat.update',$obat->Id_Obat):route('obat.store')}}" methode="POST">
        @csrf
        @if(isset($obat))?@method('PUT')@endif
        <div class="box-body">
            <label class="control-label col-lg-2">Nama</label>
            <div class="col-lg-10">
             <input type="text" value="{{(isset($obat))?$obat->namaObat:old('nama')}}" name="namaObat" class="form-control">
             @error('namaObat')<small style="color:red">{{$message}}</small>@enderror
            </div>
          </div>
          <div class="box-body">
            <label class="control-label col-lg-2">Jenis</label>
            <div class="col-lg-10">
                <input type="text" value="{{(isset($obat))?$obat->jenisObat:old('jenis')}}" name="jenisObat" class="form-control">
                @error('jenisObat')<small style="color:red">{{$message}}</small>@enderror
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