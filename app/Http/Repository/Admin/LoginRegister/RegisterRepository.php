<?php
namespace App\Http\Repository\Admin\LoginRegister;

use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
use Session;
use App\Models\{
	User,
	Permissions,
	RolesPermissions,
	Roles
};
use Illuminate\Support\Facades\Mail;

class RegisterRepository
{

	
	public function register($request)
	{
		$ipAddress = getIPAddress($request);
		$user_data = new User();
		$user_data->u_email = $request['u_email'];
		$user_data->u_password = bcrypt($request['u_password']);
		$user_data->number = $request['number'];
		$user_data->ip_address = $ipAddress;
		$user_data->is_active = isset($request['is_active']) ? true : false;
		$user_data->save();
		$last_insert_id = $user_data->id;
        return $last_insert_id;

	}
	
}