<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_user_role extends Model
{
    protected $table = "user_role_table";

    public function user(){
        return $this->belongsTo(table_user::class, 'id', 'id_user');
    }

    public function role(){
        return $this->belongsTo(table_role::class, 'id', 'id_role');
    }
}
