<?php
namespace App\Http\Repository\Admin;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\QueryException;
use DB;
use Illuminate\Support\Carbon;
// use Session;
use App\Models\ {
	Slider
};
use Config;

class StudentRepository  {
	public function getAll(){
        try {
            return Slider::all();
        } catch (\Exception $e) {
            return $e;
        }
    }

	public function addAll($request){
        try {
            $slides = new Slider();
            $slides->english_title = $request['english_title'];
            $slides->marathi_title = $request['marathi_title'];
            $slides->english_description = $request['english_description'];
            $slides->marathi_description = $request['marathi_description'];
            $slides->url = $request['url'];
            // $slides->english_scrolltime = $request['english_scrolltime'];
        
            $slides->save(); 
            $last_insert_id = $slides->id;

            $englishImageName = $last_insert_id . '_english.' . $request->english_image->extension();
            $marathiImageName = $last_insert_id . '_marathi.' . $request->marathi_image->extension();
            
            $slide = Slider::find($last_insert_id); // Assuming $request directly contains the ID
            $slide->english_image = $englishImageName; // Save the image filename to the database
            $slide->marathi_image = $marathiImageName; // Save the image filename to the database
            $slide->save();
            
            return $last_insert_id;

        } catch (\Exception $e) {
            return [
                'msg' => $e,
                'status' => 'error'
            ];
        }
    }

    public function getById($id){
        try {
            $slider = Slider::find($id);
            if ($slider) {
                return $slider;
            } else {
                return null;
            }
        } catch (\Exception $e) {
            return $e;
            return [
                'msg' => 'Failed to get by id slide.',
                'status' => 'error'
            ];
        }
    }
    
   

}