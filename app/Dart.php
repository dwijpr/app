<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Markdown;

class Dart extends Model
{
    protected $fillable = [
        'title', 'body', 'cover',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function title() {
        return md_to_html_title($this->title);
    }

    public function body() {
        return md_to_html($this->body);
    }
}
