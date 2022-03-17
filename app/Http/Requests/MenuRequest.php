<?php

namespace App\Http\Requests;

use App\Utility\ProjectConstants;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MenuRequest extends FormRequest
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
            'title' => 'required|max:255',
            'parent_menu_id' => 'nullable|exists:menus,id',
            'status' => ['nullable', Rule::in(array_keys(ProjectConstants::$statuses))],
            'description' => 'nullable',
            'url' => 'nullable|max:255',
            'play_list_link' => 'nullable|max:255',
            'icon' => 'nullable',
            'order' => 'nullable',
            'published_at' => 'nullable|string|max:12'
        ];
    }
}
