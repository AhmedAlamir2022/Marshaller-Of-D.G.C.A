<?php
 
namespace App\Http\Controllers;

use App\Models\Quiery;
use Illuminate\Http\Request;
use App\Repository\QuieryRepositoryInterface;

class QuireyController extends Controller
{

    protected $ContactQuiry;

    public function __construct(QuieryRepositoryInterface $ContactQuiry)
    {
        $this->ContactQuiry = $ContactQuiry;
    }

    public function ContacQuery(){
        $quires = $this->ContactQuiry->ContacQuery();
        return view('admin.contact.allcontactquires',compact('quires'));
    } // end mehtod 

    public function EditQuery (Request $request){
        return $this->ContactQuiry->EditQuery($request);
    } // End Method
}
