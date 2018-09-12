<?php

namespace App;

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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Applications() {
        return $this->hasMany('App\Application');
    }

    public function setNameAttribute($value) {
       $this->attributes['name'] = ucwords(strtolower($value));
    }


    public function notapplieds() {
        return $this->hasMany('App\Notapplied');
    }
    
}
