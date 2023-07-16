<?php
namespace App\Http\Services\Admin;

use App\Http\Repository\Admin\StudentRepository;

use App\Models\
{ UserDetails };
use Carbon\Carbon;
use Config;
use Storage;

class StudentServices
{

	protected $repo;

    /**
     * TopicService constructor.
     */
    public function __construct()
    {
        $this->repo = new StudentRepository();
    }
    
    public function getAll(){
        try {
            return $this->repo->getAll();
        } catch (\Exception $e) {
            return $e;
        }
    }



    
    public function addAll($request){
        try {
            $last_id = $this->repo->addAll($request);
            // $path = Config::get('DocumentConstant.USER_DETAILS_ADD');
            // $path = '/all_web_data/images/user/'; // Replace with your actual folder path
            // $englishImageName = $last_id . '_image.' . $request->passport_size->extension();
            // $marathiImageName = $last_id . '_pdf.' . $request->soft_copy->extension();
            // $this->uploadImage($request, 'passport_size', $path, $englishImageName);
            // $this->uploadImage($request, 'soft_copy', $path, $marathiImageName);
            

            if ($last_id) {
                return ['status' => 'success', 'msg' => 'User Details Added Successfully.'];
            } else {
                return ['status' => 'error', 'msg' => ' User Details get Not Added.'];
            }  
        } catch (Exception $e) {
            return ['status' => 'error', 'msg' => $e->getMessage()];
        }      
    }
    
}