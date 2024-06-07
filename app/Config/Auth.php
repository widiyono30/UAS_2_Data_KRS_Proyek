<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login()
    {
        // Proses login
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Misalnya, Anda memiliki username dan password tetap
        $validUsername = 'admin';
        $validPassword = 'password';

        if ($username === $validUsername && $password === $validPassword) {
            // Login berhasil
            $session = session();
            $session->set('isLoggedIn', true);

            return redirect()->to(base_url('krs/tambah'));
        } else {
            // Login gagal
            return redirect()->back()->withInput()->with('error', 'Username atau password salah');
        }
    }

    public function logout()
    {
        // Proses logout
        $session = session();
        $session->remove('isLoggedIn');

        return redirect()->to(base_url('login'));
    }
}