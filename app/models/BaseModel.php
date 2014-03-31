<?php

use Carbon\Carbon;

class BaseModel extends Elequent{

   // stuff goes here

    // Getter and setter for the created at
    public function getCreatedAtAttribute($value){

    	$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
    	return $utc->setTimezone('America/Chicago');
    }

    // Getter and setter for the updated at
    public function getUpdatedAtAttribute($value){

    	$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
    	return $utc->setTimezone('America/Chicago');
    }
}