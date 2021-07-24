<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Enquiry;
class DashboardController extends Controller
{
    public function index()
    {
        $data['enquiry'] = Enquiry::all()->count();
        $data['products'] = Product::all()->count();
        $data['category'] = Category::all()->count();

        return $data;
    }
}
