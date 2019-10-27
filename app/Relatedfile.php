<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relatedfile extends Model
{
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    protected $guarded = [];

    public function updateRecord(string $record) {
        return $this->update([
            'record' => $record
        ]);
    }
}
