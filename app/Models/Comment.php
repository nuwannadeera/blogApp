<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
