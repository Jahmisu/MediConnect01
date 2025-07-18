<?php

namespace App\Actions\Fortify;

use App\Models\Drugstore;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'usertype' => ['required'],
        ])->validate();

        // Step 1: Create the base user
        $user = User::create([
            'username' => $input['username'],
            'email' => $input['email'],
            'usertype' => $input['usertype'],
            'password' => Hash::make($input['password']),
        ]);

        // Step 2: Create related user type info
        if ($input['usertype'] === 'customer') {
            Customer::create([
                'user_id' => $user->id,
                'firstname' => $input['firstname'] ?? null,
                'middlename' => $input['middlename'] ?? null,
                'lastname' => $input['lastname'] ?? null,
                'age' => $input['age'] ?? null,
                'birthdate' => $input['birthdate'] ?? null,
                'sex' => $input['sex'] ?? null,
                'address' => $input['address'] ?? null,
            ]);
        } elseif ($input['usertype'] === 'drugstore') {
            Drugstore::create([
                'user_id' => $user->id,
                'storename' => $input['storename'] ?? null,
                'storeaddress' => $input['storeaddress'] ?? null,
                'licenseno' => $input['licenseno'] ?? null,
                'operatingdayshrs' => $input['operatingdayshrs'] ?? null,
            ]);
        }

        return $user;
    }
}

