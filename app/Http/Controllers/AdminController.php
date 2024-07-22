<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Customers;
use App\Models\Timeslots;

class AdminController extends Controller
{
    public function index(){
       
        $movies =Movie::all();
        $customers=Customers::all();
        $timeslots=Timeslots::all();
        
        return view('admin.index', compact('movies', 'customers'));
    }
}
