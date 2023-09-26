<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use App\Models\Contact;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showContacts(){
        $contacts = Contact::all();

        return view('profile', ['contacts' => $contacts]);
    }

    public function SaveProfile(Request $request){
        $data = $request->validate(
            [
            'title' => 'required',
            'phone' => 'required',
            'description' => 'required',
            'email' => 'required',
            'address' => 'required',
            'language' => 'required',
            ]);
            
            $data['contactid'] = $request->input('contactid');

            $newProfile = Profile::create($data);
            return redirect(route('profile'));
    }
    }
