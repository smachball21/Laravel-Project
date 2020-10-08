<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Usersgroup;


class UserController extends Controller
{
    public function getgroup()
    {
        if (! empty(Auth::User()) ) 
        {
            //$getGroup =  DB::table('usersgroup')->where('userID',Auth::id())->join('groups', 'usersgroup.groupID', '=', 'groups.id')->value('groupName');
            //$getGroup = Usersgroup::where('user_id',Auth::id())->join('groups', 'usersgroups.group_id', '=', 'groups.id')->value('groupName');
            $getGroup = Usersgroup::where('user_id',Auth::id())->join('groups', 'usersgroups.group_id', '=', 'groups.id')->value('groupName');
            return view('template',['group' => $getGroup]);
        }else{
            return view('template');
        }

        
    }   
}
