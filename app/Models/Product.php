<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $product_id
 * @property $name_product
 * @property $price
 * @property $product_image
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
  protected $primaryKey = 'product_id';

    static $rules = [
		'product_id' => 'required',
		'name_product' => 'required',
		'price' => 'required',
		'product_image' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['product_id','name_product','price','product_image'];



}
