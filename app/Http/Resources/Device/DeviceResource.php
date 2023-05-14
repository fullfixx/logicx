<?php

namespace App\Http\Resources\Device;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DeviceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'type_name' => $this->type_name,
            'class_name' => $this->class_name,
            'brand_name' => $this->brand_name,
            'model_name' => $this->model_name,
            'wh_value' => $this->wh_value,
            'volt_value' => $this->volt_value,
            'version_name' => $this->version_name,
            'color_name' => $this->color_name,
            'addition_1' => $this->addition_1,
            'addition_2' => $this->addition_2,
            'addition_3' => $this->addition_3,
            'remark' => $this->remark,
        ];
    }
}
