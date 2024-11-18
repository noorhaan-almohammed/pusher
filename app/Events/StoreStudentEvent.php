<?php

namespace App\Events;

use App\Models\Student;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;


class StoreStudentEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $student;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Student $student)
    {
        $this->student = $student;
    }

    /**
     * Returns the event's broadcast name.
     *
     * @return string The broadcast name.
     */
    public function broadcastAs(): string
    {

        return 'student_created';
    }

    /**
     * Returns the data to be broadcasted along with the event.
     *
     * @return array The data to be broadcasted.
     *
     * The returned array should contain the necessary data to be sent to the client.
     * In this case, it includes the student model instance.
     */
    public function broadcastWith(): array
    {
        return [
            'data'  => $this->student,
        ];
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new Channel('students'),
        ];
    }
}
