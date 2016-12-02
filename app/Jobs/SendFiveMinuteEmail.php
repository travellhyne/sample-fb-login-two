<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\StayedTooLong;
use App\User;

class SendFiveMinuteEmail implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    protected $user;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Log::debug('Attempting to send email.');
        if ($this->user) {
            if ($this->user->email && !$this->user->email_sent) {
                Mail::to($this->user->email)->send(new StayedTooLong());
                $this->user->email_sent = true;
                $this->user->save();
            }
        }
    }
}
