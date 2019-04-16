<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{
    protected $fillable = ['firstname', 'lastname', 'middlename', 'bio', 'city', 'phone', 'education', 'education_description', 'immigration_status', 'immigration_seeking', 'skills', 'skills_description', 'employment_industry', 'previous_positions', 'residence_state', 'degree_id', 'major_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function residentState()
    {
        return $this->belongsTo('App\State', 'residence_state');
    }
    public function degree()
    {
        return $this->belongsTo('App\Degree');
    }
    public function major()
    {
        return $this->belongsTo('App\Major');
    }
}
