<?php

namespace stducsm;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
  protected $table = 't_documento';
  protected $primaryKey = 'doc_id';
  protected $hidden = [
      'created_at', 'updated_at'
  ];
  protected $fillable = [
        'doc_nrofol','doc_nro','doc_url','doc_obs','doc_clas','doc_fech','tdoc_id','usu_id',
  ];
  public function Usuario()
  {
      return $this->belongsTo('stducsm\User','usu_id');
  }
  public function TipoDocumento()
  {
      return $this->belongsTo('stducsm\TipoDocumento','tdoc_id');
  }
  public function DocumentoOperaciones()
  {
      return $this->hasMany('stducsm\DocumentoOperacion','doc_id');
  }
}
