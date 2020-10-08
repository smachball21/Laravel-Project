<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getgroup()
    {
        //$getGroup =  DB::table('usersgroup')->where('userID',Auth::id())->join('groups', 'usersgroup.groupID', '=', 'groups.id')->value('groupName');
        $getGroup = usergroups::id();
        return view('test',['group' => $getGroup]);
    }   
}
