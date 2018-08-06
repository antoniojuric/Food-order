<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price', 'food_category_id', 'photo', 
    ];

	// Relationships

    public function category()
    {
        return $this->belongsTo('App\FoodCategory', 'food_category_id', 'id');
    }

	public function orders()
    {
        return $this->hasMany('App\OrderList', 'order_id', 'id');
    }
}
