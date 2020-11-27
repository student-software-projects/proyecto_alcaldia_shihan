<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipo extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_ad'];
    protected $table='equipos';
    protected $primarykey='id';
    protected $fillable = [
        'nombre_equipo', 'logo', 'localidad_id'
    ];

    public function localidades(){
        return $this->hasMany(Localidad::class);
    }

    public function jugadores(){
        return $this->hasMany(Jugador::class);
    }
}
