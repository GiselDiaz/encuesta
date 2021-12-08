<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factores extends Model
{
    protected $table="factores";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
