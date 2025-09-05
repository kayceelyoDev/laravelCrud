<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Http\FormRequest;

class AuthRegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password'=>'required|min:6',
        ];
    }

    public function validated($key = null, $default = null){
        $data = parent::validated();
        
        if(isset($data['password'])){
            $data['password'] = Hash::make($data['password']);
        };
        return $data;
    }
}
