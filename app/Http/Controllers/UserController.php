<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Usersgroup;
use App\Models\Group;


class UserController extends Controller
{
    public function getgroup()
    {
        // ON VERIFIE SI LE USER EST CONNECTÉ
        if (! empty( Auth::User()) ) 
        {
            // VERSION NON OPTI
            //$getGroup =  DB::table('usersgroup')->where('userID',Auth::id())->join('groups', 'usersgroup.groupID', '=', 'groups.id')->value('groupName');

            // VERSION OPTI A MOITIER
            //$getGroup = Usersgroup::where('user_id',Auth::id())->join('groups', 'usersgroups.group_id', '=', 'groups.id')->value('groupName');

            // VERSION OPTI
            $user = Auth::user()->with('usersgroups', 'usersgroups.groups')->first(); 
            $getGroup = $user->usersgroups->groups->groupName;
            
            // ON RETURN LA VIEW AVEC VARIABLE
            return view('template',['group' => $getGroup]);
        }else{
            // ON RETURN LA VIEW SANS VARIABLE
            return view('template');
        } 
    }   
}
