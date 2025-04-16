<?php namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $allowedFields = ['title', 'slug', 'description', 'price', 'features', 'category_id'];
}