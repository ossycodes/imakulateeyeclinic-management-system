<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'fullname';
    }

    public function relatedfiles()
    {
        return $this->hasMany(Relatedfile::class);
    }

    public function register(array $patient)
    {
        return $this->create($patient);
    }

    public function registered()
    {
        return $this->all();
    }

    public function updateDetails(array $details)
    {
        return $this->update($details);
    }

    public function createRecord(array $details)
    {
        return $this->relatedfiles()->create($details);
    }
}
