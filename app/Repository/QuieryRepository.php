<?php

namespace App\Repository;
use App\Models\Quiery;

class QuieryRepository implements QuieryRepositoryInterface
{

    public function ContacQuery(){
        try {
            return Quiery::latest()->get();
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }//End Method


    public function EditQuery($request){
        try {
            $query_id = $request->id;
            Quiery::findOrFail($query_id)->update([
                'country' => $request->country,
                'phone' => $request->phone,
                'email' => $request->email, 
            ]); 
            $notification = array(
                'message' => 'Query Updated Successfully', 
                'alert-type' => 'info'
            );
            return back()->with($notification);
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }//End Method


}