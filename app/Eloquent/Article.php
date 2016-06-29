<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $tables = 'artcles';
    protected $fillables = ['title', 'content'];
}
