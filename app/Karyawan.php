<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    //
    protected $table='karyawan';
    protected $primaryKey='Id_Karyawan';
    protected $fillable=['namaKaryawan','alamat','jenisKelamin','noTelp'];
}