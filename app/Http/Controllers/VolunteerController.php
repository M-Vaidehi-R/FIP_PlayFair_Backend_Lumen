<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Volunteer;



class VolunteerController extends Controller
{

    public function getAllVolunteers()
    {
        //return response()->json(Volunteer::join('status', 'status_id', '=', 'status.id')->select('volunteers.name','contact','status.name')->get());
        //echo "displayed all volunteers";
        //return response()->json(Volunteer::join('status', 'status_id', '=', 'status.id')->select('fname', 'lname', 'email', 'phone','status.name as status_name')->get());
        //view('volunteers');
        $volunteers = Volunteer::join('status', 'status_id', '=', 'status.id')->select('volunteers.id','fname', 'lname', 'email', 'phone','status.name as status_name')->get();

        return view('admin.volunteers', ['volunteers' => $volunteers]);
    }

    public function getOneVolunteer($id)
    {
        return response()->json(Volunteer::find($id));
    }


    public function createVolunteer(Request $request)
{
    $this->validate($request, [
        'fname' => 'required',
        'lname' => 'required',
        'email' => 'required|email',
        'phone' => ['required', 'regex:/^[0-9]{10}$/']
    ]);
    

    Volunteer::create([
        'fname' => $request->input('fname'),
        'lname' => $request->input('lname'),
        'email' => $request->input('email'),
        'phone' => $request->input('phone')
    ]);

    return response()->json(['message' => 'Volunteer created successfully'], 201);
}


    public function updateVolunteer(Request $request)
    {
        echo "Update";
        $volunteer = Volunteer::findOrFail($id);
        $volunteer->update($request->all());
        return response()->json($volunteer, 200);
        // Updating the existed results
    }

    public function deleteVolunteer($id)
    {
        echo "delete";
        $volunteer = Volunteer::findOrFail($id)->delete();
        return response()->json('deleted!', 200);
    }
}

// class AdminController extends Controller
// {
//     public function login(Request $request)
//     {
//         $email = $request->input('email');
//         $user = Volunteer::where('email', $email)->first();
    
//         if ($user && $user->status_id == 1) {
//             // User is an admin
//             // return view for the admin dashboard
//             echo "admin";
//         } else {
//             // User is not an admin
//             // return view for the user dashboard
//             echo "user";
//         }
//     }
    
// }
