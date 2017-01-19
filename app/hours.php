<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hours extends Model
{
    protected $assignable = ['startTime', 'endTime'];

    public function user () {
        return $this->belongsTo('App\User');
    }
}
