<?php

namespace stducsm;

use Illuminate\Database\Eloquent\Model;

class Remitente extends Model
{
  protected $table = 't_remitente';
  protected $primaryKey = 'remi_id';
  protected $hidden = [
      'created_at', 'updated_at'
  ];
  protected $fillable = [
        'remi_nom','remi_apep','remi_apem','remi_ruc','remi_dni','remi_tipo','remi_cel','remi_dir','dist_id',
  ];
  public function Distrito()
  {
      return $this->belongsTo('stducsm\Distrito','dist_id');
  }
  public function Tramites()
  {
      return $this->hasMany('stducsm\Tramite','remi_id');
  }
}
