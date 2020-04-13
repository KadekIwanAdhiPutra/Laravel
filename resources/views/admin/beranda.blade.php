@extends('layout.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Beranda
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
</section>

    <!-- Main content -->
    <div class="col-lg-12">
    <section class="content">

      <!-- Default box -->

        <div class="box-body">
          
        <div class="box">
            <div class="box-header">

              <div class="box-tools">
          
              </div>
            </div>
            <!-- /.box-header -->

            <div class="box-body table-responsive no-padding">
          
              <table class="table table-hover">
                <tbody>
                <tr>
                  <th></th>
                  <th>Biodata</th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th>Studi Kasus</th>
                </tr>
                <tr>
                  <td></td>
                  <td>Nama</td>
                  <td>Kadek Iwan Adhi Putra</td>
                  <td></td>
                  <td></td>
                  <td>Judul</td>
                  <td>Sistem Pelayanan Apotek Laksamana</td>
                </tr>
                <tr>
                  <td></td>
                  <td>NIM</td>
                  <td>1815051021</td>
                  <td></td>
                  <td></td>
                  <td>Pennjelasan</td>
                  <td>Sistem apotek ini mempermudah karyawan untuk mengecek stok obat dan memudahkan pembeli saat membeli obat</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Program Studi</td>
                  <td>Pendidikan Teknik Informatika</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                </tr>
              </tbody></table>
              <div class="col-lg-12">
      <table class="table table-bordered">
        <a href="{{route('obat.create')}}">Tambah Data</a>
          <thead>
              <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Harga</th>
                <th>Stock</th>
                <th>Kadaluarsa</th>
                <th>Aksi</th>
              </tr>
          </thead>
            <tbody>
               @foreach ($obat as $in=>$val )
                  <tr>
                    <td>{{$in+1}}</td>
                    <td>{{$val->namaObat}}</td>
                    <td>{{$val->jenisObat}}</td>
                    <td>{{$val->harga}}</td>
                    <td>{{$val->stock}}</td>
                    <td>{{$val->kadaluarsa}}</td>
                    <td>
                      <a href="{{route('obat.edit',$val->Id_Obat)}}">update</a>
                      <form action="{{route('obat.destroy',$val->Id_Obat)}}" method="POST">
                          @csrf
                          @method('DELETE')
                      <button type="submit">delete</button>
                      </form>
                    </td>
                  </tr>
               @endforeach
            </tbody>
      </table>
      {{$obat->links()}}
            </div>
          </div>
   
          </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        
        </div>
        
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection   