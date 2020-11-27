<?php
/**
 * @author thanh_tuan
 * @since  2020-11-26
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use App\Mail\Reminder;

class UserController extends Controller
{
    /**
     * Send Reminder E-mail Example
     *
     * @return void
     */
    public function sendMail()
    {
        $to_email = 'nthanhtuan2015@gmail.com';

        Mail::to($to_email)->send(new Reminder);
        return "E-mail has been sent Successfully";
    }
}