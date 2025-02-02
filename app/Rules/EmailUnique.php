<?php

namespace App\Rules;

use App\Models\User;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Auth;

class EmailUnique implements ValidationRule
{
    public function __construct(private User $user)
    {}

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if ($value !== $this->user->email) {
            $users = User::all();

            if ($users->contains('email', '=', $value)) {
                $fail('ایمیل در سیستم ثبت شده است');
            }
        }
    }
}
