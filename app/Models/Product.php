<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Product extends Model
{
    use HasFactory;
    protected $fillable=[  
    'name',
    'title',
    'status',
    'description',
    'price',
    'qty',
    'discounted_price',
    'discount',
    'image1',
    'image2',
    'image3',
    'category_id'];

    public function category()
    {
      return  $this->belongsTo(Category::class);
    }
}