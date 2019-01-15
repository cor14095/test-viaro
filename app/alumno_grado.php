<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alumno_grado extends Model
{
  // Table for alumno_grado
  protected $table = 'alumno_grado';

  public $timestamps = false;

  protected $fillable = [
    'Seccion'
  ];

  protected $guarded = ['id'];

  public function alumno() {
    return $this->belongsTo('App\alumno', 'AlumnoID');
  }

  public function grado() {
    return $this->belongsTo('App\grado', 'GradoID');
  }
}
