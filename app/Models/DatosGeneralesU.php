<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosGeneralesU extends Model
{
    protected $table="datos_generales_u_s";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
    protected $fillable = ['sexo','edad','estado_civil','discapacidad','antiguedad_legis','antiguedad_puesto','nivel_puesto','tipo_contrato','rfc_usuario'];
}
