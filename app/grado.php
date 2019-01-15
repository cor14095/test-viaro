<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grado extends Model
{
  // Table for grado
  protected $table = 'grado';

  public $timestamps = false;

  protected $fillable = [
    'Nombre'
  ];

  protected $guarded = ['id'];

  public function profesor() {
    return $this->belongsTo('App\profesor', 'ProfresorID');
  }

  public function alumno_grado() {
    return $this->hasMany('App\alumno_grado', 'GradoID');
  }
}
