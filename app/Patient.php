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

    /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    public function setDateofbirthexceptyearAttribute()
    {
        $dm = explode('-', $this->dateofbirth);
        $month = $dm[1];
        $day = $dm[2];
        $format = '%s-%s';
        $this->attributes['dateofbirthexceptyear'] =  sprintf($format, $month, $day);
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

    /**
     * Get the hascasefile flag for the user.
     *
     * @return bool
     */
    public function getHasCasefileAttribute()
    {
        if ($this->casefile) {
            return $this->casefile->exists();
        }
        return false;
    }

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['has_casefile'];

    public function casefile()
    {
        return $this->hasOne(Casefile::class);
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
