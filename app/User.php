<?php

namespace App;
use App\Role;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'photo_id', 'is_active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //relationship between user and role
    public function role(){
        return $this->belongsTo('App\Role');
    }
//    RELATION FOR PHOTO
public function photo(){
        return$this->belongsTo('App\Photo');
}

    public function  setPasswordAttribute($password){
        if (!empty($password)){
            $this->attributes['password'] = bcrypt($password);
        }
    }

    //method to check security if user is admin and allow to enter in system
    public function isAdmin(){
        if($this->role->name == 'admin'){
            return true;
        }else{
            return false;
        }
    }
}
