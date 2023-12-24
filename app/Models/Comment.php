<?php

namespace App\Models;

use App\Mail\myNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Comment extends Model {
    /**
     * The attributes of the table
     *
     */
    protected $table = 'comments';
    protected $primaryKey = 'id';
    protected $fillable = ['post_id', 'comment'];

    /**
     * Get the post that owns the comments.
     */
    public function post() {
        return $this->belongsTo(Post::class);
    }

    use HasFactory;

    public static function boot() {
        parent::boot();

        static::created(function ($comment) {
            $post = $comment->post;
            $authorEmail = $post->author;

            Mail::to($authorEmail)->send(new myNotification($post, $comment));
        });
    }
}
