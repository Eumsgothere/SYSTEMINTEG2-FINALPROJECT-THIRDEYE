<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function authenticate()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $users = new UserModel();

        $user = $users->where('email', $email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Invalid credentials');
        }

        if (!password_verify($password, $user['password'])) {
            return redirect()->back()->with('error', 'Invalid credentials');
        }

        session()->set([
            'user_id' => $user['id'],
            'email' => $user['email'],
            'role' => $user['role'],
            'logged_in' => true,
        ]);

        // ROLE CHECK
        if ($user['role'] === 'admin') {
            return redirect()->to('/admin/dashboard');
        }

        return redirect()->to('/');
    }
    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login');
    }
    public function signup()
    {
        return view('auth/signup');
    }

    public function register()
    {
        $users = new \App\Models\UserModel();

        $password = $this->request->getPost('password');
        $confirmPassword = $this->request->getPost('confirm_password');

        if ($password !== $confirmPassword) {
            return redirect()->back()->with('error', 'Passwords do not match');
        }

        $users->insert([
            'first_name' => $this->request->getPost('first_name'),
            'last_name'  => $this->request->getPost('last_name'),
            'email'      => $this->request->getPost('email'),
            'password'   => password_hash($password, PASSWORD_DEFAULT),
            'role'       => 'customer'
        ]);

        return redirect()->to('/login')
            ->with('success', 'Account created successfully.');
    }
}
