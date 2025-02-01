<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        try {
            $this->validateUpdate($request);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->with('tab', 'account');
        }

        if ((!is_null($request->current_password)) && (!is_null($request->new_password))) {
            if (!$this->canChangePassword($request->user(), $request->current_password)) {
                return back()->withErrors(['current_password' => 'رمز عبور فعلی صحیح نمی باشد'])->with('tab', 'account')->with('dashboard', false);
            }

            $this->changePassword($request->user(), $request->new_password);
        }

        $request->user()->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
        ]);

        return back()->with('tab', 'account')->with('success', '')->with('dashboard', false);
    }

    private function validateUpdate(Request $request)
    {
        return $request->validate([
            'first_name' => ['required', 'min:3', 'max:255'],
            'last_name' => ['required', 'min:3', 'max:255'],
            'current_password' => [Rule::requiredIf(!is_null($request->new_password))],
            'new_password' => (!is_null($request->new_password)) ? [Password::defaults(), 'confirmed'] : [],
        ], [
            'new_password.string' => 'رمز عبور جدید معتبر نمی باشد'
        ]);
    }

    private function changePassword(User $user, $password) {
        $user->password = Hash::make($password);

        $user->save();
    }

    private function canChangePassword(User $user, $password) {
        return Auth::attempt(['email' => $user->email, 'password' => $password]);
    }

    public function edit()
    {
        return redirect()->route('dashboard')->with('tab', 'account')->with('dashboard', false);
    }
}
