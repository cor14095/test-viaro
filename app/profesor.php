<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profesor extends Model
{
  // Table for profesor
  protected $table = 'profesor';

  public $timestamps = false;

  protected $fillable = [
    'Nombre',
    'Apellidos',
    'Genero'
  ];

  protected $guarded = ['id'];

  public function grado() {
    return $this->hasOne('App\grado', 'ProfresorID');
  }
}
