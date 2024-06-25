<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Customers;

class AdminController extends Controller
{
    public function index(){
       
        $movies =Movie::all();
        $customers=Customers::all();
        
        return view('admin.index', compact('movies', 'customers'));
    }
}
