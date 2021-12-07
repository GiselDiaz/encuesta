<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antiguedad extends Model
{
    protected $table="antiguedad";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
