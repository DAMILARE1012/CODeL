<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credential extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    protected $fillable = ['passport','olevel1', 'olevel2', 'birth_certificate', 'other', 'user_id'];
}
