<?php

namespace App\Http\Requests\Device;

use Illuminate\Foundation\Http\FormRequest;

class DeviceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'type_name' => 'required|string',
            'class_name' => '',
            'brand_name' => 'required|string',
            'model_name' => 'required|string',
            'wh_value' => '',
            'volt_value' => '',
            'version_name' => '',
            'color_name' => '',
            'addition_1' => '',
            'addition_2' => '',
            'addition_3' => '',
        ];
    }
}
