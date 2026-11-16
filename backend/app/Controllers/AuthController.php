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

        return redirect()->to('/admin/dashboard');
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login');
    }
}
