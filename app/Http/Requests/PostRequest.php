<?php

namespace App\Http\Requests;

use App\Repositories\PostRepository;
use App\Utility\ProjectConstants;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostRequest extends FormRequest
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
            'content' => 'nullable',
            'category_id' => 'nullable|exists:categories,id',
            'author_id' => 'nullable|exists:authors,id',
            'featured_image' => 'nullable',
            'type' => 'nullable', Rule::in((new PostRepository())->getTypes()->toArray()),
            'is_at_home' => 'nullable', Rule::in(ProjectConstants::$yesNo),
            'is_at_slider' => 'nullable', Rule::in(ProjectConstants::$yesNo),
            'allow_comment' => 'nullable', Rule::in(ProjectConstants::$yesNo),
            'status' => 'nullable', Rule::in(ProjectConstants::$statuses),
        ];
    }
}
