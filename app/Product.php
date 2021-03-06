<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public $timestamps = false;

	protected $fillable = ['name','price','description', 'size', 'image','category_id'];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function orders()
	{
		return $this->belongsToMany(Order::class);
	}
}
