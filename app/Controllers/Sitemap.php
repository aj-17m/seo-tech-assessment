<?php namespace App\Controllers;

use App\Models\{CategoryModel, ProductModel};

class Sitemap extends BaseController
{
    public function index()
    {
        $catModel = new CategoryModel();
        $prodModel = new ProductModel();
        
        $data = [
            'categories' => $catModel->findAll(),
            'products' => $prodModel->findAll(),
            'baseURL' => base_url()
        ];
        
        return $this->response->setXML(view('sitemap', $data));
    }
}