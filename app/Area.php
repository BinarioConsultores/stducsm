<?php

namespace stducsm;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
  protected $table = 't_area';
  protected $primaryKey = 'area_id';
  protected $hidden = [
      'created_at', 'updated_at'
  ];
  protected $fillable = [
        'area_desc','area_abr','area_cor',
  ];
  public function Usuarios()
  {
      return $this->hasMany('stducsm\User','area_id');
  }
}
