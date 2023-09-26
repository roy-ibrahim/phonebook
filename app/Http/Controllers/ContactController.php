<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showAll()
    {
    $contacts = Contact::all();
      return view('welcome', ['contacts' => $contacts]);
    }

    public function save(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required',
        ]);

        if($request->hasFile('image')){
            $destination_path = 'public/images';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);

            $data['image'] = $image_name;
        }
        
        $newContact = Contact::create($data);
        return redirect(route('main'));
    }

    public function destroy(Contact $contact){
        $contact->delete();
        return redirect(route('main'));
    }
}
