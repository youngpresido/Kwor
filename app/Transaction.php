<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $guarded=['id'];

    public function accountR(){
        return $this->belongsTo('App\Account','receiver_id');
    }
    public function accountS(){
        return $this->belongsTo('App\Account','sender_id');
    }
}
