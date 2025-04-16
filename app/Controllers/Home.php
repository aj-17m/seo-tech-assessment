<?php namespace App\Controllers;

use App\Models\CategoryModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new CategoryModel();
        $data['categories'] = $model->findAll();
        return view('home', $data);
    }
}