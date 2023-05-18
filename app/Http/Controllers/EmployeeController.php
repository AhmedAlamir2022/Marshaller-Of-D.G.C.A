<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Nationalitie;
use App\Models\Type_Blood;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function Index(){
        return view('employee.employee_login');
    }// End Method 

    public function Login(Request $request){
        $check = $request->all();
        if(Auth::guard('employee')->attempt(['email' => $check['email'],'password' => $check['password']])){
            $notification = array(
                'message' => 'Welcome Again , Employee', 
                'alert-type' => 'success'
            );
            return redirect()->route('employee.dashboard')->with($notification);
        }else{
            $notification = array(
                'message' => 'Invalid Email Or Password', 
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
    }// End Method 

    public function Dashboard(){
        return view('employee.employee_dashboard');
    }// End Method 

    public function Profile(){
        $id = Auth::guard('employee')->user()->id;
        $nationalites = Nationalitie::all();
        $type_bloods = Type_Blood::all();
        $userData = Employee::find($id);
        return view('employee.employee_profile',compact('userData','nationalites','type_bloods'));
    }// End Method

    public function StoreProfile(Request $request){
        $id = Auth::guard('employee')->user()->id;
        $data = Employee::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->username = $request->username;
        $data->contact = $request->contact;
        $data->gender = $request->gender;
        $data->nationality = $request->nationality;
        $data->bloodtype = $request->bloodtype;
        $data->address = $request->address;
        $data->country = $request->country;
        $data->city	 = $request->city	;
        $data->save();
        $notification = array(
            'message' => 'Profile Updated Successfully', 
            'alert-type' => 'info'
        );
        return back()->with($notification);
    }// End Method

    public function ChangePassword(){
        return view('employee.employee_change_password');
    }// End Method

    public function UpdatePassword(Request $request){
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'confirm_password' => 'required|same:newpassword',
        ]);

        $hashedPassword = Auth::guard('employee')->user()->password;
        if (Hash::check($request->oldpassword,$hashedPassword )) {
            $users = Employee::find(Auth::guard('employee')->user()->id);
            $users->password = bcrypt($request->newpassword);
            $users->save();

            $notification = array(
                'message' => 'Password Updated Successfully', 
                'alert-type' => 'info'
            );
            return back()->with($notification);
        } else{

            $notification = array(
                'message' => 'Old password is not match', 
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
    }// End Method

    public function EmployeeLogout(){
        Auth::guard('employee')->logout();
        $notification = array(
            'message' => 'Employee Logout Successfully', 
            'alert-type' => 'error'
        );
        return redirect()->route('login_form1')->with($notification);
    }// End Method 


}
