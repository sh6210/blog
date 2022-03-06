<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'name' => 'required',
            'url' => 'nullable',
            'is_at_home' => 'nullable',
            'cover_image' => '',
            'writer_id' => 'nullable|exists:writers,id',
            'editor_id' => 'nullable|exists:editors,id',
            'published_at' => 'nullable',
            'status' => '',
        ];
    }
}
