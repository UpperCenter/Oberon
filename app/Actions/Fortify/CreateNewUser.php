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
	 * @param  array  $input
	 * @return \App\Models\User
	 */
	public function create(array $input)
	{
		Validator::make($input, [
			'name' => ['required', 'string', 'max:255'],
			'email' => [
				'required',
				'string',
				'email',
				'max:255',
				'unique:users',
			],
			'username' => ['required', 'string', 'max:32'],
			'password' => $this->passwordRules(),
			'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature()
				? ['required', 'accepted']
				: '',
			'role_id' => ['required'],
			'student_id' => ['required', 'min:8', 'max:8'],
		])->validate();

		return User::create([
			'name' => $input['name'],
			'email' => $input['email'],
			'username' => $input['username'],
			'password' => Hash::make($input['password']),
			'role_id' => $input['role_id'],
			'student_id' => $input['student_id'] ?? null,
			'lecturer_pass' => $input['lecturer_pass'] ?? null,
		]);
	}
}
