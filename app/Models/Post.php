<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Dibuat dengan: php artisan make:model Post -m
class Post extends Model
{
    protected $fillable = ['title', 'body'];
}
