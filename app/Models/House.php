<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class House extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function photos()
    {
        return $this->hasMany(HousePhoto::class);
    }
    
    public function facilities()
    {
        return $this->hasMany(HouseFacility::class);
    }

    public function interest()
    {
        return $this->hasMany(Interest::class);
    }

    public function mortgageRequests()
    {
        return $this->hasMany(MortgageRequest::class);
    }
}
