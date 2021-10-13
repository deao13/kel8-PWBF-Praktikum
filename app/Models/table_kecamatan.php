<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_kecamatan extends Model
{
   protected $table = "kecamatan_table";

   public function kelurahan(){
       return $this->hasMany(table_kelurahan::class, 'id_kelurahan', 'id');
   }
}
