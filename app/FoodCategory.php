<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_name',
    ];

	// Relationship

	public function food()
    {
        return $this->hasMany('App\Food', 'food_category_id', 'id');
    }
}
