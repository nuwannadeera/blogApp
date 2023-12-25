<?php

namespace App\Mail;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class myNotification extends Mailable {
    use Queueable, SerializesModels;

    public $post;
    public $comment;

    /**
     * Create a new message instance.
     * @param Post $post
     * @param Comment $comment
     */
    public function __construct(Post $post, Comment $comment) {
        $this->post = $post;
        $this->comment = $comment;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope {
//        return new Envelope(
//            subject:'New Comment Notification',
//        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content {
        return new Content(
            view: 'mail.viewMail'
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array {
        return [];
    }

//    public function build() {
//        return $this->view('Mail.myNotification')
//            ->subject('New Comment on Your Post')
//            ->with(['post' => $this->post, 'comment' => $this->comment]);
//    }
}
