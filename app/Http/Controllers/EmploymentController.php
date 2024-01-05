<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\employment;

class EmploymentController extends Controller
{
    public function index()
    {
     return view('employment');
    }
 
    public function add(Request $req)
    {
    
        Employment::create([
             'name' => $req->name,
             'email' => $req->email,
             'mobile' => $req->mobile,
             'message' => $req->message,
         ]);
         return redirect()->back()->with('msg','Added Succesfully');
    }
}

