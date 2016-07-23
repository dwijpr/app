<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Markdown;

class Dart extends Model
{
    protected $fillable = [
        'title', 'body',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function body() {
        return Markdown::convertToHtml($this->body);
    }
}
