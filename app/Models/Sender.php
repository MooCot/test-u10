<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Sender extends Model
{
    public function parcels()
    {
        return $this->hasMany(Parcel::class);
    }
}