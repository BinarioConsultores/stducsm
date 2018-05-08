<?php

namespace stducsm;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
  protected $table = 't_tipousuario';
  protected $primaryKey = 'tusu_id';
  protected $hidden = [
      'created_at', 'updated_at'
  ];
  protected $fillable = [
        'tusu_desc', 
  ];
  public function Usuarios()
  {
      return $this->hasMany('stducsm\User','tusu_id');
  }
}
