<?php

namespace stducsm;

use Illuminate\Database\Eloquent\Model;

class Requisito extends Model
{
  protected $table = 't_requisito';
  protected $primaryKey = 'req_id';
  protected $hidden = [
      'created_at', 'updated_at'
  ];
  protected $fillable = [
        'req_desc','req_obs',
  ];
  public function RequisitoSolicitudes()
  {
      return $this->hasMany('stducsm\RequisitoSolicitud','req_id');
  }
}
