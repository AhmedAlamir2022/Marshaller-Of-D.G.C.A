<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Plans;
use Carbon\Carbon;
use Auth;
use App\Repository\PlansRepositoryInterface;

class PlansController extends Controller
{

    protected $ArrivalPlans;

    public function __construct(PlansRepositoryInterface $ArrivalPlans)
    {
        $this->ArrivalPlans = $ArrivalPlans;
    }


    public function PlansAll (){
        $employees = $this->ArrivalPlans->GetEmployees();
        $plans = $this->ArrivalPlans->GetPlans();
        return view('admin.plans.plans',compact('employees','plans'));
    } // End Method

    public function EditPlane (Request $request){
        return $this->ArrivalPlans->EditPlane($request);
    }// End Method

    public function AddPlan(Request $request){
        return $this->ArrivalPlans->AddPlan($request);
    }// End Method

    public function DeletePlan($id){
        return $this->ArrivalPlans->DeletePlan($id);      
    } // End Method

    public function Delete1Plan($id){
        return $this->ArrivalPlans->Delete1Plan($id);     
    } // End Method

    public function HomePlans(){
        $employees = Employee::orderBy('name','ASC')->get();
        $plans = Plans::latest()->paginate(20);
        return view('frontend.arrival_plans',compact('employees','plans'));;
     }// End Method

     public function PlanDetails ($id){
        $plans = Plans::findOrFail($id);
        $employees = Employee::orderBy('name','ASC')->get();
        return view('frontend.plan_details',compact('plans','employees'));
    } // End Method 

    public function ReportPlan(){
        $plans = Plans::latest()->get();
        $employees = Employee::orderBy('name','ASC')->get();
        return view('admin.plans.plans_report',compact('plans','employees'));
    }// End Method

    public function SearchPlan(Request $request){
        $start_at = date($request->start_at);
        $end_at = date($request->end_at);
        $plans = Plans::whereBetween('created_at',[$start_at,$end_at])->get();
        $employees = Employee::all();
        return view('admin.plans.plans_report',compact('employees'))->withDetails($plans); 
    }//end method


    public function AddNewPlan(Request $request){
        return $this->ArrivalPlans->AddNewPlan($request);
    }// End Method

    public function ReportOnPlan(){
        $plans = Plans::latest()->get();
        $employees = Employee::orderBy('name','ASC')->get();
        return view('employee.plans.plans_report',compact('plans','employees'));
    }// End Method

    public function SearchOnPlan(Request $request){
        $start_at = date($request->start_at);
        $end_at = date($request->end_at);
        $plans = Plans::whereBetween('created_at',[$start_at,$end_at])->get();
        $employees = $this->ArrivalPlans->GetEmployees();
        return view('employee.plans.plans_report',compact('employees'))->withDetails($plans); 
    }//end method

    public function MyPlans (){
        $employees = $this->ArrivalPlans->GetEmployees();
        $plans = $this->ArrivalPlans->GetPlans();
        return view('employee.plans.plans',compact('employees','plans'));
    } // End Method

}
