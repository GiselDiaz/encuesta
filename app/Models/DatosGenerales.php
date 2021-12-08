<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosGenerales extends Model
{
    protected $table="datos_generales_u_s";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];

}
