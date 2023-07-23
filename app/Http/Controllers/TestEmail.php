<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMessage;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

final class TestEmail extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Mail from Local environment',
            'body' => 'This is for testing email using smtp.',
        ];

        Log::info(env("APP_NAME"). " => queue name: " . env("DEFAULT_QUEUE_NAME", "default"));
        $message = (new WelcomeMessage($mailData))
            ->onQueue(env("DEFAULT_QUEUE_NAME", "default"));

        Mail::to('maikel1370@gmail.com')->queue($message);
        
        return redirect()->back()->with('message', __("Email has been sent!"));
    }
}
