<?php

namespace App\Http\Requests;

use App\Utility\ProjectConstants;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CommentRequest extends FormRequest
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
        if (request()->method === 'PUT') {
            return [
                'content' => 'required',
                'status' => 'required', Rule::in(ProjectConstants::$statuses)
            ];
        }

        return [
            'post_id' => 'required|exists:posts,id',
            'parent_comment_id' => 'nullable|exists:comments,id',
            'content' => 'required',
            'date_gmt' => 'nullable',
            'other_infos' => 'nullable',
            'status' => ['nullable', Rule::in(ProjectConstants::$statuses)]
        ];
    }
}
