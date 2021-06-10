<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }

    public function about() {
        $names = [
            'Adrian', 'Abel', 'Arvin', 'Jasmin'
        ];

        return view('about', [
            'names' => $names
        ]);
    }

    public function about_us($name) {
        $data = [
            'arvin' => 'carlo cris'
        ];
        return view('about', [
            'name' => $data[$name] ?? 'the name does not exist'
        ]);
    }
}
