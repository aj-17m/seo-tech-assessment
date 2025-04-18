<?php namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\CategoryModel;

class Admin extends BaseController
{
    public function login()
    {
        return view('admin/login');
    }

    public function authenticate()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Simple hardcoded credentials (replace with database logic in production)
        $validUsername = getenv('ADMIN_USER') ?? 'admin';
        $validPassword = getenv('ADMIN_PASS') ?? 'password';

        if ($username === $validUsername && $password === $validPassword) {
            session()->set('admin_logged_in', true);
            return redirect()->to('/admin/dashboard');
        }

        return redirect()->back()->withInput()->with('error', 'Invalid credentials');
    }

    public function logout()
    {
        session()->remove('admin_logged_in');
        return redirect()->to('/admin/login');
    }

    public function dashboard()
    {
        $data = [
            'title' => 'Admin Dashboard',
            'stats' => [
                'products' => (new \App\Models\ProductModel())->countAll(),
                'categories' => (new \App\Models\CategoryModel())->countAll(),
            ],
        ];

        return view('admin/dashboard', $data);
    }
}
