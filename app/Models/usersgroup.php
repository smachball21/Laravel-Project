<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Usersgroup extends Model
{
    protected $table = 'usersgroups';
    protected $primaryKey = 'id';
    public $incrementing = true;

    public function groups()
    {
     return $this->hasOne(Group::class);
    }
}
