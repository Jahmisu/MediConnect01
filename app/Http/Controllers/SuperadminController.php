<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;

class SuperadminController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype === 'superadmin') {
                return view('superadmin.index');
            } elseif ($usertype === 'drugstore') {
                return view('drugstore.index');
            } elseif ($usertype === 'customer') {
                return view('customer.index');
            } else {
                return redirect()->back();
            }
        }

        return redirect()->route('login');
    }

    public function create_customer()
    {
        return view('superadmin.create_customer');
    }

    public function store_customer(Request $request)
    {
        $request->validate([
            'username'   => 'required|string|unique:users,username',
            'email'      => 'required|email|unique:users,email',
            'password'   => [
                'required',
                'string',
                'min:8',
                'regex:/^(?=.*[A-Z])(?=.*\d).+$/',
            ],
            'firstname'  => 'required|string',
            'middlename' => 'nullable|string',
            'lastname'   => 'required|string',
            'age'        => 'nullable|integer',
            'birthdate'  => 'required|date',
            'sex'        => 'nullable|string|in:Male,Female',
            'address'    => 'nullable|string',
        ], [
            'password.regex' => 'Password must contain at least one uppercase letter and one number.',
            'sex.in' => 'Sex must be either Male or Female.',
        ]);

        try {
            // Create the user
            $user = User::create([
                'username' => $request->username,
                'email'    => $request->email,
                'password' => Hash::make($request->password),
                'usertype' => 'customer',
            ]);

            // Create the customer record
            Customer::create([
                'user_id'    => $user->id,
                'firstname'  => $request->firstname,
                'middlename' => $request->middlename,
                'lastname'   => $request->lastname,
                'age'        => $request->age,
                'birthdate'  => $request->birthdate,
                'sex'        => $request->sex,
                'address'    => $request->address,
            ]);

            return redirect()->back()->with('success', 'Customer created successfully!');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to create customer. Please try again.');
        }
    }
}
