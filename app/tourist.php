<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tourist extends Model
{
    public function getBodyAttribute($value)
    {
    	return ucfirst($value);
    }

    public function setBodyattribute($value)
    {
    	return $this->attributes['body'] = ucfirst($value);
    }

    public function getTitleAttribute($value)
    {
    	return ucfirst($value);
    }

    public function setTitleattribute($value)
    {
    	return $this->attributes['title'] = ucfirst($value);
    }

        public function getCountryAttribute($value)
    {
    	return ucfirst($value);
    }

    public function setCountryattribute($value)
    {
    	return $this->attributes['country'] = ucfirst($value);
    }

    public function getPlaceAttribute($value)
    {
    	return ucfirst($value);
    }

    public function setPlaceattribute($value)
    {
    	return $this->attributes['place'] = ucfirst($value);
    }
}
