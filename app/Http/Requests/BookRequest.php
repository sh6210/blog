<?php

namespace App\Http\Requests;

use App\Rules\ValidateAllUploadedFiles;
use App\Utility\ProjectConstants;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'url' => 'nullable|string|max:255',
            'is_at_home' => ['nullable', Rule::in(array_keys(ProjectConstants::$yesNo))],
            'cover_image' => ['nullable', new ValidateAllUploadedFiles(ProjectConstants::$uploadAbleImageTypes)],
            'writer_id' => 'nullable|exists:writers,id',
            'editor_id' => 'nullable|exists:editors,id',
            'publisher_id' => 'nullable|exists:publishers,id',
            'published_at' => 'nullable|string:max:12',
            'status' => ['nullable', Rule::in(array_keys(ProjectConstants::$statuses))],
            'file' => ['nullable', new ValidateAllUploadedFiles(ProjectConstants::PDF)],
            'description' => 'nullable'
        ];
    }
}
