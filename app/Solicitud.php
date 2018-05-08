<?php

namespace stducsm;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
  protected $table = 't_solicitud';
  protected $primaryKey = 'sol_id';
  protected $hidden = [
      'created_at', 'updated_at'
  ];
  protected $fillable = [
        'sol_tit','sol_desc','sol_tupa',
  ];
  public function RequisitoSolicitudes()
  {
      return $this->hasMany('stducsm\RequisitoSolicitud','sol_id');
  }
  public function Tramites()
  {
      return $this->hasMany('stducsm\Tramite','sol_id');
  }
}
