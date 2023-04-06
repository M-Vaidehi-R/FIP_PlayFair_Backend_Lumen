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
        return response()->json(Volunteer::join('status', 'status_id', '=', 'status.id')->select('first_name', 'last_name', 'contact', 'status.name as status_name')->get());
    }

    public function getOneVolunteer($id)
    {
        return response()->json(Volunteer::find($id));
    }

    // Why does it have to be 200 specifically?
    // Wht does it have to 201? Because the list exists from 0 to 200?

    // required|[the value] means "type [the value]"
    public function createVolunteer(Request $request)
    {
        echo "create";
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'phone' => 'required|integer'
        ]);

        // request grabbing all the volunteersgetAllvolunteers
        // the skinny arrow (->) means access
        // $volunteer = Volunteer::create($request->all());
        $volunteer = Volunteer::create([
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone')
        ]);
        return response()->json($volunteer, 201);
        // returning the object back again. When the new database is created, it starts from 201.
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
        echo "dalete";
        $volunteer = Volunteer::findOrFail($id)->delete();
        return response()->json('deleted!', 200);
    }
}
