<?php

namespace App\Http\Controllers\User;

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

    public function add(Request $request)
    {
        $user_id = $request->session()->get('user_id');
        $user_data = Users::where('id', $user_id)->select('*')->first();
        if ($user_data['is_project_uploaded'] == 1) {
            if ($user_data['is_payment_done'] == 1) {
                $user_data = Users::where('id', $user_id)->select('*')->first();
                $participant_data = ParticipantDetails::where('user_id', $user_id)->select('*')->get()->toArray();
                $project_data = ProjectDetails::where('user_id', $user_id)->select('*')->first();
                $commincation_messege = CommincationMesseges::where(['user_id' => $user_id])->select('*')->get()->toArray();
                return view('user.pages.students-view', compact('user_data', 'participant_data', 'project_data', 'commincation_messege', 'user_id'));

            } else {
                $user_data = Users::where('id', $user_id)->select('*')->first();
                $participant_data = ParticipantDetails::where('user_id', $user_id)->select('*')->get()->toArray();
                $project_data = ProjectDetails::where('user_id', $user_id)->select('*')->first();
                $commincation_messege = CommincationMesseges::where(['user_id' => $user_id])->select('*')->get()->toArray();

                return view('user.pages.student-edit', compact('user_data', 'participant_data', 'project_data', 'commincation_messege', 'user_id'));
            }
        } else {
            return view('user.pages.students-reg', compact('user_data'));
        }
    }



  


    public function store(Request $request)
    {
        // dd($request->registration_type);
        $commonRules = [
            'u_email' => 'required|email',
            'mobile_no' => 'required',
            'project_title' => 'required|max:255',
            'payment_type' => 'required',
            'transaction_details' => 'required|max:255',
            'payment_proof' => 'required|image|mimes:jpeg,png,jpg|max:1024|min:1',
            
        ];
        
        $messages = [
            'mobile_no.required' => 'Please enter mobile no.',
            'u_email.required' => 'Please enter email.',
            'u_email.email' => 'Enter valid email.',
            'project_title.required' => 'Please enter project name.',
            'project_title.max' => 'Please enter project name within 255 characters.',
            'payment_type.required' => 'Please select payment type.',
            'transaction_details.required' => 'Please enter confirmation code/id.',
            'payment_proof.required' => 'Please upload payment proof.',
            'payment_proof.image' => 'The proof must be a valid image file.',
            'payment_proof.mimes' => 'The proof must be in JPEG, PNG, or JPG format.',
            'payment_proof.max' => 'The proof size must not exceed 1 MB.',
            'payment_proof.min' => 'The proof size must not be less than 1 KB.',
            
        ];
        
$rules = $commonRules; // Initialize rules with common rules
       
        if ($request->registration_type == 0) {
            $rules = array_merge($commonRules, [
                'education_type' => 'required',
                'academic_year' => 'required',
                'name_of_institute' => 'required',
                'branch_details' => 'required',
                'project_presentation' => 'required|mimes:pdf|max:5120|min:1',
            ]);
            
            $messages['education_type.required'] = 'Please select qualification.';
            $messages['academic_year.required'] = 'Please select year.';
            $messages['name_of_institute.required'] = 'Please select institute name.';
            $messages['branch_details.required'] = 'Please select branch.';
            $messages['project_presentation.required'] = 'Please upload project presentation file.';
            $messages['project_presentation.mimes'] = 'The presentation must be in PDF format.';
            $messages['project_presentation.max'] = 'The presentation size must not exceed 5 MB.';
            $messages['project_presentation.min'] = 'The presentation size must not be less than 1 KB.';
        } elseif ($request->registration_type == 1) {
            $rules = array_merge($commonRules, [
                'industry_type' => 'required',
                'industry_name' => 'required',
                'product_type' => 'required',
                'project_presentation' => 'required|mimes:pdf,excel,ppt,word|max:25600|min:1',
            ]);
            
            $messages['industry_type.required'] = 'Please select industry type.';
            $messages['industry_name.required'] = 'Please select industry name.';
            $messages['product_type.required'] = 'Please select product type.';
            $messages['project_presentation.required'] = 'Please upload project presentation file.';
            $messages['project_presentation.mimes'] = 'The presentation must be in PDF, Excel, PowerPoint, or Word format.';            $messages['project_presentation.max'] = 'The presentation size must not exceed 25 MB.';
            $messages['project_presentation.min'] = 'The presentation size must not be less than 1 KB.';
        }
        

        if ($request->education_type == '4') {
            $rules['institute_other_name'] = "required";
            $messages['institute_other_name.required'] = "Enter name";
        }

        if ($request->name_of_institute == '21' || $request->name_of_institute == '47' || $request->name_of_institute == '69') {
            $rules['name_of_institute_other'] = "required";
            $messages['name_of_institute_other.required'] = "Enter name";
        }


        if ($request->branch_details == '18') {
            $rules['other_branch_details'] = "required";
            $messages['other_branch_details.required'] = "Enter branch name";
        }
        for ($i = 1; $i <= 5; $i++) {
            $fname = "f_name_" . $i;
            $mname = "m_name_" . $i;
            $lname = "l_name_" . $i;
            $photo = "passport_photo_" . $i;
            if (
                isset($request->$fname) ||
                isset($request->$mname) ||
                isset($request->$lname) ||
                $request->has($photo)
            ) {
                $rules[$fname] = "required";
                $rules[$mname] = "required";
                $rules[$lname] = "required";
                $rules[$photo] = "required|image|mimes:jpeg,png,jpg,JPEG,PNG,JPG|max:2048|min:1"; 

                $messages[$fname . ".required"] = "Please enter first name ";
                $messages[$mname . ".required"] = "Please enter middle name ";
                $messages[$lname . ".required"] = "Please enter last name ";
                $messages[$photo . ".required"] = "Please upload passport photo ";
                $messages[$photo . ".mimes"] = "Please upload passport photo in jpeg,png,jpg format";
                $messages[$photo . ".max"] = "Please upload passport photo size must not exceed 2 MB";
                $messages[$photo . ".min"] = "Please upload passport photo size must not be less than 1 KB";
                // $messages[$photo . ".dimensions"] = "Please upload passport photo dimensions must be 800x800";

            }
        }

        $rules["f_name_1"] = "required";
        $rules["m_name_1"] = "required";
        $rules["l_name_1"] = "required";
        $rules["passport_photo_1"] = "required|image|mimes:jpeg,png,jpg,JPEG,PNG,JPG|max:2048|min:1|"; 

        $messages["f_name_1.required"] = "Please enter first name ";
        $messages["m_name_1.required"] = "Please enter middle name ";
        $messages["l_name_1.required"] = "Please enter last name ";
        $messages["passport_photo_1.required"] = "Please upload passport photo ";
        $messages["passport_photo_1.mimes"] = "Please upload passport photo in jpeg,png,jpg format";
        $messages["passport_photo_1.max"] = "Please upload passport photo size must not exceed 2 MB";
        $messages["passport_photo_1.min"] = "Please upload passport photo size must not be less than 1 KB";
        // $messages["passport_photo_1.dimensions"]= "Please upload passport photo dimensions must be 800x800";


        try {
            $validation = Validator::make($request->all(), $rules, $messages);
// dd($request);
            if ($validation->fails()) {
                return redirect('user/project-registration')
                    ->withInput()
                    ->withErrors($validation);
            } else {
                $projectCode = $this->generateProjectCode($request->education_type);
                $industryCode = $this->generateIndustryCode($request->industry_type);
   
                $attributes = [
                   'user_id' => $request->session()->get('user_id'),
                   'project_title' => $request->project_title,
                   'payment_type' => $request->payment_type,
                   'transaction_details' => $request->transaction_details,
                   'is_active' => true,
                   'is_deleted' => false,
                   'created_at' => now(),
                   'updated_at' => now(),
               ];
               
               if ($request->registration_type == '1') {
                   // $attributes['academic_year'] = $request->academic_year;
                   $attributes['industry_type'] = $request->industry_type ?? 'NA';
                   $attributes['industry_name'] = $request->industry_name ?? 'NA';
                   $attributes['product_type'] = $request->product_type ?? 'NA';
                   $attributes['industry_code'] = $industryCode ?? 'NA';
               } else {
                //    $attributes['industry_type'] = $request->industry_type ?? 'NA';
                //    $attributes['industry_name'] = $request->industry_name ?? 'NA';
                //    $attributes['product_type'] = $request->product_type ?? 'NA';
                //    $attributes['industry_code'] = $industryCode ?? 'NA';
   
                   $attributes['academic_year'] = $request->academic_year ?? 'NA';
                   $attributes['education_type'] = $request->education_type ?? 'NA';
                   $attributes['institute_other_name'] = $request->institute_other_name ?? 'NA';
                   $attributes['name_of_institute'] = $request->name_of_institute ?? 'NA';
                   $attributes['name_of_institute_other'] = $request->name_of_institute_other ?? 'NA';
                   $attributes['branch_details'] = $request->branch_details ?? 'NA';
                   $attributes['other_branch_details'] = $request->other_branch_details ?? 'NA';
                   $attributes['project_code'] = $projectCode;
               }
               
               ProjectDetails::insert($attributes);
                // dd($projectCode);
                // ProjectDetails::insert(
                //     [
                //         'user_id' => $request->session()->get('user_id'),
                //         'academic_year' => $request->academic_year,
                //         'project_title' => $request->project_title,
                //         'education_type' => $request->education_type,
                //         'institute_other_name' => isset($request->institute_other_name) ? $request->institute_other_name : 'null',
                //         'name_of_institute' => $request->name_of_institute,
                //         'name_of_institute_other' => isset($request->name_of_institute_other) ? $request->name_of_institute_other : 'null',
                //         'branch_details' => $request->branch_details,
                //         'other_branch_details' => isset($request->other_branch_details) ? $request->other_branch_details : 'null',

                //         'payment_type' => $request->payment_type,
                //         'transaction_details' => $request->transaction_details,
                //         'project_code' => $projectCode,


                //     ]
                // );

              
                for ($i = 1; $i <= 5; $i++) {
                    $fname = "f_name_" . $i;
                    $mname = "m_name_" . $i;
                    $lname = "l_name_" . $i;
                    $sr_no = "sr_no_" . $i;
                    $photo = "passport_photo_" . $i;
                    if (
                        isset($request->$fname) ||
                        isset($request->$mname) ||
                        isset($request->$lname) ||
                        isset($request->$photo)
                    ) {

                        $all_user_details_added = new ParticipantDetails();
                        $all_user_details_added->f_name = $request->$fname;
                        $all_user_details_added->m_name = $request->$mname;
                        $all_user_details_added->l_name = $request->$lname;
                        $all_user_details_added->sr_no = $request->$sr_no;
                        $all_user_details_added->user_id = $request->session()->get('user_id');
                        $all_user_details_added->sr_no = $request->$sr_no;
                        $all_user_details_added->save();
                        $last_id = $all_user_details_added->id;

                        $path = "/all_web_data/images/userPassportPhoto/";
                        $name = $request->session()->get('user_id') . "_" . $last_id . "." . $request->$photo->extension();

                        if (!file_exists(storage_path() . $path)) {
                            File::makeDirectory(storage_path() . '/' . $path, 0777, true);
                        }

                        $this->uploadDocs($request, $photo, $path, $name);

                        $update_data = ParticipantDetails::find($last_id);
                        $update_data->passport_photo = $name;
                        $update_data->save();

                    }
                }



                $path = "/all_web_data/images/payment_proof/";
                $user_payment_details_file_name = $request->session()->get('user_id') . "_payment_proof." . $request->payment_proof->extension();

                if (!file_exists(storage_path() . $path)) {
                    File::makeDirectory(storage_path() . '/' . $path, 0777, true);
                }
                if ($request->payment_proof !== null) {
                    $base64_encoded = base64_encode(file_get_contents($request->payment_proof));
                    $base64_decoded_content = base64_decode($base64_encoded);
                    $path2 = storage_path() . $path . $user_payment_details_file_name;
                    file_put_contents($path2, $base64_decoded_content);
                }

                // Project Docs

                $path_project_presentation = "/all_web_data/project_docs/";
                $project_presentation_file_name = $request->session()->get('user_id') . "_project_doc." . $request->project_presentation->extension();

                if (!file_exists(storage_path() . $path)) {
                    File::makeDirectory(storage_path() . '/' . $path, 0777, true);
                }
                if ($request->project_presentation !== null) {
                    $base64_encoded = base64_encode(file_get_contents($request->project_presentation));

                    $base64_decoded_content = base64_decode($base64_encoded);
                    $path2 = storage_path() . $path_project_presentation . $project_presentation_file_name;
                    file_put_contents($path2, $base64_decoded_content);
                }
               
                $all_user_details_added = Users::where('id', $request->session()->get('user_id'))->update(
                    [
                        'is_project_uploaded' => 1,
                        'payment_proof' => $user_payment_details_file_name,
                        'project_presentation' => $project_presentation_file_name,

                    ]
                );

                if ($all_user_details_added) {
                    $msg = 'Data saved sucessfully';
                    $status = 'success';

                    if ($status == 'success') {
                        return redirect('user/project-registration')->withInput()->with(compact('msg', 'status'));
                    } else {
                        return redirect('user/project-registration')->withInput()->with(compact('msg', 'status'));
                    }
                }
            }
        } catch (Exception $e) {
            return redirect('user/project-registration')->withInput()->with(['msg' => $e->getMessage(), 'status' => 'error']);
        }
    }

    public function registered_update(Request $request)
    {
        // dd($request->hasFile('payment_proof'));
        $rules = [
           
            'payment_type' => 'required',
            'transaction_details' => 'required|max:255',
            
        ];

        $messages = [
         
            'payment_type.required' => 'Please select payment type.',
            'transaction_details.required' => 'Please enter confirmation code/id.',
        ];

        if ($request->hasFile('payment_proof')) {
            $rules['payment_proof'] = 'required|image|mimes:jpeg,png,jpg,JPEG,PNG,JPG|max:1024|min:1';

            $rulemessagess['payment_proof.required'] = 'Please upload payment proof.';
            $rulemessagess['payment_proof.image'] = 'The image must be a valid image file.';
            $rulemessagess['payment_proof.mimes'] = 'The image must be in JPEG, PNG, JPG format.';
            $rulemessagess['payment_proof.max'] = 'The image size must not exceed 1 MB .';
            $rulemessagess['payment_proof.min'] = 'The image size must not be less than 1 KB .';
        }

        try {
            $validation = Validator::make($request->all(), $rules, $messages);

            if ($validation->fails()) {
                return redirect()->back()
                    ->withInput()
                    ->withErrors($validation);
            } else {
               
                $project_data = ProjectDetails::where('user_id', $request->id)->update(
                    [
                        
                        'payment_type' => $request['payment_type'],
                        'transaction_details' => $request['transaction_details'],

                    ]
                );

                if ($request->hasFile('payment_proof')) {
                
                    $path = "/all_web_data/images/payment_proof/";
                    $user_payment_details_file_name = $request->session()->get('user_id') . "_payment_proof." . $request->payment_proof->extension();

                    if (!file_exists(storage_path() . $path)) {
                        File::makeDirectory(storage_path() . '/' . $path, 0777, true);
                    }
                    if ($request->payment_proof !== null) {
                        $base64_encoded = base64_encode(file_get_contents($request->payment_proof));
                        $base64_decoded_content = base64_decode($base64_encoded);
                        $path2 = storage_path() . $path . $user_payment_details_file_name;
                        file_put_contents($path2, $base64_decoded_content);
                    }

                    $all_user_details_added = Users::where('id', $request->session()->get('user_id'))->update(
                        [
                            'payment_proof' => $user_payment_details_file_name,

                        ]
                    );

                }

                $msg = 'Information saved successfully';
                $status = 'success';   
                return redirect('user/project-registration')->with(compact('msg', 'status'));
            }
        } catch (Exception $e) {
            return redirect()->back()
                ->withInput()
                ->with(['msg' => $e->getMessage(), 'status' => 'error']);
        }
    }

    public function uploadDocs($request, $requestContent, $path, $name) {

        
        if ($request->$requestContent !== null) {
            $base64_encoded = base64_encode(file_get_contents($request->$requestContent));
            $base64_decoded_content = base64_decode($base64_encoded);
            $path2 = storage_path() . $path . $name;
            file_put_contents($path2, $base64_decoded_content);
        }
        return "ok";
    }

    public function generateProjectCode($educationType)
    {
        // Get the count of students with the same education type
        $count = ProjectDetails::where('education_type', $educationType)->count();
    
        // Increment the count by 1 for the new student
        $count++;
    
        // Generate the project code based on education type
        switch ($educationType) {
            case '1':
                $projectCode = 'A' . $count;
                break;
            case '2':
                $projectCode = 'B' . $count;
                break;
            case '3':
                $projectCode = 'C' . $count;
                break;
            default:
                // Handle other education types if needed
                $projectCode = 'null';
        }
    
        return $projectCode;
    }
    
    // public function generateIndustryCode($IndustryCode)
    // {
    //     // Get the count of students with the same education type
    //     $count = ProjectDetails::where('industry_type', $IndustryCode)->count();
    
    //     // Increment the count by 1 for the new student
    //     $count++;
    
    //     // Generate the project code based on education type
    //     switch ($IndustryCode) {
    //         case '1':
    //             $IndustryCode = 'D' . $count;
    //             break;
    //         default:
    //             // Handle other education types if needed
    //             $IndustryCode = 'null';
    //     }
    
    //     return $IndustryCode;
    // }

    public function generateIndustryCode($IndustryCode)
{
    // Get the count of students with the same education type
    $count = ProjectDetails::where('industry_type', $IndustryCode)->count();

    // Increment the count by 1 for the new student
    $count++;

    // Generate the project code without any specific condition
    $IndustryCode = 'D' . $count;
// dd($IndustryCode);
    return $IndustryCode;
}

    
    
}