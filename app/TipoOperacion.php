<?php

namespace stducsm;

use Illuminate\Database\Eloquent\Model;

class TipoOperacion extends Model
{
  protected $table = 't_tipooperacion';
  protected $primaryKey = 'tope_id';
  protected $hidden = [
      'created_at', 'updated_at'
  ];
  protected $fillable = [
        'tope_desc',
  ];
  public function Operaciones()
  {
      return $this->hasMany('stducsm\Operacion','tope_id');
  }
}
