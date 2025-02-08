<?php

namespace App\Jobs;

use App\Mail\TestMail;
use App\Models\User;
use App\Notifications\TestNotification;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

class TestJob implements ShouldQueue
{
    use Queueable;
    public $user;
    /**
     * Create a new job instance.
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to('test@gmail.com')->send(new TestMail($this->user));
        $this->user->notify(new TestNotification($this->user));
    }
}
