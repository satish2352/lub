<?php

namespace App\Http\Repository\Admin\LoginRegister;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ {
    User,
    RolesPermissions,
    Permissions
};
use App\dbmodel\Applicant;
use App\SuperAdmin;


class LoginRepository
{
	function __construct() {
		
    }

    //For Applicant 
    public function checkLogin($request) {
        // get school description
        $data = [];
        $data['user_details'] = User::where( [
                                        'u_email' => $request['email'],
                                        'is_active' =>true
                                        ])
                                        ->select('*')
                                        ->first();
        if($data['user_details']) {
            if($data['user_details']->role_id != '1') {
                $roles_permissions = RolesPermissions::join('permissions', function($join) {
                                            $join->on('roles_permissions.permission_id', '=', 'permissions.id')
                                            ->where('permissions.is_active','=',true);
                                        })
                                        ->where('roles_permissions.is_active','=',true);
                                        
                                        $roles_permissions = $roles_permissions->where('role_id','=',$data['user_details']->role_id);
                                        
                                        $roles_permissions = $roles_permissions->select(
                                                "roles_permissions.per_add",
                                                "roles_permissions.per_edit",
                                                "roles_permissions.per_update",
                                                "roles_permissions.per_delete",
                                                "permissions.route_name",
                                                "permissions.permission_name",
                                                "permissions.url")
                                        ->get()
                                        ->toArray();
            } else {
                $roles_permissions = Permissions::where('is_active','=',true)->get()->toArray();
            }

            $data['user_permission'] = $roles_permissions ;
        }
        return $data;
    }
}