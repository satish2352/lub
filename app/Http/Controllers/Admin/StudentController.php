<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{
    Users,
    ParticipantDetails,
    ProjectDetails,
    CommincationMesseges,
    InstituteLists
};
use Validator;
use File;

class StudentController extends Controller
{
    public function __construct()
    {
    }

    // public function index() {
    //     $user_data = Users::where('is_active','=',true)->get();
    //     $project_data = ProjectDetails::where('is_active','=',true)->get();
    //     return view('admin.pages.users-list',compact('user_data', 'project_data'));
    // }
    public function index()
    {
        $project_data = Users::where('is_active', true)
                    ->where('is_payment_done', false)
                    ->get();
    
        return view('admin.pages.users-list', compact('project_data'));
    }
    public function getPaymentStudent()
    {
        $project_data = ProjectDetails::join('users', 'project_details.user_id', '=', 'users.id')
            ->select('project_details.*', 'users.u_email as user_email','users.mobile_no as user_mobile_no','users.is_project_uploaded as user_is_project_uploaded','users.is_payment_done as user_is_payment_done','users.registration_type as user_registration_type') // Add other fields from project_details if needed
            ->where('project_details.is_active', true)
            ->where('users.is_payment_done', true)
            ->get();
    
        return view('admin.pages.payment-done-student-list', compact('project_data'));
    }

    
    // public function indexIndustry()
    // {
    //       // $user_data = Users::where('is_active', true)->get();
    //     $project_data = Users::where('is_active', true)
    //                 ->where('is_payment_done', false)
    //                 ->get();

    //     return view('admin.pages.industry-list', compact('project_data'));
    // }

    // public function getPaymentIndustry()
    // {
    // // dd($project_data);
    //     // Joining users table with project_details table
    //     $project_data = ProjectDetails::join('users', 'project_details.user_id', '=', 'users.id')
    //         ->select('project_details.*', 'users.u_email as user_email','users.mobile_no as user_mobile_no','users.is_project_uploaded as user_is_project_uploaded','users.is_payment_done as user_is_payment_done','users.registration_type as user_registration_type') // Add other fields from project_details if needed
    //         ->where('project_details.is_active', true)
    //         ->where('users.is_payment_done', true)
    //         ->get();
    //         // dd($project_data);
    // // dd($project_data);
    //     return view('admin.pages.payment-done-industry-list', compact('project_data'));
    // }
    public function viewDetailsForParticipant(Request $request) {
        $user_id = $request['show_id'];
        $user_data = Users::where('id', $user_id)->select('*')->first();
        $participant_data = ParticipantDetails::where('user_id', $user_id)->select('*')->get()->toArray();
        $project_data = ProjectDetails::where('user_id', $user_id)->select('*')->first();
        $commincation_messege = CommincationMesseges::where('user_id', $user_id)->select('*')->get()->toArray();
        return view('admin.pages.student-edit', compact('user_data', 'participant_data', 'project_data', 'commincation_messege', 'user_id'));
    }

    public function update(Request $request)
    {
        try {
            $payment_status = Users::findOrFail($request->input('id'));
            $payment_status->is_payment_done = $request->has('is_payment_done');
            $payment_status->save();

            // $registration_type = $payment_status->registration_type;
            $is_payment_done = $payment_status->is_payment_done;



            if ($is_payment_done== 1) {
                return redirect()->route('payment-done-student-list')->withSuccess('Payment status updated successfully.');
            } elseif ($is_payment_done == 0) {
                return redirect()->route('industry-list')->withSuccess('Payment status updated successfully.');
            }

            // if ($registration_type == 0) {
            //     return redirect()->route('register-users')->withSuccess('Payment status updated successfully.');
            // } elseif ($registration_type == 1) {
            //     return redirect()->route('payment-done-industry-list')->withSuccess('Payment status updated successfully.');
            // }

            // return redirect('admin/register-users')->withSuccess('Payment status updated successfully.');
          
        } catch (\Exception $e) {
            return redirect('admin/students-view')->with('success', 'An error occurred while updating the record.');
        }
    }

    public function saveMessege(Request $request) {
        $user_id = $request['user_id'];
        if(session()->get('user_id') != '1') {
            $messege_from = 'user';
        } else {
            $messege_from = 'admin';
        }
        
        $data['user_id']= $user_id;
        $data['messege'] = $request['messege'];
        $data['messege_from'] = $messege_from;
        $commincation_messege = CommincationMesseges::insert($data);


        $msg = 'Messege saved sucessfully';
        $status = 'success';
        if(session()->get('user_id') != 1) {
            return view('admin.pages.dashboard',compact('msg', 'status'));
        } else {
            $user_data = Users::where('id','!=',1)->get();
            return view('admin.pages.admin.users-list',compact('user_data','msg', 'status'));
        }
    }
}