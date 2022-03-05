<?php

namespace App\Http\Requests;

use App\Rules\ValidateAllUploadedFiles;
use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
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
            'name' => 'required|max:255',
            'phone' => 'nullable|max:20',
            'email' => 'nullable|unique:authors,email,' . optional($this->author)->id,
            'image' => ['required', new ValidateAllUploadedFiles],
        ];
    }
}
