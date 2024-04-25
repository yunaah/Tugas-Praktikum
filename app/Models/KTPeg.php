<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ktpeg extends Model
{
    use HasFactory;

    protected $table = 'ktpeg';

    protected $premaryKey = 'id_ktpeg';

    public function dosen(){
        return $this->belongsTo(Dosen::class);
    }

}

