<?php

namespace App\Http\Requests;

use App\Rules\MobileRule;
use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:2|string',
            'last_name' => 'required|min:2|string',
            'gender' => 'required',
            'password'=>'required',
            'birth_day' => 'required|date',
            'mobile' => ['required', new MobileRule],
            'email' => 'required|email|unique:users'
        ];
    }
}
