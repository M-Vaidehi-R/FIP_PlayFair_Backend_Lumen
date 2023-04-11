<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Volunteer;



class VolunteerController extends Controller
{

    public function getAllVolunteers()
    {
        $volunteers = Volunteer::join('status', 'status_id', '=', 'status.id')->select('volunteers.id', 'fname', 'lname', 'email', 'phone', 'status.name as status_name')->get();

        return view('admin.volunteers', ['volunteers' => $volunteers]);
    }

    public function getOneVolunteer($id)
    {
        //return (Volunteer::find($id));
        $volunteer = Volunteer::find($id);
        // echo "returned singleVolunteerpage";
        return view('admin.singlevolunteer', ['volunteer' => $volunteer]);
       
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

        //return response()->json(['message' => 'Volunteer created successfully'], 201);
        return view('SuccessMsg.thankyou', [
            'message' => 'Thank you for being a part of our campaign'
        ]);
    }


    public function createAdminVolunteer(Request $request){
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

    public function createAdminVolunteerPage(){
        return view('admin.createuserform'); 
    }
    public function editVolunteer($id){
        $volunteer = Volunteer::findOrFail($id);            
        return view('admin.updateform',['volunteer' => $volunteer]);     
    } 
    
    public function updateVolunteer(Request $request, $id)
    {
        $volunteer = Volunteer::findorFail($id);

        $volunteer->fname = $request->input('fname');
        $volunteer->lname = $request->input('lname');
        $volunteer->email = $request->input('email');
        $volunteer->phone = $request->input('phone');
        $volunteer->status_id = $request->input('status');
        $volunteer->save();
        //return redirect()->route('admin.singlevolunteer', ['id' => $id])->with('success', 'Volunteer updated successfully!');
        // return response()->json($volunteer, 200);
        return view('admin.singlevolunteer')->with('volunteer', $volunteer);
    }
    
    
    public function deleteVolunteer($id)
    {
        //echo "Deleted Volunteer";
        $volunteer = Volunteer::findOrFail($id);
        $volunteer->delete();
        return view('SuccessMsg.thankyou', [
            'message' => 'The user record has been deleted successfully'
        ]);
        //return response()->json('deleted!', 200);
    }








    
}


