<?php

namespace App\Http\Requests;

use App\Utility\ProjectConstants;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:2|max:30',
            'email' => 'required|email|max:100',
            'password' => request()->method === 'PUT' ? 'nullable|confirmed|max:12' : 'required|confirmed|max:12',
            'role' => 'required|exists:roles,id',
            'status' => ["nullable", Rule::in(array_keys(ProjectConstants::$statuses))]
        ];
    }
}
