<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class DashboardController extends Controller
{
    public function index()
    {
        // Count all cars
        $carCount = Car::count();

        // Return the view with car count
        return view('dashboard.dashboard.index', ['carCount' => $carCount]);
    }
}
