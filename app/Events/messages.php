<?php

namespace App\Events;

use App\messageNumber;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class messages
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $number;
    public $message;
    
    public function __construct(messageNumber $number,$message)
    {
        $this->number=$number->telNo;
        $this->message=$message;
    }

}
