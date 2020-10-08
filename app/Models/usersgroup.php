<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Group;


class Usersgroup extends Model
{
    protected $table = 'usersgroups';
    protected $primaryKey = 'id';
    public $incrementing = true;

    public function groups()
    {
     return $this->hasOne(Group::class, 'id', 'group_id');
    }
}
