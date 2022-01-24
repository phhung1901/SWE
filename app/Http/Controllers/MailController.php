<?php

namespace App\Http\Controllers;

use App\Jobs\SendMail;
use App\Mail\TestMail;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function test()
    {
        for ($i = 0; $i < 10; $i++) {
            $sendEmailJob = new SendMail();
            dispatch($sendEmailJob);
        }
        return view('client.pages.mail');
    }
}
