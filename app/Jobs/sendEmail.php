<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;


use Mail;

use Illuminate\Http\Request;
use \App\Http\Controllers\Auth;
class sendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;



      protected  $user;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user)
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
       $userInfo=(array)$this->user;
      // dd($userInfo);
     Mail::send('mail.notifyMail', $userInfo, function($meg) use ($userInfo){
        $meg->to($userInfo['email']);
        $meg->subject('Reatched The specified Rate');
      });

    }
}
