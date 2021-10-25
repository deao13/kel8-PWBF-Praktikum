<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_role extends Model
{
    protected $table = "role";
    protected $fillable = ['nama_role'];

    public function user_role(){
        return $this->hasMany(table_user_role::class, 'id_role', 'id');
    }
}
