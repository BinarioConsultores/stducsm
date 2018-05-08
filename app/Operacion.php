<?php

namespace stducsm;

use Illuminate\Database\Eloquent\Model;

class Operacion extends Model
{
  protected $table = 't_operacion';
  protected $primaryKey = 'ope_id';
  protected $hidden = [
      'created_at', 'updated_at'
  ];
  protected $fillable = [
        'ope_obs','ope_fecha','ope_est','usuori_id','usudest_id','tram_id','tope_id',
  ];
  public function UsuarioOrigen()
  {
      return $this->belongsTo('stducsm\User','usuori_id');
  }
  public function UsuarioDestino()
  {
      return $this->belongsTo('stducsm\User','usudest_id');
  }
  public function Tramite()
  {
      return $this->belongsTo('stducsm\Tramite','tram_id');
  }
  public function TipoOperacion()
  {
      return $this->belongsTo('stducsm\TipoOperacion','tope_id');
  }
  public function DocumentoOperaciones()
  {
      return $this->hasMany('stducsm\DocumentoOperacion','ope_id');
  }
  public function HistorialOperaciones()
  {
      return $this->hasMany('stducsm\HistorialOperacion','ope_id');
  }

}
