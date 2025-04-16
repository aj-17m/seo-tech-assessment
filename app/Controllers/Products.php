<?php namespace App\Controllers;

use App\Models\{CategoryModel, ProductModel};
use CodeIgniter\Exceptions\PageNotFoundException;

class Products extends BaseController
{
    public function category($slug)
    {
        $catModel = new CategoryModel();
        $prodModel = new ProductModel();
        
        $category = $catModel->where('slug', $slug)->first();
        
        if (!$category) {
            throw PageNotFoundException::forPageNotFound();
        }
        
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
        
        if (!$product) {
            throw PageNotFoundException::forPageNotFound();
        }
        
        // SEO Meta Tags
        $data = [
            'meta_title' => $product['title'] . ' | Your Site Name',
            'meta_description' => substr(strip_tags($product['description']), 0, 160),
            'product' => $product
        ];
        
        return view('product_detail', $data);
    }
}