<?php

namespace App\Models\Admin\Product;

use Illuminate\Database\Eloquent\Model;
// use App\Models\Admin\ProductAccessories\Brand;

class Product extends Model
{
	protected $fillable = ['product_code', 'title', 'slug','description', 'key_features', 'type_id','category_id', 'sub_category_id', 'brand_id','barcode', 'price'];
    public static function generateProductCode()
    {
        return (string)rand(1111, 9999) . time();
    }

    public function images()
    {
    	return $this->hasMany('App\Models\Admin\Product\ProductImage');
    }

    public function sizes()
    {
        return $this->hasMany('App\Models\Admin\Product\ProductSize');
    }

    public function colors()
    {
        return $this->hasMany('App\Models\Admin\Product\ProductColor');
    }

    public function brand()
    {
    	return $this->belongsTo('App\Models\Admin\ProductAccessories\Brand\Brand');
    }

    public function category()
    {
    	return $this->belongsTo('App\Models\Admin\ProductAccessories\Category\Category');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\Admin\ProductAccessories\Type\Type');
    }

    public function subCategory()
    {
    	return $this->belongsTo('App\Models\Admin\ProductAccessories\SubCategory\SubCategory');
    }
}
