<?php

namespace App;


use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;


use Hash;


class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
	
	protected $table = 'users';
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','provider','provider_id',
    ];


	public static $rules = array(
		'name'=>'required',
		'username'=>'required|alpha_num|min:2|unique:users',
		'email'=>'required|email|unique:users',
		'password'=>'required|between:6,12',
		'userrole'=>'required',
	);

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function usermeta()
    {
        return $this->hasOne('App\UserMeta');
    }

    public function setPasswordAttribute($pass){

        $this->attributes['password'] = Hash::make($pass);

    }
}
