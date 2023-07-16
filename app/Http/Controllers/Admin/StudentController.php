<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Admin\StudentServices;
use Validator;
use Illuminate\Validation\Rule;
use Config;
class StudentController extends Controller
{

    public function __construct(){
    $this->service = new StudentServices();
    }

    public function index(){
        try {
            $user_details = $this->service->getAll();
      
            return view('admin.pages.list-user-details', compact('user_details'));
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function add(){
        return view('admin.pages.students');
    }

    public function store(Request $request){
        $rules = [
            'project_name' => 'required|regex:/^[a-zA-Z\s]+$/u',
            'participants_name' => 'required|regex:/^[a-zA-Z\s]+$/u',
            'education' => 'required',
            'branch' => 'required',
            'college_name' => 'required',
            'company_name' => 'required|regex:/^[a-zA-Z\s]+$/u',
            'transaction_id' => 'required',
            'registration_fees' => 'required',
            'designation' => 'required|regex:/^[a-zA-Z\s]+$/u',
            // 'passport_size' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            // 'soft_copy' => 'required|pdf|mimes:pdf',
        ];

        $messages = [    
            'project_name.required' => 'Please enter the project name.',
            'project_name.regex' => 'Please enter text only for the project name.',
            'participants_name.required' => 'Please enter the participants name.',
            'participants_name.regex' => 'Please enter text only for the participants name.',
            'education.required' => 'Please select an education option.',
            'branch.required' => 'Please select a branch.',
            'college_name.required' => 'Please select a college name.',
            'company_name.required' => 'Please enter the company name.',
            'company_name.regex' => 'Please enter text only for the company name.',
            'transaction_id.required' => 'Please enter the transaction ID.',
            'registration_fees.required' => 'Please select the registration fees.',
            'designation.required' => 'Please enter the designation.',
            'designation.regex' => 'Please enter text only for the designation.',
            // 'passport_size.required' => 'The image is required.',
            // 'passport_size.image' => 'The image must be a valid image file.',
            // 'passport_size.mimes' => 'The image must be in JPEG, PNG, JPG, GIF, or SVG format.',
            // 'soft_copy.required' => 'The PDF file is required.',
            // 'soft_copy.mimes' => 'The PDF must be in PDF format.',
        ];

        try {
            $validation = Validator::make($request->all(), $rules, $messages);
            
            if ($validation->fails()) {
                return redirect('add-user-details')
                    ->withInput()
                    ->withErrors($validation);
            } else {
                $add_user = $this->service->addAll($request);
                // dd($add_user);
                if ($add_user) {
                    $msg = $add_user['msg'];
                    $status = $add_user['status'];

                    if ($status == 'success') {
                        return redirect('list-user-details')->with(compact('msg', 'status'));
                    } else {
                        return redirect('add-user-details')->withInput()->with(compact('msg', 'status'));
                    }
                }
            }
        } catch (Exception $e) {
            return redirect('add-user-details')->withInput()->with(['msg' => $e->getMessage(), 'status' => 'error']);
        }
    }
}