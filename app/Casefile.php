<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casefile extends Model
{
    protected $guarded = [];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
