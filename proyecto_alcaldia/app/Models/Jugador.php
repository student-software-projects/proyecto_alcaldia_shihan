<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jugador extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_ad'];
    protected $table='jugadores';
    protected $primarykey='id';
    protected $fillable = [
        'nombres', 'apellidos', 'numero_camisa', 'apodo', 'equipo_id',
    ];

    public function equipos(){
        return $this->hasMany(Equipo::class);
    }
}
