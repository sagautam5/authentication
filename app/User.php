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
        'name', 'email', 'password','role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        $this->belongsTo('App\Role');
    }

    public function isAdmin()
    {
        if($this->role()->name=='admin')
            return true;
        else
            return false;
    }

    public function isGuest()
    {
        if($this->role()->name =='guest')
            return true;
        else
            return false;
    }
}
