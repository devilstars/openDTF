<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'slug' => $this->slug,
            'text' => $this->text,
            'image' => $this->getFirstMediaUrl('image', 'thumb') ?? '#',
            'seo_title' => $this->seo_title,
            'seo_description' => $this->seo_description,
            'seo_keys' => $this->seo_keys,
        ];
    }
}
