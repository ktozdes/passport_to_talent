<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filable extends Model
{
   	protected $fillable = ['src', 'name', 'resize_name', 'file_type', 'filable_id', 'filable_type'];

    public function object()
    {
        return $this->morphTo();
    }
}
