<?php

namespace stducsm;

use Illuminate\Database\Eloquent\Model;

class HistorialOperacion extends Model
{
  protected $table = 't_historialoperacion';
  protected $primaryKey = 'hop_id';
  protected $hidden = [
      'created_at', 'updated_at'
  ];
  protected $fillable = [
        'hop_est','hop_fecha','ope_id',
  ];
  public function Operacion()
  {
      return $this->belongsTo('stducsm\Operacion','ope_id');
  }
}
