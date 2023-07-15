<?php
namespace App\Http\Services\Admin\LoginRegister;

use App\Http\Repository\Admin\LoginRegister\RegisterRepository;


use App\Models\
{ User };
use Carbon\Carbon;
use Config;
use Storage;

class RegisterServices
{

	protected $repo;

    /**
     * TopicService constructor.
     */
    public function __construct() {
        $this->repo = new RegisterRepository();
    }


    public function register($request){
        try {
            $last_id = $this->repo->register($request);
            if ($last_id) {
                return ['status' => 'success', 'msg' => 'User Added Successfully.'];
            } else {
                return ['status' => 'error', 'msg' => 'User get Not Added.'];
            }  

        } catch (Exception $e) {
            return ['status' => 'error', 'msg' => $e->getMessage()];
            }      
    }

   
}