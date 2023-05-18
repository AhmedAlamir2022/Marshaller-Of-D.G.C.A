<?php

namespace App\Repository;
use App\Models\Gallary;
use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic as Image;

class GallaryRepository implements GallaryRepositoryInterface
{

    public function AllGallary(){
        try {
            return Gallary::latest()->get();
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }//End Method


    public function AddGallary($request){
        try {
            $image = $request->file('gallery_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
            Image::make($image)->resize(430,327)->save('upload/'.$name_gen);
            $save_url = 'upload/'.$name_gen;

            Gallary::insert([
                'title' => $request->title,
                'gallery_image' => $save_url,
                'created_at' => Carbon::now(),
            ]); 

            $notification = array(
            'message' => 'Image Added Successfully', 
            'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }//End Method


    


    public function DeleteGallary($id){
        try {
            Gallary::findOrFail($id)->delete();
            $notification = array(
                'message' => 'Galary Image Deleted Successfully', 
                'alert-type' => 'error'
            );
            return back()->with($notification); 
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }//End Method


}