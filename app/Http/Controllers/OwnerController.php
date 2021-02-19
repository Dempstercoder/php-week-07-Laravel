<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

class OwnerController extends Controller
{
   

    public function show(Owner $owner)
    {// shows the owners id
        return view ('owners/show', ['singleOwner' => $owner]); 
    }

    public function create()
    {
        return view('owners/form'); //this loads the form.blade.php
    }

    public function index()
    { // Make sure you pass through the owners from the controller
        $ownerFromDb = Owner::all();
        return view('welcome', ['bananas' => $ownerFromDb]);
    } 



    // accept the Request object
    // this gives us access to the submitted data
    public function createPost(Request $request)
    {
    // get all of the submitted data
    $data = $request->all();

    // create a new owner, passing in the submitted data
    $owner = Owner::create($data);

    // redirect the browser to the new owner
    return redirect("/owners/{$owner->id}");
    }
}

