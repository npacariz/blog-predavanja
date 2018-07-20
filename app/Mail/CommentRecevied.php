<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Post;

class CommentRecevied extends Mailable
{
    use Queueable, SerializesModels;


    public $post = null;
    public $comments = null;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Post $post, $comments)
    {
        $this->post = $post;
        $this->comments = $comments;
     
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.comment-received');
    }
}
