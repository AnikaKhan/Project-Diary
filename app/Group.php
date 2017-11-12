<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Group as Authenticatable;

class Group extends Authenticatable
{
    
    public function users()
     {
     	return $this -> belongsToMany('App\User' , 'group_user');
     }
    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
     public function chats(){
        return $this->hasMany('App\Chat');
    }

    public function files(){
        return $this->hasMany('App\File');
    }




}
