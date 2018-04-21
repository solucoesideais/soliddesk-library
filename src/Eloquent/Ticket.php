<?php

namespace Library\Eloquent;

use Library\Eloquent\Auth\User;

class Ticket extends BaseModel
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function attachments()
    {
        return $this->morphMany(Attachment::class, 'attachable');
    }
}
