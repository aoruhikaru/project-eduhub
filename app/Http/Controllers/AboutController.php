<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Tentang EduFlow',
            'description' => 'Platform produktivitas akademik untuk mahaasiswa.'
        ];

        return view('about', $data);
    }
}
