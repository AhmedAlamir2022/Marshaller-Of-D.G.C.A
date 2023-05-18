<?php

namespace App\Repository;
use App\Models\Contact;
use Illuminate\Support\Carbon;

class ContactRepository implements ContactRepositoryInterface
{

    public function Contact(){
        try {
            return view('frontend.contact');
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }//End Method


    public function StoreMessage($request){
        try {
            Contact::insert([
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'phone' => $request->phone,
                'message' => $request->message, 
                'created_at' => Carbon::now(),
            ]);
             $notification = array(
                'message' => 'Your Message Submited Successfully', 
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }//End Method


    public function ContactMessage(){
        try {
            return Contact::latest()->get();
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }//End Method


    public function DeleteMessage($id){
        try {
            Contact::findOrFail($id)->delete();
            $notification = array(
                'message' => 'Message Deleted Successfully', 
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }//End Method


    public function HomeAbout(){
        try {
            return view('frontend.about');
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }//End Method


}