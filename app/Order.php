<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cart', 'total_price', 'address', 'phone_number', 'status',
    ];

	// Relationships

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

	public function orders()
    {
        return $this->hasMany('App\OrderList', 'order_id', 'id');
    }
}
