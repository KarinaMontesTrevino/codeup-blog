<?php


class Post extends BaseModel {

    protected $table = 'posts';
    
    /**
    *  Define relationship to user
    */
    public function user()
	{
	    return $this->belongsTo('User');
	}
    
    /**
    *  Validation rules
    */
    public static $rules = array(
	    'title'      => 'required|max:100',
	    'body'       => 'required|max:10000'
	);
    
}
