<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Finca extends Model
{
    protected $fillable = ['usuario_id', 'nombre', 'ubicacion', 'area', 'numero_finca'];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }

    public function ganados()
    {
        return $this->hasMany(Ganado::class, 'finca_id');
    }
}
