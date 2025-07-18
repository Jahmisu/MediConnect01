<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Username') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
            </div>

            <!-- User Type Selector -->
            <div class="mt-4" x-data="{ usertype: '{{ old('usertype') }}' }">
                <x-label for="usertype" value="User Type" />
                <select name="usertype" id="usertype" class="block w-full mt-1" x-model="usertype" required>
                    <option value="">Select user type</option>
                    <option value="drugstore">Drugstore</option>
                    <option value="customer">Customer</option>
                </select>

                <!-- Drugstore Fields -->
                <div x-show="usertype === 'drugstore'" class="mt-4 space-y-4">
                    <div>
                        <x-label for="storename" value="Store Name" />
                        <x-input type="text" name="storename" class="block w-full mt-1" />
                    </div>
                    <div>
                        <x-label for="storeaddress" value="Store Address" />
                        <x-input type="text" name="storeaddress" class="block w-full mt-1" />
                    </div>
                    <div>
                        <x-label for="licenseno" value="License No." />
                        <x-input type="text" name="licenseno" class="block w-full mt-1" />
                    </div>
                    <div>
                        <x-label for="operatingdayshrs" value="Operating Days/Hours" />
                        <x-input type="text" name="operatingdayshrs" class="block w-full mt-1" />
                    </div>
                </div>

                <!-- Customer Fields -->
                <div x-show="usertype === 'customer'" class="mt-4 space-y-4">
                    <div>
                        <x-label for="firstname" value="First Name" />
                        <x-input type="text" name="firstname" class="block w-full mt-1" />
                    </div>
                    <div>
                        <x-label for="middlename" value="Middle Name" />
                        <x-input type="text" name="middlename" class="block w-full mt-1" />
                    </div>
                    <div>
                        <x-label for="lastname" value="Last Name" />
                        <x-input type="text" name="lastname" class="block w-full mt-1" />
                    </div>
                    <div>
                        <x-label for="age" value="Age" />
                        <x-input type="number" name="age" class="block w-full mt-1" />
                    </div>
                    <div>
                        <x-label for="birthdate" value="Birthdate" />
                        <x-input type="date" name="birthdate" class="block w-full mt-1" />
                    </div>
                    <div>
                        <x-label for="sex" value="Sex" />
                        <select name="sex" class="block w-full mt-1">
                            <option value="">Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div>
                        <x-label for="address" value="Address" />
                        <x-input type="text" name="address" class="block w-full mt-1" />
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    Already registered?
                </a>

                <x-button class="ml-4">
                    Register
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
