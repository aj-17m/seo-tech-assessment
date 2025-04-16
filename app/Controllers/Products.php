<?php namespace App\Controllers;

use App\Models\{CategoryModel, ProductModel};

class Products extends BaseController
{
    public function category($slug)
    {
        $catModel = new CategoryModel();
        $prodModel = new ProductModel();
        
        $category = $catModel->where('slug', $slug)->first();
        $products = $prodModel->where('category_id', $category['id'])->findAll();
        
        $data = [
            'category' => $category,
            'products' => $products
        ];
        
        return view('category', $data);
    }

    public function detail($slug)
    {
        $model = new ProductModel();
        $product = $model->where('slug', $slug)->first();
        
        // SEO Meta Tags
        $data = [
            'meta_title' => $product['title'] . ' | Your Site Name',
            'meta_description' => substr(strip_tags($product['description']), 0, 160),
            'product' => $product
        ];
        
        return view('product_detail', $data);
    }
}