<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $table = 'posts';
    protected $primaryKey = 'post_id';
    protected $dates = ['deleted_at'];

    public function scopeWithSort($query, $sorting, $by)
    {
        return $query->orderBy($sorting, $by);
    }
}
