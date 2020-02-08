<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    //
    protected $fillable = ['title', 'ja', 'user_id', 'wordclass'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
