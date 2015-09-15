<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = ['category_id', 'name', 'slug', 'adulterant', 'diseases', 'summaries', 'anatomical_context', 'genes', 'detection', 'bibliography'];
}
