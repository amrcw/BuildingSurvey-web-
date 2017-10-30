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
        'name', 'email', 'password','role_id','is_active','photo_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    //Role table relationship
    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    //Photo table relationship
    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }

    //Mutators
    public function setPasswordAttribute($password)
    {
        if(!empty($password))
        {
            $this->attributes['password'] = bcrypt($password);
        }
    }

    //Middleware
    public function isAdmin()
    {
        if($this->role->name == 'Administrator' && $this->is_active = '1')
        {
            return true;
        }
        return false;
    }


    //Jobs
    public function jobs()
    {
        return $this->hasMany('App\Job');
    }
}
