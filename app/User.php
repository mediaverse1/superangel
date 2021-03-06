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
        'username', 'email', 'password', 'last_ip', 'reg_ip', 'customer_id', 'firstname', 'lastname'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Orders(){
        return $this->hasMany('App\Order');
    }

    public function chart()
    {
        return $this->hasMany('App\ChartItem');
    }

    public function details()
    {
        return $this->hasOne('App\UserDetail');
    }
}
