<?php

namespace Base\Component\Venue\Model;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'address1',
        'number',
        'extension',
        'zipcode',
        'city',
        'latitude',
        'longitude',
    ];
}
