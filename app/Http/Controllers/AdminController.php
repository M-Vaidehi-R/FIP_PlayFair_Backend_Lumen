<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Volunteer;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->input('email');
        $user = Volunteer::where('email', $email)->first();
    
        if ($user && $user->status_id == 1) {
            // User is an admin
            // return view for the admin dashboard
            return view('volunteerpage');
          
        } else if (!$user){
            // return redirect('http://localhost:3000/adminlogin')->with('error', 'Email not found. Sign up today!');
            return view('signuptoday');
        }
               
        else {
            // User is not an admin
            // return view for the user dashboard
            return view('adminpage');

        }
    }
    
}
