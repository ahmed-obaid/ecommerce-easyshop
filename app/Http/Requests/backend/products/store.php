<?php

namespace App\Http\Requests\backend\products;

use Illuminate\Foundation\Http\FormRequest;

class store extends FormRequest
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

            'name' => ['required', 'string', 'max:100'],
            'desc' => ['required', 'string', 'max:255'],
            'cat_id' => ['required', 'integer', ],
            'type_id' => ['required', 'integer' ],
            'price' => ['required', 'integer', 'min:1' ],
            'size' => ['required', 'string', 'min:1' ],
            'image' => ['required', 'image', ],
            'status' => ['required', 'string', 'min:4' ],
        ];
    }
}
