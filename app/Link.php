<?php
namespace App;
class Link extends Model
{
	public function user()
	{
		return $this->belongsTo(User::class);
	}
    
}
