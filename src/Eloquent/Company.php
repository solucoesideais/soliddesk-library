<?php

namespace Library\Eloquent;

use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends BaseModel
{
    use SoftDeletes;

    public function departments()
    {
        return $this->belongsToMany(Department::class);
    }
}
