<?php

namespace stducsm;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
  protected $table = 't_distrito';
  protected $primaryKey = 'dist_id';
  protected $hidden = [
      'created_at', 'updated_at'
  ];
  protected $fillable = [
        'dist_desc','prov_id',
  ];
  public function Provincia()
  {
      return $this->belongsTo('stducsm\Provincia','prov_id');
  }
  public function Remitentes()
  {
      return $this->hasMany('stducsm\Remitente','dist_id');
  }
}
