<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Localidad extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table='localidades';
    protected $primarykey='id';
    protected $fillable = [
        'localidad',
    ];

    public function equipos(){
        return $this->hasMany(Equipo::class);
    }
}
