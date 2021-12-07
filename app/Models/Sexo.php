<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    protected $table="sexo";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
