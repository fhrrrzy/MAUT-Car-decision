<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use App\Models\Car;
use Yajra\DataTables\Facades\DataTables;
use RealRashid\SweetAlert\Facades\Alert;

class CarController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $cars = Car::select([
                'id',
                'name',
                'age',
                'price',
                'kilometer_used',
                'condition',
                'fuel_efficiency',
                'fuel_type',
                'safety_measurement',
                'warranty_showroom',
                'warranty_store',
                'type'
            ]);
            
            return DataTables::of($cars)
                ->addColumn('action', function ($car) {
                    $editUrl = route('dashboard.cars.edit', $car->id);
                    $deleteUrl = route('dashboard.cars.destroy', $car->id);
                    $detailsUrl = route('dashboard.cars.show', $car->id);
    
                    return '<a href="' . $detailsUrl . '" class="btn btn-sm btn-info">Details</a>
                            <a href="' . $editUrl . '" class="btn btn-sm btn-primary">Edit</a>
                            <button class="btn btn-sm btn-danger delete-btn" data-url="' . $deleteUrl . '">Delete</button>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    
        return view('dashboard.cars.index');
    }

    public function create()
    {
        return view('dashboard.cars.create');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string',
                'price' => 'required|integer',
                'age' => 'required|integer',
                'kilometer_used' => 'required|integer',
                'condition' => 'required|integer|min:1|max:10',
                'fuel_efficiency' => 'required|integer',
                'fuel_type' => 'required|string|in:bensin,diesel,elektrik',
                'safety_measurement' => 'required|integer|min:1|max:10',
                'warranty_showroom' => 'required|date',
                'warranty_store' => 'required|date',
                'type' => 'required|string|in:manual,auto,semi-auto',
                'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            DB::beginTransaction();

            $car = new Car();
            $car->fill($validatedData);

            // Handle image upload
            if ($request->hasFile('image')) {
                $imageName = $request->image->store('images/cars');
                $car->image = $imageName;
            }

            $car->save();

            DB::commit();

            Alert::success('Success', 'Car added successfully!')->showConfirmButton('OK', '#3085d6');

            return redirect()->route('dashboard.cars.index');
        } catch (ValidationException $e) {
            DB::rollBack();
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            DB::rollBack();
            Alert::error('Error', 'Failed to add car: ' . $e->getMessage())->showConfirmButton('OK', '#e3342f');
            return redirect()->back()->withInput();
        }
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);
        return view('dashboard.cars.show', compact('car'));
    }

    public function edit($id)
    {
        $car = Car::findOrFail($id);
        return view('dashboard.cars.edit', compact('car'));
    }

    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string',
                'price' => 'required|integer',
                'age' => 'required|integer',
                'kilometer_used' => 'required|integer',
                'condition' => 'required|integer|min:1|max:10',
                'fuel_efficiency' => 'required|integer',
                'fuel_type' => 'required|string|in:bensin,diesel,elektrik',
                'safety_measurement' => 'required|integer|min:1|max:10',
                'warranty_showroom' => 'required|date',
                'warranty_store' => 'required|date',
                'type' => 'required|string|in:manual,auto,semi-auto',
                'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            DB::beginTransaction();

            $car = Car::findOrFail($id);
            $car->fill($validatedData);

            // Handle image upload
            if ($request->hasFile('image')) {
                $imageName = $request->image->store('images/cars');
                $car->image = $imageName;
            }

            $car->save();

            DB::commit();

            Alert::success('Success', 'Car updated successfully!')->showConfirmButton('OK', '#3085d6');

            return redirect()->route('dashboard.cars.index');
        } catch (ValidationException $e) {
            DB::rollBack();
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            DB::rollBack();
            Alert::error('Error', 'Failed to update car: ' . $e->getMessage())->showConfirmButton('OK', '#e3342f');
            return redirect()->back()->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $car = Car::findOrFail($id);
            $car->delete();

            DB::commit();

            Alert::success('Success', 'Car deleted successfully!')->showConfirmButton('OK', '#3085d6');

            return redirect()->route('dashboard.cars.index');
        } catch (\Exception $e) {
            DB::rollBack();
            Alert::error('Error', 'Failed to delete car: ' . $e->getMessage())->showConfirmButton('OK', '#e3342f');
            return redirect()->back();
        }
    }
}
