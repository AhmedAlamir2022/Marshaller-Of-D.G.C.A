<?php

namespace App\Repository;
use App\Models\Privacy;
use Carbon\Carbon;

class PrivacyRepository implements PrivacyRepositoryInterface
{

    public function AllPrivices(){
        try {
            return Privacy::latest()->get();
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }//End Method


    public function AddPrivicy($request){
        try {
            Privacy::insert([
                'question' => $request->question,
                'answer' => $request->answer,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Privacy Added Successfully', 
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }//End Method


    public function UpdatePrivicy($request){
        try {
            $question_id = $request->id;

            Privacy::findOrFail($question_id)->update([
                    'question' => $request->question,
                    'answer' => $request->answer,
                ]); 
                $notification = array(
                'message' => 'Privacy Updated successfully', 
                'alert-type' => 'info'
            );
            return back()->with($notification);
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }//End Method


    public function DeletePrivicy($request){
        try {
            $Privacies = Privacy::findOrFail($request->id)->delete();
            $notification = array(
                'message' => 'Privacy Deleted Successfully', 
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }//End Method



}