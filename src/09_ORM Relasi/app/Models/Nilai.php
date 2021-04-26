<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $table ='mahasiswa_matakuliah';

    public function matakuliah(){
        return $this->belongsTo(Matakuliah::class);
    }
    public function mahasiswa(){
        return $this->belongsTo(mahasiswas::class,'nim');
    }
}