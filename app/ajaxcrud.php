<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ajaxcrud extends Model
{
    protected $fillable = [
	'user_id','name','gender','address','number',
    ];
}
