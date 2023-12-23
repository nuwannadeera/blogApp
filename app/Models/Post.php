<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    /**
     * The attributes of the table
     *
     */
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'content', 'image'];

    /**
     * Get the comments record associated with the post.
     */
    public function comments() {
        return $this->hasMany(Comment::class);
    }

    use HasFactory;
}
