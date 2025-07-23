<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    /**
     * Redirects user to their appropriate dashboard after login.
     */
    public function index()
    {
        if (Auth::check()) {
            $usertype = Auth::user()->usertype;

            switch ($usertype) {
                case 'admin':
                    return view('admin.index');
                case 'drugstore':
                    return view('drugstore.index');
                case 'customer':
                    return view('customer.index');
                default:
                    Auth::logout();
                    return redirect()->route('login')->withErrors(['error' => 'Invalid user type.']);
            }
        }

        return redirect()->route('login');
    }

    /**
     * Landing page (/) logic.
     * Redirect authenticated users to /home automatically.
     */
    public function home()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }

        return view('home.index'); // This is your landing (public) page
    }

    public function createCustomer()
    {
        return view('admin.add_customer');
    }

    public function storeCustomer(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'firstname' => 'required|string',
            'middlename' => 'nullable|string',
            'lastname' => 'required|string',
            'birthdate' => 'required|date',
            'sex' => 'required|in:male,female',
            'address' => 'required|string',
        ]);

        $user = User::create([
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'usertype' => 'customer',
        ]);

        Customer::create([
            'user_id' => $user->id,
            'firstname' => $validatedData['firstname'],
            'middlename' => $validatedData['middlename'],
            'lastname' => $validatedData['lastname'],
            'birthdate' => $validatedData['birthdate'],
            'sex' => $validatedData['sex'],
            'address' => $validatedData['address'],
        ]);

        return redirect()->route('admin.customers.create')->with('success', 'Customer created successfully.');
    }

    public function viewCustomers()
    {
        $customers = Customer::with('user')->get();
        return view('admin.view_customer', compact('customers'));
    }



}
