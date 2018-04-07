<?php

namespace Library\Eloquent\Auth;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Library\Eloquent\Company;

class Specialist extends Authenticatable
{
    use Notifiable, SoftDeletes;

    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function companies()
    {
        return $this->belongsToMany(Company::class);
    }
}
