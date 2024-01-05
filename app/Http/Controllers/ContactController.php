<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
Use App\Models\Contact;

class ContactController extends Controller
{
   public function index()
   {
    return view('contact');
   }

   public function add(Request $req)
   {
   
        Contact::create([
            'name' => $req->name,
            'email' => $req->email,
            'mobile' => $req->mobile,
            'message' => $req->message,
        ]);
        return redirect()->back()->with('msg','Added Succesfully');
   }
 
}
