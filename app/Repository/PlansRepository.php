<?php

namespace App\Repository;
use App\Models\Employee;
use App\Models\Plans;
use Carbon\Carbon;
use Auth;

class PlansRepository implements PlansRepositoryInterface
{

    public function GetPlans(){
        try {
            return Plans::latest()->get();
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }//End Method

    public function GetEmployees(){
        try {
            return Employee::latest()->get();
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }//End Method

    public function EditPlane($request){
        try {
            $data = Plans::find($request->id);
            $data->airline_company = $request->airline_company;
            $data->flight_number = $request->flight_number;
            $data->airplane_type = $request->airplane_type;
            $data->gate = $request->gate;
            $data->time = $request->time;
            $data->arrival = $request->arrival;
            $data->employee_id  = $request->employee_id ;
            $data->airplane_reg = $request->airplane_reg;
            $data->notes = $request->notes;
            $data->save();
            $notification = array(
                'message' => 'Arrival Plan Info Updated Successfully', 
                'alert-type' => 'info'
            );
            return back()->with($notification);
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }//End Method


    public function AddPlan($request){
        try {
            Plans::insert([
                'airline_company' => $request->airline_company,
                'flight_number' => $request->flight_number,
                'airplane_type' => $request->airplane_type,
                'gate' => $request->gate,
                'time' => $request->time,
                'arrival' => $request->arrival,
                'employee_id' => $request->employee_id,
                'airplane_reg' => $request->airplane_reg,
                'notes' => $request->notes,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Arrival Plan Added Successfully', 
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }//End Method


    public function DeletePlan($id){
        try {
            Plans::findOrFail($id)->delete();
            $notification = array(
                'message' => 'Arrival Plan Deleted Successfully', 
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }//End Method

    public function Delete1Plan($id){
        try {
            Plans::findOrFail($id)->delete();
            $notification = array(
                'message' => 'Arrival Plan Deleted Successfully', 
                'alert-type' => 'error'
            );
            return back()->with($notification);  
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }//End Method

    public function AddNewPlan($request){
        try {
            Plans::insert([
                'airline_company' => $request->airline_company,
                'flight_number' => $request->flight_number,
                'airplane_type' => $request->airplane_type,
                'gate' => $request->gate,
                'time' => $request->time,
                'arrival' => $request->arrival,
                'employee_id' => Auth::guard('employee')->user()->id,
                'airplane_reg' => $request->airplane_reg,
                'notes' => $request->notes,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Arrival Plan Added Successfully', 
                'alert-type' => 'success'
            );
            return back()->with($notification);
        }
        catch (Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }//End Method



}