<?php

namespace Library\Eloquent;

class Department extends BaseModel
{
    public function companies()
    {
        return $this->belongsToMany(Company::class);
    }
}
