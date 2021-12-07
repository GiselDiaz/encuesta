<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NivelPuesto extends Model
{
    protected $table="nivel_puesto";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
