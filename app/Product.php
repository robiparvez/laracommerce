<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $timestamps = false;

	protected $fillable = ['name','description', 'size', 'iamage','category_id'];


	public function category()
	{
		$this->belongsTo(Category::class);
	}
}
