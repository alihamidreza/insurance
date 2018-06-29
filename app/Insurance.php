<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    protected $fillable = [
        'name',
        'number'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
