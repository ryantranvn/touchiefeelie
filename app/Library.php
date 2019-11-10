<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Library extends Model
{
    use SoftDeletes;
    protected $table = 'libraries';
    protected $primaryKey = 'library_id';
    protected $dates = ['deleted_at'];

    public function scopeWithSort($query, $sorting, $by)
    {
        return $query->orderBy($sorting, $by);
    }
}
