<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateTaskRequest extends FormRequest
{
    /**
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'sometimes|string|max:255',
            'completed' => 'sometimes|boolean',
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.string' => 'The task title must be text.',
            'title.max' => 'The task title cannot exceed 255 characters.',
            'completed.boolean' => 'The completed status must be either true or false.',
        ];
    }
}
