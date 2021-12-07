<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoCivil extends Model
{
    protected $table="estado_civil";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
