<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_histori_posyandu extends Model
{
    protected $table = "histori_posyandu";

    public function balita(){
        return $this->belongsTo(table_balita::class, 'id', 'id_histori_posyandu');
    }

    public function user(){
        return $this->hasMany(table_user::class, 'id_histori_posyandu', 'id');
    }
}
