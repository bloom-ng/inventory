<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemLocationStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'item_id' => ['required', 'max:255'],
            'department_id' => ['required', 'max:255'],
            'location_id' => ['required', 'max:255'],
            'quantity' => ['required', 'numeric'],
            'description' => ['required', 'max:255', 'string'],
        ];
    }
}
