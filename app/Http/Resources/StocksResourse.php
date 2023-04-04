<?php

namespace App\Http\Resources;

use App\Models\Attiribute;
use App\Models\Value;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StocksResourse extends JsonResource
{

    public function toArray(Request $request): array
    {
        $result =  [
            'quantity'=>$this->quantity,

        ];
        $attributes = json_decode($this->attributes , true);
        foreach($attributes as $stockAttributes){
            $attribute = Attiribute::find($stockAttributes['attiribute_id']);
            $value = Value::find($stockAttributes['value_id']);
            $result[$attribute->name] = $value->name;
        }
        return $result;
    }
}
