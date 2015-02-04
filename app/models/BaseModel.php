<?php

use Carbon\Carbon;

Class BaseModel extends Eloquent
{	
	
	public function getCreatedAtAttribture($value)
	{

		$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
		return $utc->setTimezone('America/Chicago');
	}

	public function getUpdatedAtAttribture($value)
	{

		$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
		return $utc->setTimezone('America/Chicago');
	}


	// public function setTitleAttribute($value)
	// {
 //    	$this->attributes['title'] = upper($value);
	// }

}