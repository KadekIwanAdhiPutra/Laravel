<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    //
    protected $table='obat';
    protected $primaryKey='Id_Obat';
    protected $fillable=['namaObat','jenisObat','hargaObat','stock','kadaluarsa'];
}