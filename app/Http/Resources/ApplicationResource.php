<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ApplicationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return array_merge( parent::toArray($request), [

            'hateoas' => array(

                'delete' => route('application.destroy', $this->id),
                'show' => route('application.show', $this->id),
                'attachment' => route('application.attachment', $this->id),
            )
        ]);
    }
}
