<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Rules\EmailUnique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('panel.users.index', compact('users'));
    }

    public function edit(User $user)
    {
        return view('panel.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        if ($user->hasRoleByName('owner') || $user->hasRoleByName('admin')) {
            if (!($request->user()->hasRoleByName('owner') && (!$user->hasRoleByName('owner')))) {
                return back()->withErrors(['authorization' => 'شما سطح دسترسی کافی برای ویرایش کاربر مورد نظر را ندارید']);
            }
        }

        $this->validateUpdate($request, $user);

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;

        $user->save();

        if (!is_null($request->new_password)) {
            $this->changePassword($user, $request->new_password);
        }

        return back()->with('success', '');
    }

    private function validateUpdate(Request $request, User $user)
    {
        return $request->validate([
            'first_name' => ['required', 'min:3', 'max:255'],
            'last_name' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email', new EmailUnique($user)],
            'new_password' => (!is_null($request->new_password) ? [Password::defaults()] : []),
        ]);
    }

    private function changePassword(User $user, $password)
    {
        $user->password = Hash::make($password);

        $user->save();
    }

    public function create()
    {
        return view('panel.users.create');
    }

    public function store(Request $request)
    {
        $this->validateStore($request);

        $this->createUser($request->all());

        return redirect()->route('management.users.index')->with('success', '');
    }

    private function validateStore(Request $request)
    {
        return $request->validate([
            'first_name' => ['required', 'min:3', 'max:255'],
            'last_name' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);
    }
    
    private function createUser(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);
    }

    public function destroy(User $user)
    {
        if ($user->hasRoleByName('owner') || $user->hasRoleByName('admin')) {
            if (!(Auth::user()->hasRoleByName('owner') && (!$user->hasRoleByName('owner')))) {
                return back()->with(['error' => 'شما سطح دسترسی کافی برای حذف کاربر مورد نظر را ندارید'])->with('fail', '');
            }
        }

        $user->delete();

        return back()->with('success', '');
    }
}
