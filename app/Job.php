<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
	protected $fillable = ['position', 'job_description', 'status', 'degree_id', 'education_description', 'immigration_offering_id', 'skills', 'skills_description', 'employment_industry', 'salary_range', 'salary_description', 'offered_benefit', 'user_id', 'company_id'];
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function degree()
    {
        return $this->belongsTo('App\Degree');
    }
    public function immigrationOffering()
    {
        return $this->belongsTo('App\Immigration');
    }
    public function individuals()
    {
        return $this->belongsToMany('App\Individual');
    }

}
