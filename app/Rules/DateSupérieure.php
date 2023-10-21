<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class DateSupérieure implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // Votre logique de validation personnalisée ici
        return strtotime($value) > time(); // Vérifie si la date est supérieure à la date actuelle
    }


    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'La date doit être supérieure à la date actuelle.';
    }
}
