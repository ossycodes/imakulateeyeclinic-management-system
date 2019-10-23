<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $guarded = [];

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
}
