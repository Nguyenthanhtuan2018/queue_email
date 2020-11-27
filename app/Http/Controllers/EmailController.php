<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Mail\MailNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Redirect,Response,DB,Config;
use Mail;
class EmailController extends Controller
{
    /**
     * sendEmail
     *
     * @return mixed
     * @author thanh_tuan
     * @since  2020-11-26
     */
    public function sendEmail()
    {
        $emailJob = (new SendEmailJob())->delay(Carbon::now()->addSeconds(3));
        dispatch($emailJob);

        echo 'email sent';
    }
}