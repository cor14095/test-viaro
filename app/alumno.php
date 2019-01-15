<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    // Table for alumno
    protected $table = 'alumno';

    public $timestamps = false;

    protected $fillable = [
      'Nombre',
      'Apellidos',
      'Genero',
      'Fecha_nacimiento'
    ];

    protected $guarded = ['id'];

    public function alumno_grado() {
      return $this->hasOne('App\alumno_grado', 'AlumnoID');
    }
}
