<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Newsletter;



class NewsletterController extends Controller
{

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email']);
            
        Newsletter::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        // return response()->json(['message' => 'You are successfully signed up for newsLetter'], 201);
        return view('SuccessMsg.thankyou', [
            'message' => 'You are successfully signed up for newsLetter'
        ]);
    }

}