<?php

namespace App\Jobs;

use App\Mail\NewCompanyNotification;
use App\Models\Company;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNewCompanyNotification implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    protected $company;

    public function __construct(Company $company)
    {
        $this->company = $company;
    }

    public static function dispatch($company)
    {
    }

    public function handle()
    {
        Mail::to('email@example.com')->send(new NewCompanyNotification($this->company));
    }
}
