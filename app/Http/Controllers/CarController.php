<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('dashboard.car.index', compact('cars'));
    }

    public function create()
    {
        return view('dashboard.car.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
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
            $car->name = $request->name;
            $car->price = $request->price;
            $car->age = $request->age;
            $car->kilometer_used = $request->kilometer_used;
            $car->condition = $request->condition;
            $car->fuel_efficiency = $request->fuel_efficiency;
            $car->fuel_type = $request->fuel_type;
            $car->safety_measurement = $request->safety_measurement;
            $car->warranty_showroom = $request->warranty_showroom;
            $car->warranty_store = $request->warranty_store;
            $car->type = $request->type;

            // Handle image upload
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = $car->uuid . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images/cars'), $imageName);
                $car->image = 'images/cars/' . $imageName;
            }

            $car->save();

            DB::commit();

            return redirect()->route('dashboard.car.index')->with('success', 'Car added successfully!');
        } catch (ValidationException $e) {
            DB::rollBack();
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to add car: ' . $e->getMessage())->withInput();
        }
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);
        return view('dashboard.car.show', compact('car'));
    }

    public function edit($id)
    {
        $car = Car::findOrFail($id);
        return view('dashboard.car.edit', compact('car'));
    }

    public function update(Request $request, $id)
    {
        try {
            $car = Car::findOrFail($id);

            $request->validate([
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

            // Update car attributes
            $car->name = $request->name;
            $car->price = $request->price;
            $car->age = $request->age;
            $car->kilometer_used = $request->kilometer_used;
            $car->condition = $request->condition;
            $car->fuel_efficiency = $request->fuel_efficiency;
            $car->fuel_type = $request->fuel_type;
            $car->safety_measurement = $request->safety_measurement;
            $car->warranty_showroom = $request->warranty_showroom;
            $car->warranty_store = $request->warranty_store;
            $car->type = $request->type;

            // Handle image upload if a new image is provided
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = $car->uuid . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images/cars'), $imageName);
                $car->image = 'images/cars/' . $imageName;
            }

            $car->save();

            DB::commit();

            return redirect()->route('dashboard.car.index')->with('success', 'Car updated successfully!');
        } catch (ValidationException $e) {
            DB::rollBack();
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to update car: ' . $e->getMessage())->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $car = Car::findOrFail($id);
            $car->delete();

            DB::commit();

            return redirect()->route('dashboard.car.index')->with('success', 'Car deleted successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to delete car: ' . $e->getMessage());
        }
    }
}
