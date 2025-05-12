<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
{
    /**
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
        ];
    }

    /**     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'The task title is mandatory.',
            'title.string' => 'The task title must be text.',
            'title.max' => 'The task title cannot exceed 255 characters.',
        ];
    }
}
