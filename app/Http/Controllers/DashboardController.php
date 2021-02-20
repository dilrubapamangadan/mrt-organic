<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class DashboardController extends Controller
{
    public function index()
    {
        $data['products'] = Product::all()->count();
        $data['category'] = Category::all()->count();
        $data['enquiry']  = 0;
        return $data;
    }
}
