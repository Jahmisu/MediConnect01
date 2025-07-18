<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SuperadminController extends Controller
{
    public function index()
    {
           if (Auth::id()) {
        $usertype = Auth()->user()->usertype;

        if ($usertype == 'superadmin')
            {
            return view('dashboard');
            } 
        else if ($usertype == 'drugstore') 
            {
            return view('drugstore.index');
            }
        else if ($usertype == 'customer') 
            {
            return view('customer.index');
            }
        else
            {
            return redirect()->back();
            }
        
    }
    }
}
