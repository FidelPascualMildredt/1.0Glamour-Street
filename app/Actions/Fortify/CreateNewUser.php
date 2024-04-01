<?php

namespace App\Actions\Fortify;

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
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'], // Agregado: Validación para el apellido
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'address' => ['required', 'string', 'max:255'], // Agregado: Validación para la dirección
            'telephone' => ['required', 'string', 'max:255'], // Agregado: Validación para el teléfono
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',

        ])->validate();

        return User::create([
            'name' => $input['name'],
            'last_name' => $input['last_name'], // Agregado: Guardar el apellido
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'address' => $input['address'], // Agregado: Guardar la dirección
            'telephone' => $input['telephone'], // Agregado: Guardar el teléfono
        ]);
    }
}
