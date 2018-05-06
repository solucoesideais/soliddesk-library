<?php

namespace Library\Eloquent;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Library\Storage\Disk;

/**
 * @property string logoUrl
 */
class Company extends BaseModel
{
    use SoftDeletes;

    public function departments()
    {
        return $this->belongsToMany(Department::class);
    }

    public function getLogoUrlAttribute()
    {
        return Storage::disk(Disk::COMPANIES)->url($this->logo);
    }
}
