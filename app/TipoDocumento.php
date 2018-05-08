<?php

namespace stducsm;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
  protected $table = 't_tipodocumento';
  protected $primaryKey = 'tdoc_id';
  protected $hidden = [
      'created_at', 'updated_at'
  ];
  protected $fillable = [
        'tdoc_desc',
  ];
  public function Documentos()
  {
      return $this->hasMany('stducsm\Documento','tdoc_id');
  }
}
