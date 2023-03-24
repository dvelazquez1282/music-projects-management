<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Facades\Request;

class ProjectCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $elementArray = parent::toArray($request);
        $result = [
            'elements' =>  $elementArray,
            'totalElements' => count($elementArray),
        ];
        if(Request::has('page')) {
            $result['currentPage'] = intval(Request::get('page'));
            $result['totalElements'] = Request::get('totalElements');
        }
        return $result;

    }

}
