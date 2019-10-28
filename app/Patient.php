<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    //this is always called once the model is loaded
    public static function boot()
    {
        //listen to when the creating event is fired and then
        //create a slug for the patient from the fullname. 
        static::creating(function ($patient) {
            $patient->slug = str_slug($patient->fullname);
        });
    }

    public function casefiles()
    {
        return $this->hasMany(Casefile::class);
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
