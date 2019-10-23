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
        return $this->update([
            'fullname' => 'ssssss',
            'parentname' => 'sssssssss'
        ]);
        return $this->update($details);
        // return $this->update([
        //     "fullname" => $details["fullname"],
        //     "parentname" => $details["parentname"],
        //     "address" => $details["address"],
        //     "occupation" => $details["occupation"],
        //     "phonenumber" => $details["phonenumber"],
        //     "alternativephonenumber" => $details["alternativephonenumber"],
        //     "nextofkin" => $details["nextofkin"],
        //     "dateofbirth" => $details["dateofbirth"],
        //     "cliniccardnumber" => $details["cliniccardnumber"],
        //   ]);
    }
}
