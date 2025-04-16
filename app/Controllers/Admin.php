<?php namespace App\Controllers;

class Admin extends BaseController
{
    public function login()
    {
        return view('admin/login');
    }

    public function authenticate()
    {
        // Simple authentication (not secure for production)
        if($this->request->getPost('username') === 'admin' && 
           $this->request->getPost('password') === 'password') {
            session()->set('admin_logged_in', true);
            return redirect()->to('/admin/categories');
        }
        return redirect()->back()->withInput()->with('error', 'Invalid credentials');
    }

    public function logout()
    {
        session()->remove('admin_logged_in');
        return redirect()->to('/admin/login');
    }
}