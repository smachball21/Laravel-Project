<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class usersgroup extends Model
{
    public function booking()
    {
        return $this->belongsTo(usersgroup::class);
    }
}
