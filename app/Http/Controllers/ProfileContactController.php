<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProfileContact; 

class ProfileContactController extends Controller
{
    
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|min:9|max:10|numeric',
            'message' => 'required|max:255'
        ]);
        $contact = new ProfileContact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->message = $request->input('message');

        $contact->save();
        return redirect('/');
    }
}
