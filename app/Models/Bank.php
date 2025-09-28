<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bank extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    public function interest()
    {
        return $this->hasMany(Interest::class);
    }
}
