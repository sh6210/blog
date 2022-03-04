<?php

namespace App\Http\Requests;

use App\Utility\ProjectConstants;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
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
            'description' => 'nullable',
            'parent_category_id' => 'sometimes|exists:categories,id' . optional($this->category)->id,
            'status' => 'required', Rule::in(ProjectConstants::$statuses)
        ];
    }
}
