<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table="solicituds";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];

    public function libros()
    {
        return $this->belongsTo(Libros::class, 'libro_id','id');
    }

    public function sp()
    {
        return $this->belongsTo(ServidorPulbicoDetail::class, 'solicitante','N_Usuario');
    }
}
