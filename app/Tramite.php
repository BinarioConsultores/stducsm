<?php

namespace stducsm;

use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
  protected $table = 't_tramite';
  protected $primaryKey = 'tram_id';
  protected $hidden = [
      'created_at', 'updated_at'
  ];
  protected $fillable = [
        'tram_fech','tram_asun','tram_obs','tram_est','tram_tipo','sol_id','usu_id','rem_id','clas_id',
  ];
  public function Solicitud()
  {
      return $this->belongsTo('stducsm\Solicitud','sol_id');
  }
  public function Usuario()
  {
      return $this->belongsTo('stducsm\User','usu_id');
  }
  public function Remitente()
  {
      return $this->belongsTo('stducsm\Remitente','rem_id');
  }
  public function Clasificacion()
  {
      return $this->belongsTo('stducsm\Clasificacion','clas_id');
  }
  public function Operaciones()
  {
      return $this->hasMany('stducsm\Operacion','tram_id');
  }
  public function TramiteDocumentos()
  {
      return $this->hasMany('stducsm\TramiteDocumento','tram_id');
  }
}
