<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preguntas extends Model
{
    protected $table="preguntas";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
