<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discapacidad extends Model
{
    protected $table="discapacidad";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
