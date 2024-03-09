<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class RedirectJob implements ShouldQueue
// {
//     use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

//     /**
//      * Create a new job instance.
//      */
//     public function __construct()
//     {
//         //
//     }

//     /**
//      * Execute the job.
//      */
//     public function handle(): void
//     {
//         //
//     }

{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $redir;

    /**
     * Create a new job instance.
     *
     * @param string $redir
     */
    public function __construct($redir)
    {
        $this->redir = $redir;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Here you can handle the redirection logic after receiving the transaction response
        // For example:
        if ($this->redir) {
            redirect('//meet.google.com/mkz-pkkf-ned');
        }
    }
}
