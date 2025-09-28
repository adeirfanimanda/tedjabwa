<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Interest extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }

    public function house()
    {
        return $this->belongsTo(House::class);
    }
}
