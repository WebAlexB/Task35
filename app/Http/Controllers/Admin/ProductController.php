<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function create()
    {
        return view('admin/products/create');
    }
    public function store(Request $request)
    {
        return view('admin/products/store');
    }
}
