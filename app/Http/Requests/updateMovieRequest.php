<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateMovieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title" => "required|string|max:255",
            "original_title" => "nullable|string|max:255",
            "nationality" => "nullable|string",
            "date" => "required|date",
            "vote" => "integer|decimal:1"
        ];
    }


    public function messages()
    {
        return [
            "title.required" => "This filed is required",
            "title.string" => "This filed must be a string",
            "title.max" => "This filed must have less then :max characters",
            "original_title.string" => "This field must be a string",
            "nationality.string" => "This field must be a string",
            "date.required" => "Date of publish is required",
            "date.date" => "This field must be a date",
            "vote.decimal" => "This field can have only :decimal decimal number"
        ];
    }
}
