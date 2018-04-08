<?php

namespace Library\Eloquent\Auth;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Library\Eloquent\Company;
use Library\Eloquent\Department;

/**
 * @property int department_id
 * @property int company_id
 * @property Company company
 */
class User extends Authenticatable
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

    public function department()
    {
        return $this->belongsTo(Department::class)
            ->withDefault(['name' => '']);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
