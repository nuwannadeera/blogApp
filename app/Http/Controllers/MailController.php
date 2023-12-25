<?php

namespace App\Http\Controllers;

use App\Mail\myNotification;
use App\Models\Post;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    function sendMailOnPost(Post $post) {
            // Create an instance of your Mailable and pass the data
            $mailData = new myNotification($post);

            // Send the email
            Mail::to($post->author)->send($mailData);
    }
}
