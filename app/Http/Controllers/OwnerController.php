<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owners;

class OwnerController extends Controller
{
    public function index()
    {
        $ownerFromDB = Owners::all();
        return view('welcome', ['owners' => $ownerFromDb]);
    }
};
// Make sure you pass through the owners from the controller
