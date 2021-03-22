<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function create()
    {

        //Checking if an Admin is not logged in if they are not redirect to adminlogin page.
        if(!Auth::guard('admin')->check()){

           if(Auth::guard('patient')->check()){
                //If Patient logged in Redirect to Patient Dashboard.
               return redirect('/');
           }
           return redirect('/adminlogin');
       }

        //get a list of the patients that submitted a request to reset their password
        $passwordResetRequests = Patient::select(['FirstName', 'LastName', 'Email'])->where("PasswordReset", "true")->get();

        $patientsInfo = [];
        for ($i = 0; $i < count($passwordResetRequests); $i++) {
            $patient = $passwordResetRequests->all()[$i]->toArray();
            $patient = $patient["FirstName"] . " " . $patient["LastName"] . " (" . $patient["Email"] . ")";
            $patientsInfo[] = $patient;
        }

        return view('PasswordReset', ["patients" => $patientsInfo]);
    }

    public function store()
    {

        //Checking if an Admin is not logged in if they are not redirect to adminlogin page.
        if(!Auth::guard('admin')->check()){

            if(Auth::guard('patient')->check()){
                //If Patient logged in Redirect to Patient Dashboard.
                return redirect('/');
           }
           return redirect('/adminlogin');
        }

        if (!isset($_POST['data'])) {
            return view("Admin_dashboard_page");
        }

        $submittedData = $_POST['data'];
        unset($submittedData["_token"]);



        $accepted = [];
        $removed = [];

        //iterate over each returned element in the form, and check whether this patient was accepted or removed
        foreach ($submittedData as $key => $value) {
            $email = explode(" ", $key)[2];
            if ($value == "Accept") {
                $accepted[] = substr($email, 1, -1);

            } else {
                $removed[] = substr($email, 1, -1);
            }
        }


        //for each accepted password-reset request, create a temporary password ("pending" indicates that the patient has not set a permanent password yet)
        foreach ($accepted as $acceptedEmail) {
            $tempPassword = Str::random(8);
            Patient::where('Email', $acceptedEmail)->update(array('PasswordReset' => "pending", "Password" => $tempPassword));
        }

        foreach ($removed as $removedEmail) {
            Patient::where('Email', $removedEmail)->update(array('PasswordReset' => "false"));
        }

        return view("Admin_dashboard_page");
    }

    public function patientchange(){

          //Check if Patient is logged in.
        if(!Auth::guard('patient')->check()){
            if(Auth::guard('admin')->check()){
                return redirect('/');
            }            
            return redirect('/')->with('message', 'No user logged in.');            
        }

        return view('patient_password_change');
    }

    public function patientsave(Request $request){
          
        //Check if Patient is logged in.
           if(!Auth::guard('patient')->check()){
            if(Auth::guard('admin')->check()){
                return redirect('/');
            }            
            return redirect('/')->with('message', 'No user logged in.');            
        }

        
        
        //Password Requirements and Confirmation.
        $this->validate($request, [
            'currentpass' => 'required',          
            'password' => 'required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            'password2' => 'same:password',            
        ]);

        //As user is currently logged in get the currently authenticated user and change their password.
        $currentUser = Auth::guard('patient')->user();
        $currentEmail = $currentUser->email;

        if(!Auth::guard('patient')->validate(['email' => $currentEmail , 'password' => $request->input('currentpass')])){
            return redirect('/passwordchangepatient')->with('message', 'Current Password is incorrect.');
        }

        $currentUser->password = Hash::make($request->input('password'));
        $currentUser->save();
        
        //Redirect to dash with success message.
        return redirect('/')->with('message', 'Password changed successfully.');
    }

    public function adminchange(){

          //Check if Admin is logged in.
          if(!Auth::guard('admin')->check()){
            if(Auth::guard('patient')->check()){
                return redirect('/');
            }            
            return redirect('/')->with('message', 'No user logged in.');            
        }

        return view('admin_password_change');


    }

    public function adminsave(Request $request){
    //Check if Admin is logged in.
    if(!Auth::guard('admin')->check()){
        if(Auth::guard('patient')->check()){
            return redirect('/');
        }            
        return redirect('/')->with('message', 'No user logged in.');            
    }

    
    
    //Password Requirements and Confirmation.
    $this->validate($request, [
        'currentpass' => 'required',          
        'password' => 'required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
        'password2' => 'same:password',            
    ]);

    //As user is currently logged in get the currently authenticated user and change their password.
    $currentUser = Auth::guard('admin')->user();
    $currentEmail = $currentUser->email;

    if(!Auth::guard('admin')->validate(['email' => $currentEmail , 'password' => $request->input('currentpass')])){
        return redirect('/passwordchangepatient')->with('message', 'Current Password is incorrect.');
    }

    $currentUser->password = Hash::make($request->input('password'));
    $currentUser->save();
    
    //Redirect to dash with success message.
    return redirect('/')->with('message', 'Password changed successfully.');
    }
}
