<?php

namespace App\Events;

use App\Models\Resources;
use App\Services\ParserService;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AddResourceEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public string $title;
    public int $resource_id;
    public array $resData;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($resData, $title, $resource_id)
    {
        $this->title = $title;
        $this->resData = $resData;
        $this->resource_id = $resource_id;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
