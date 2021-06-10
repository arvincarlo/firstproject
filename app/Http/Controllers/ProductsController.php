<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {

        return view('products.index');

        // $title = "Welcome to my Laravel 8 course";
        // $description = "Created by Arvin";

        // $data = [
        //     'productOne' => 'Iphone',
        //     'productTwo' => 'Samsung',
        //     'productThree' => 'Xiaomi'
        // ];

        // // Compact method
        // return view('products.index', 
        // compact('data', 'title', 'description'));

        // With method
        // return view('products.index')->with('title', $title);
        // return view('products.index')->with('data', $data);

        // Directly in the view
        // return view('products.index', [
        //     'data' => $data
        // ]);

    }

    public function about() {
        return 'About Us Page';
    }

    public function show($id) {
        $data = [
            'iPhone' => 'Iphone',
            'samsung s10' => 'Samsung',
            'mi' => 'Xiaomi'
        ];

        return view('products.index', [
            'products' => $data[$id] ?? 'Product ' . $id . ' does not exists.'
        ]);
    }
}

