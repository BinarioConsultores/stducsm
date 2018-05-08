<?php

namespace stducsm;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
  protected $table = 't_provincia';
  protected $primaryKey = 'prov_id';
  protected $hidden = [
      'created_at', 'updated_at'
  ];
  protected $fillable = [
        'prov_desc','dpto_id',
  ];
  public function Distritos()
  {
      return $this->hasMany('stducsm\Distrito','prov_id');
  }
  public function Departamento()
  {
      return $this->belongsTo('stducsm\Departamento','dpto_id');
  }
}