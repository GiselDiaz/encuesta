<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServidorPulbicoDetail extends Model
{
    use HasFactory;
    protected $connection = "mysql2";
    protected $table = "s_usuario";
    protected $primaryKey = "id_Usuario";
    protected $guarded = ["id_Usuario", "created_at", "updated_at","delete_at"];

    public function dependencia(){
        return $this->hasOne(Dependencia::class,"id_Dependencia","id_Dependencia")->withDefault(["Nombre" => "No identificado"]);

    }

    public function direccion(){
        return$this->hasOne(Direccion::class, "id_Direccion", "id_Direccion")->withDefault(["Nombre" => "No identificado"]);
    }

    public function departamento(){
        return$this->hasOne(Departamento::class, "id_Departamento", "id_Departamento")->withDefault(["Nombre" => "No identificado"]);
    }

    public function user(){
        return $this->hasOne(User::class,"rfc","N_Usuario");
    }

    public function respuestas(){
        return $this->belongsTo(Respuestas::class,"user_id","id_Usuario");
    }
}
