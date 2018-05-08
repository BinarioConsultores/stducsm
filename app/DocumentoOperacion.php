<?php

namespace stducsm;

use Illuminate\Database\Eloquent\Model;

class DocumentoOperacion extends Model
{
  protected $table = 't_documentooperacion';
  protected $primaryKey = 'docop_id';
  protected $hidden = [
      'created_at', 'updated_at'
  ];
  protected $fillable = [
        'doc_id','ope_id',
  ];
  public function Documento()
  {
      return $this->belongsTo('stducsm\Documento','doc_id');
  }
  public function Operacion()
  {
      return $this->belongsTo('stducsm\Operacion','ope_id');
  }
}
