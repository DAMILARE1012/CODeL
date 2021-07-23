<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'role_id','fname','mname','lname','dob','country','state','program','phone','count', 'email', 'password', 'admission_session', 
    ];
 
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsTo('App\Role');
    }

    public function hasRole()
    {
        return $this->role->name;
    }

    public function olevel()
    {
        return $this->hasOne('App\Olevel');
    }

    public function credential()
    {
        return $this->hasOne('App\Credential');
    }

    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function appOrders()
    {
        return $this->hasMany('App\appOrder');
    }

}
