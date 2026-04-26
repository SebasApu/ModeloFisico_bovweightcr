<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['tipo_id', 'nombre', 'contrasena'];

    protected $hidden = ['contrasena'];

    public function tipoUsuario()
    {
        return $this->belongsTo(TipoUsuario::class, 'tipo_id');
    }

    public function fincas()
    {
        return $this->hasMany(Finca::class, 'usuario_id');
    }

    public function reportes()
    {
        return $this->hasMany(Reporte::class, 'usuario_id');
    }
}
