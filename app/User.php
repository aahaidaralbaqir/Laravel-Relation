<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * Select table
     */
    protected $table = "users";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function passport() {
        return $this->hasOne('App\Passport');
    }

    public function forums() {
        return $this->hasMany('App\Forum');
    }

    public function lessons() {
        return $this->belongsToMany('App\Lesson');
    }
}
