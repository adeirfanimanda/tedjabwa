<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Installment extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    public function mortgageRequest()
    {
        return $this->belongsTo(MortgageRequest::class);
    }
}
