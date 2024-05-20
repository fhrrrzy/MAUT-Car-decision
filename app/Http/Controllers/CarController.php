<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use App\Models\Car;
use Yajra\DataTables\Facades\DataTables;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon; // Add this line to import the Carbon class

class CarController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $cars = Car::select([
                'id',
                'uuid',
                'name',
                'price',
                'kilometer_used',
                'fuel_efficiency',
                'fuel_type',
                'warranty_showroom',
                'type',
                'first_registration_date', // Ensure this field is included
            ])->orderBy('created_at', 'desc')->get(); // Order by created_at in descending order
    
            return DataTables::of($cars)
                ->editColumn('warranty_showroom', function ($car) {
                    $warrantyDate = Carbon::createFromFormat('Y-m-d', $car->warranty_showroom);
                    $now = Carbon::now();
    
                    if ($warrantyDate->isPast()) {
                        return '<span class="text-danger">' . $warrantyDate->toDateString() . '</span>';
                    }
    
                    return '<span class="text-success">' . $warrantyDate->toDateString() . '</span>';
                })
                ->addColumn('usage_age', function ($car) {
                    return $car->usage_age;
                })
                ->rawColumns(['warranty_showroom'])
                ->make(true);
        }
    
        return view('dashboard.cars.index');
    }    
}