<?php

namespace Modules\ITicke\Transformers;

use Illuminate\Http\Resources\Json\Resource;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class TicketTransformer extends Resource
{
    public function toArray($request)
    {

        $data = [
          'id' => $this->id,
          'subject' => $this->subject ?? '',
          'status'=>iticke__getStatus()->get($this->status),
          'priority'=>iticke__getPriority()->get($this->priority),
          'type'=>iticke__getType()->get($this->type),
          'message' => $this->message ?? '',
          'full_name' => $this->full_name ?? '',
          'email' => $this->email ?? '',
          'phone' => $this->phone ?? '',
          'createdAt' => $this->when($this->created_at, $this->created_at),
          'updatedAt' => $this->when($this->updated_at, $this->updated_at),
        ];

        return $data;
    }
}
