<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;
use App\Models\Car;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


class CarApiController extends Controller
{

    public function index(Request $request)
    {
        $query = Car::query();
    
        // Filter by type
        if ($request->has('type') && $request->input('type') !== 'all') {
            $query->where('type', $request->input('type'));
        }
    
        // Filter by fuel type
        if ($request->has('fuel_type') && $request->input('fuel_type') !== 'all') {
            $query->where('fuel_type', $request->input('fuel_type'));
        }
    
        // Get filtered cars
        $cars = $query->get();
    
        return response()->json($cars, 200);
    }
    
    

    public function show($uuid)
    {
        try {
            $car = Car::where('uuid', $uuid)->firstOrFail();
            return response()->json($car, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Car not found'], 404);
        }
    }

    public function store(Request $request)
    {
        try {

            $validatedData = $request->validate([
                'name' => 'required|string',
                'price' => 'required|integer',
                'release_date' => 'required|date',
                'first_registration_date' => 'required|date',
                'kilometer_used' => 'required|integer',
                'fuel_efficiency' => 'required|integer',
                'fuel_type' => 'required|string|in:bensin,diesel,elektrik',
                'warranty_showroom' => 'required|date',
                'type' => 'required|string|in:manual,auto,semiauto',
                'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);
    
            DB::beginTransaction();
    
            $car = new Car();
            $car->uuid = Str::uuid(); // Generate UUID
            $car->fill($validatedData);
    
            if ($request->hasFile('image')) {
                $imageName = $request->image->hashName(); // Hash the image name
                $request->image->store('images/cars', 'public'); // Save to the 'public' disk
                $car->image = $imageName;
            }
            
    
            $car->save();
    
            DB::commit();
    
            return response()->json(['message' => 'Car added successfully!', 'car' => $car], 201);
        } catch (ValidationException $e) {
            DB::rollBack();
            return response()->json(['errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'Failed to add car: ' . $e->getMessage()], 500);
        }
    }
    
    public function update(Request $request, $uuid)
    {
        try {

            $validatedData = $request->validate([
                'name' => 'required|string',
                'price' => 'required|integer',
                'release_date' => 'required|date',
                'first_registration_date' => 'required|date',
                'kilometer_used' => 'required|integer',
                'fuel_efficiency' => 'required|integer',
                'fuel_type' => 'required|string|in:bensin,diesel,elektrik',
                'warranty_showroom' => 'required|date',
                'type' => 'required|string|in:manual,auto,semiauto',
                'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);
    
            DB::beginTransaction();
    
            $car = Car::where('uuid', $uuid)->firstOrFail();
    
            // Remove old image if new image is provided
            if ($request->hasFile('image')) {
                if ($car->image !== 'default.png') {
                    Storage::delete('public/images/cars/' . $car->image);
                }
                

                // Hash the new image name
                $imageName = $request->image->hashName();
                $request->image->store('images/cars', 'public');
                $car->image = $imageName;
            }
    
            $car->fill($validatedData);
            $car->save();
    
            DB::commit();
    
            return response()->json(['message' => 'Car updated successfully!', 'car' => $car], 200);
        } catch (ValidationException $e) {
            DB::rollBack();
            return response()->json(['errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'Failed to update car: ' . $e->getMessage()], 500);
        }
    }
    

    public function destroy($uuid)
    {
        try {
            DB::beginTransaction();
    
            $car = Car::where('uuid', $uuid)->firstOrFail();
    
            if ($car->image !== 'default.png') {
                Storage::delete('public/images/cars/' . $car->image);
            }
            
    
            // Delete the car record
            $car->delete();
    
            DB::commit();
    
            return response()->json(['message' => 'Car deleted successfully!'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'Failed to delete car: ' . $e->getMessage()], 500);
        }
    }
    
}
