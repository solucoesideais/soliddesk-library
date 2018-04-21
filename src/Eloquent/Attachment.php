<?php

namespace Library\Eloquent;

class Attachment extends BaseModel
{
    public function attachable()
    {
        return $this->morphTo();
    }
}
