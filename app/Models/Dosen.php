<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';
    protected $primaryKey = 'id_dosen';
    protected $fillable = ['id_dosen', 'nip', 'email', 'nama', 'tanggal_lahir', 'no_hp'];
    public $timestamps = false;

    public function ktpeg(){
        return $this->hasOne(ktpeg::class, 'id_dosen');
    }
}
