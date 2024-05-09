<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    public function sender()
    {
        return $this->belongsTo(Sender::class);
    }
}