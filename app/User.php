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

    public function groups()
     {
     	return $this -> belongsToMany('App\Group')->withPivot('group_user');
     }

    
    public function tasks(){
        return $this->hasMany('App\Task');
    }
     public function chats(){
        return $this->hasMany('App\Chat');
    }


     
}
