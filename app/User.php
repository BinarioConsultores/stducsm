<?php

namespace stducsm;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'apellido','email', 'password','dni','telefono','area_id','tusu_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Area()
    {
        return $this->belongsTo('stducsm\Area','area_id');
    }
    
    public function TipoUsuario()
    {
        return $this->belongsTo('stducsm\TipoUsuario','tusu_id');
    }
}
