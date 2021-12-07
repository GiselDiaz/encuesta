<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edades extends Model
{
    protected $table="edad";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
