<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{

	protected $fillable= array('title');

    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
}
