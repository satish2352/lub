<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Http\Services\Admin\LoginRegister\RegisterServices;
// use App\Models\ {
//     User
// };
// use Validator;
// use session;
// use Config;

class StudentController extends Controller {
    /**
     * Topic constructor.
     */
   
    public function index()
    {
        //  alert('hii');
        return view('admin.pages.students');
    }

    public function add(){
        return view('admin.pages.students');
    }

    public function store(Request $request){
        $rules = [
            'email' => 'required|regex:/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z])+\.)+([a-zA-Z0-9]{2,4})+$/',
            'nameproject' => 'required',
            'nameparticipants' => 'required',
            'Nameofyourcollege' => 'required',
            'projectupload' => 'required|image|mimes:pdf',
            'imgupload' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'url' => ['required','regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i'],
        ];

        $messages = [    
            'email.required' => 'Please enter email.',
            'email.regex' => 'Enter valid email.',
            'nameproject.required'=>'Please enter project.',
            'nameparticipants.required'=>'Please enter participants.',
            'Nameofyourcollege.required'=>'Please enter College Name.',         
        ];

        try {
            $validation = Validator::make($request->all(), $rules, $messages);
            
            if ($validation->fails()) {
                return redirect('add-slide')
                    ->withInput()
                    ->withErrors($validation);
            } else {
                $add_slide = $this->service->addAll($request);

                if ($add_slide) {
                    $msg = $add_slide['msg'];
                    $status = $add_slide['status'];

                    if ($status == 'success') {
                        return redirect('list-slide')->with(compact('msg', 'status'));
                    } else {
                        return redirect('add-slide')->withInput()->with(compact('msg', 'status'));
                    }
                }
            }
        } catch (Exception $e) {
            return redirect('add-slide')->withInput()->with(['msg' => $e->getMessage(), 'status' => 'error']);
        }
    }

  
}