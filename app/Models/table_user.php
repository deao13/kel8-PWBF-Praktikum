<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_user extends Model
{
    protected $table = "user_table";
    protected $fillable = ['username', 'password'];

    public function histori_posyandu(){
        return $this->belongsTo(table_histori_posyandu::class, 'id', 'id_histori_posyandu');
    }

    public function user_role(){
        return $this->hasMany(table_user_role::class, 'id_user', 'id');
    }
}
