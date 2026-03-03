<?php

namespace App\Jobs;

use App\Models\Job;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable; // this
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels; // this as well, plural

//use Illuminate\Foundation\Queue\Queueable;
//use Illuminate\Foundation\Bus\Dispatchable; // this



class TranslateJob implements ShouldQueue
{
    use Dispatchable, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(public Job $joblisting)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        logger('Send Email.');
    }
}