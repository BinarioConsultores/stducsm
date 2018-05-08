<?php

namespace stducsm;

use Illuminate\Database\Eloquent\Model;

class TramiteDocumento extends Model
{
  protected $table = 't_tramitedocumento';
  protected $primaryKey = 'tradoc_id';
  protected $hidden = [
      'created_at', 'updated_at'
  ];
  protected $fillable = [
        'doc_id','tram_id',
  ];
  public function Documento()
  {
      return $this->belongsTo('stducsm\Documento','doc_id');
  }
  public function Tramite()
  {
      return $this->belongsTo('stducsm\Tramite','tram_id');
  }
}
