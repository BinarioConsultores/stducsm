<?php

namespace stducsm;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
  protected $table = 't_departamento';
  protected $primaryKey = 'dpto_id';
  protected $hidden = [
      'created_at', 'updated_at'
  ];
  protected $fillable = [
        'dpto_desc',
  ];
  public function Provincias()
  {
      return $this->hasMany('stducsm\Provincia','dpto_id');
  }
}
