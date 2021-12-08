<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $connection = "mysql2";
    protected $table = "users_safs";
    protected $guarded = ["id","created_at","updated_at"];

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function servidorPublico()
    {
        return $this->belongsTo(ServidorPulbicoDetail::class, "rfc","N_Usuario")->withDefault(["Nombre" => "Usuario no identificado"]);
    }
    public function setPasswordAttribute($v)
    {
        if (trim($v)) {
            $this->attributes['password'] = app('hash')->make(trim($v));
        }
    }
    public function respuestas()
    {
        return $this->hasMany(Respuestas::class);
    }
}
