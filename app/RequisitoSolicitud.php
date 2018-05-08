<?php

namespace stducsm;

use Illuminate\Database\Eloquent\Model;

class RequisitoSolicitud extends Model
{
  protected $table = 't_requisitosolicitud';
  protected $primaryKey = 'reqsol_id';
  protected $hidden = [
      'created_at', 'updated_at'
  ];
  protected $fillable = [
        'req_id','sol_id',
  ];
  public function Requisito()
  {
      return $this->belongsTo('stducsm\Requisito','req_id');
  }
  public function Solicitud()
  {
      return $this->belongsTo('stducsm\Solicitud','sol_id');
  }
}
