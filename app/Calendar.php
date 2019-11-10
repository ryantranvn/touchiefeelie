<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Calendar extends Model
{
    use SoftDeletes;
    protected $table = 'calendars';
    protected $primaryKey = 'calendar_id';
    protected $dates = ['deleted_at'];

    public function scopeWithSort($query, $sorting, $by)
    {
        return $query->orderBy($sorting, $by);
    }
}
