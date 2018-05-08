<?php

namespace stducsm;

use Illuminate\Database\Eloquent\Model;

class Clasificacion extends Model
{
  protected $table = 't_clasificacion';
  protected $primaryKey = 'clas_id';
  protected $hidden = [
      'created_at', 'updated_at'
  ];
  protected $fillable = [
        'clas_desc',
  ];
  public function Tramites()
  {
      return $this->hasMany('stducsm\Tramite','clas_id');
  }
}
