<?php

class Post extends BaseModel
{
	protected $table = 'posts';

	public static $rules = 
	[
		'title'      => 'required|max:100',
		'body'       => 'required|max:10000'
	];

	public function setTitleAttribute($value)
	{
		$this->attributes['title'] = ucfirst($value);
	}

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function author()
	{
		return $this->belongsTo('User', 'user_id');
	}

}