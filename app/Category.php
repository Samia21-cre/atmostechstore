<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'name', 'parent_id','slug','desc'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);    }
}
