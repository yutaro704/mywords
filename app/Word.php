<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    //
    protected $fillable = ['en', 'ja', 'user_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
