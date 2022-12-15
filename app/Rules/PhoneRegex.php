<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;

class PhoneRegex implements InvokableRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     * @return void
     */
    public function __invoke($attribute, $value, $fail)
    {
        $pattern = "/^([0-9\s\-\+\(\)]*)$/";

        if (preg_match($pattern, $value) !== 1) {
            $fail('The :attribute field must contain only a phone number.');
        }
    }
}
