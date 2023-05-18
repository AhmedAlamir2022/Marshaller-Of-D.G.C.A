<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallary;
use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic as Image;
use App\Repository\GallaryRepositoryInterface;

class GalleryController extends Controller
{

    protected $GallayImage;

    public function __construct(GallaryRepositoryInterface $GallayImage)
    {
        $this->GallayImage = $GallayImage;
    }


    public function AllGallary  (){
        $gallaries = $this->GallayImage->AllGallary();
        return view('admin.gallary.gallary',compact('gallaries'));
    } 

    public function AddGallary(Request $request){
        return $this->GallayImage->AddGallary($request);
   }

   public function DeleteGallary($id){
    return $this->GallayImage->DeleteGallary($id);      
    } 
}
