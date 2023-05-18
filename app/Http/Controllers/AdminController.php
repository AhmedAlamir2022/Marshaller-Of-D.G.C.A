<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Employee;
use App\Models\Nationalitie;
use App\Models\Type_Blood;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function Index(){
        return view('admin.admin_login');
    }// End Method 

    public function Login(Request $request){
        $check = $request->all();
        if(Auth::guard('admin')->attempt(['email' => $check['email'],'password' => $check['password']])){
            $notification = array(
                'message' => 'Welcome Again , Super Admin', 
                'alert-type' => 'success'
            );
            return redirect()->route('admin.dashboard')->with($notification);
        }else{
            $notification = array(
                'message' => 'Invalid Email Or Password', 
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
    }// End Method 

    public function Dashboard(){
        return view('admin.admin_dashboard');
    }// End Method 

    public function AdminLogout(){
        Auth::guard('admin')->logout();
        $notification = array(
            'message' => 'Admin Logout Successfully', 
            'alert-type' => 'error'
        );
        return redirect()->route('login_form')->with($notification);
    }// End Method 

    public function ChangePassword(){
        return view('admin.admin_change_password');
    }// End Method

    public function UpdatePassword(Request $request){
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'confirm_password' => 'required|same:newpassword',
        ]);

        $hashedPassword = Auth::guard('admin')->user()->password;
        if (Hash::check($request->oldpassword,$hashedPassword )) {
            $users = Admin::find(Auth::guard('admin')->user()->id);
            $users->password = bcrypt($request->newpassword);
            $users->save();

            $notification = array(
                'message' => 'Password Updated Successfully', 
                'alert-type' => 'info'
            );
            return back()->with($notification);
        } 
        else{

            $notification = array(
                'message' => 'Old password is not match', 
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
    }// End Method

    public function Profile(){
        $id = Auth::guard('admin')->user()->id;
        $userData = Admin::find($id);
        return view('admin.admin_profile',compact('userData'));
    }// End Method

    public function StoreProfile(Request $request){
        $id = Auth::guard('admin')->user()->id;
        $data = Admin::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->username = $request->username;
        $data->contact = $request->contact;
        $data->address = $request->address;
        $data->country = $request->country;
        $data->city	 = $request->city;
        $data->save();
        $notification = array(
            'message' => 'Admin Profile Updated Successfully', 
            'alert-type' => 'info'
        );
        return back()->with($notification);
    }// End Method

    public function EmployeeAll(){
        $nationalites = Nationalitie::all();
        $type_bloods = Type_Blood::all();
        $employees = Employee::latest()->get();
        return view('admin.users.users',compact('employees' , 'nationalites', 'type_bloods'));
    } // End Method

    public function AdminEmployeeAdd(Request $request){
        Employee::insert([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'contact' => $request->contact,
            'gender' => $request->gender,
            'nationality' => $request->nationality,
            'bloodtype' => $request->bloodtype,
            'address' => $request->address,
            'country' => $request->country,
            'city' => $request->city,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Employee Added Successfully', 
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }// End Method

    public function DeleteEmployee($id){
        Employee::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Employeer Deleted Successfully', 
            'alert-type' => 'error'
        );
        return back()->with($notification);       
    } // End Method

    public function EditEmployee(Request $request){
        $data = Employee::find($request->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
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
            'message' => 'Employee Info Updated Successfully', 
            'alert-type' => 'info'
        );
        return back()->with($notification);
    }// End Method

    public function DeleteAdmin($id){
        try{
            Admin::findOrFail($id)->delete();
            $notification = array(
                'message' => 'Admin Deleted Successfully', 
                'alert-type' => 'error'
            );
            return back()->with($notification);  
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }     
    } // End Method 

    public function AdminAll(){
        $admins = Admin::latest()->get();
        return view('admin.users.admin_all',compact('admins'));
    } // End Method

    public function AdminAdd(Request $request){
        Admin::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Admin Added Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->route('admin.all')->with($notification);
    }// End Method 
}
