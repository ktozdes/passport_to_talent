<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $fillable = ['name', 'website', 'city', 'bio', 'state_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
