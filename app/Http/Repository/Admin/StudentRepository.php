<?php
namespace App\Http\Repository\Admin;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
// use Session;
use App\Models\ {
	UserDetails
};
use Config;

class StudentRepository  {
	public function getAll(){
        try {
            return UserDetails::all();
        } catch (\Exception $e) {
            return $e;
        }
    }


    public function addAll($request){
        try {
           
            $user_details = new UserDetails();
            // $user_details->email = $request->input('email');
            $user_details->project_name = $request->input('project_name');
            $user_details->participants_name = $request->input('participants_name');
            $user_details->education = $request->input('education');
            $user_details->branch = $request->input('branch');
            $user_details->college_name = $request->input('college_name');
            $user_details->company_name = $request->input('company_name');
            $user_details->transaction_id = $request->input('transaction_id');
            $user_details->designation = $request->input('designation');
            $user_details->registration_fees = $request->input('registration_fees');

            $user_details->save(); 
            $last_insert_id = $user_details->id;
    
            //  $userimage = $last_insert_id . '_image.' . $request->passport_size->extension();
            //  $userpdf = $last_insert_id . '_pdf.' . $request->soft_copy->extension();
            
            // $user = UserDetails::find($last_insert_id); // Assuming $request directly contains the ID
            // $user->passport_size = $userimage; // Save the image filename to the database
            // $user->soft_copy = $userpdf; // Save the image filename to the database
            // $user->save();    
            return $last_insert_id;
    
        } catch (\Exception $e) {
            return [
                'msg' => $e->getMessage(),
                'status' => 'error'
            ];
        }
    }

    
}