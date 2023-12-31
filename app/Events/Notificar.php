<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
// Evento para notificar que jugador le pico primero y se muestre al admin
class Notificar implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $notificacion;
    /**
     * Create a new event instance.
     */
    public function __construct( $notificacion)
    {
        //
        $this->notificacion = $notificacion;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn()
    {
        // : array
        // return [
        //     new PrivateChannel('channel-name'),
        // ];
        return new Channel('notificacion');
    }
}
