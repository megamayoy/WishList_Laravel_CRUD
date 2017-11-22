<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
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
    
    public function get_post()
    {
        return $this->hasOne('App\Mega');
    }
    
    public function get_posts()
    {
        return $this->hasMany('App\Mega');
    }
    
    public function get_roles()
    {
        return $this->belongsToMany('App\Role');
        
    }
    
}
