<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuestas extends Model
{
    protected $table="respuestas";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function Preguntas(){
        return $this->belongsTo(Preguntas::class, 'pregunta');
    }
}
