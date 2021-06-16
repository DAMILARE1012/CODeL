<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    protected $fillable = ['payment_list_id','amount', 'reference', 'status', 'user_id'];
}
