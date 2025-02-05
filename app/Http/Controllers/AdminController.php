<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Product;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['product'] = Product::all();
        $data['member'] = Product::all();
        $data['category'] =Product::all();
        return view('admin.dashboard', $data);
    }
}
