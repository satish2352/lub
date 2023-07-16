<?php
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;
use App\Models\ {
    User

};
use Illuminate\Support\Facades\Storage;







function uploadImage($request, $image_name, $path, $name) {

    // if (!file_exists(storage_path().$path)) {
    //     File::makeDirectory(storage_path().'/'.$path,0777,true);
    // }
    // if($request->$image_name !== null) {
    //     $base64_encoded = base64_encode(file_get_contents($request->$image_name)); 
    //     $base64_decoded_content = base64_decode($base64_encoded);
    //     $path2 = storage_path().$path.$name;
    //     file_put_contents($path2, $base64_decoded_content);
    // }


    $filePath = $path.$name;
    $path = Storage::disk('s3')->put($filePath, file_get_contents($request->$image_name));
    $path = Storage::disk('s3')->url($path);

}




function getProfileImage()
{
    $user_detail = User::where('is_active', true)
        ->where('id', session()->get('user_id'))
        ->select('id', 'f_name', 'm_name', 'l_name', 'u_email', 'u_password', 'number', 'designation','user_profile')
        ->first();
    // echo $user_detail;
    // die();
    return $user_detail;
}





















