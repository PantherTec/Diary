<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
protected $fillable = [
        'Date','Title','story','user_id',
    ];

}
