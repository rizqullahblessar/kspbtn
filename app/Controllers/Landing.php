<?php

namespace App\Controllers;

class Landing extends BaseController
{
    public function index()
    {
        return view('landing/home');
    }

    public function register()
    {
        return view('landing/register');
    }

    public function submitContact()
    {
        $validation = \Config\Services::validation();
        
        $validation->setRules([
            'name' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'phone' => 'required|min_length[10]',
            'message' => 'required|min_length[10]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Here you can add email sending or database storage
        // For now, we'll just return success
        return redirect()->to('/')->with('success', 'Terima kasih! Pesan Anda telah terkirim.');
    }

    public function submitRegistration()
    {
        $validation = \Config\Services::validation();
        
        $validation->setRules([
            'full_name' => 'required|min_length[3]',
            'id_number' => 'required|min_length[16]|max_length[16]',
            'phone' => 'required|min_length[10]',
            'email' => 'required|valid_email',
            'address' => 'required|min_length[10]',
            'occupation' => 'required',
            'monthly_income' => 'required',
            'initial_deposit' => 'required|numeric'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Here you can add database storage
        // For now, we'll just return success
        return redirect()->to('/register')->with('success', 'Pendaftaran berhasil! Kami akan menghubungi Anda segera.');
    }
}
