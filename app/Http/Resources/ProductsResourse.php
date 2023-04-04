<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductsResourse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' =>$this->id,
            'name'=>$this->name,
            'price'=> $this->price,
            'desc'=>$this->desc,
            'category'=> $this->category->name,
            'inventory'=> StocksResourse::collection($this->stocks)
        ];
    }
}
