<?php

namespace Library\Eloquent;

use Illuminate\Database\Eloquent\SoftDeletes;
use Library\Eloquent\Auth\User;

class Ticket extends BaseModel
{
    use SoftDeletes;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
