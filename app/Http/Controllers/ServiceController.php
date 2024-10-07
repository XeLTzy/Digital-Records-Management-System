<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceType;
use App\Models\ServicePrice;

use Illuminate\Http\Request;

class ServiceController extends Controller
{

    // Retrieve all services with relationships
    public function index()
    {
        $services = Service::with('servicescategories.servicestypes.servicesprices')->orderBy('name', 'asc')->get();
        return view('admin.services', ['services' => $services]);
    }

    // Function to create a new service along with related entities
    public function createService(Request $request)
    {
        // Validate request
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'required|string|max:255',
            'type' => 'nullable|string|max:255',
            'price' => 'required|numeric',
        ]);

        // Inserting a new service
        $service = Service::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        // Inserting a service category related to this service
        $category = ServiceCategory::create([
            'service_id' => $service->id, // The foreign key
            'category' => $request->input('category'),
        ]);

        // Inserting a service type related to this category
        $type = ServiceType::create([
            'categories_id' => $category->id,
            'type' => $request->input('type'), // Make sure you're using the correct name
        ]);

        // Inserting a service price related to this type
        $price = ServicePrice::create([
            'type_id' => $type->id, // The foreign key
            'price' => $request->input('price'),
        ]);

        //uncomment in case needed to debug data inserted
        // return response()->json([
        //     'message' => 'Service, Category, Type, and Price added successfully!',
        //     'service' => $service,
        //     'category' => $category,
        //     'type' => $type,
        //     'price' => $price,
        // ], 201);

        // Redirect to a specific route (e.g., services index) with a success message
        return redirect()->route('services.index')->with('success', 'Service, Category, Type, and Price added successfully!');
    }

    public function edit($id)
    {
        // Retrieve the service and its related category, type, and price
        $service = Service::with('servicescategories.servicestypes.servicesprices')
            ->findOrFail($id);

        // Pass the service data to the edit view
        return view('admin.edit-service', ['service' => $service]);
    }

    public function updateService(Request $request, $id)
    {
        // Validate request data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'required|string|max:255',
            'type' => 'nullable|string|max:255',
            'price' => 'required|numeric',
        ]);

        // Find the existing service
        $service = Service::findOrFail($id);

        // Update service details
        $service->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        // Update related category
        $category = ServiceCategory::where('service_id', $id)->firstOrFail();
        $category->update([
            'category' => $request->input('category'),
        ]);

        // Update related type
        $type = ServiceType::where('categories_id', $category->id)->firstOrFail();
        $type->update([
            'type' => $request->input('type'),
        ]);

        // Update related price
        $price = ServicePrice::where('type_id', $type->id)->firstOrFail();
        $price->update([
            'price' => $request->input('price'),
        ]);

        // Redirect back to the services list with a success message
        return redirect()->route('services.index')->with('success', 'Service updated successfully!');
    }

    public function destroy($id)
    {
        // Find the service by ID
        $service = Service::findOrFail($id);

        // Delete related categories, types, and prices
        foreach ($service->servicescategories as $category) {
            foreach ($category->servicestypes as $type) {
                // Delete related prices
                $type->servicesprices()->delete();
                // Delete types
                $type->delete();
            }
            // Delete categories
            $category->delete();
        }

        // Delete the service
        $service->delete();

        // Redirect back to the services list with a success message
        return redirect()->route('services.index')->with('success', 'Service deleted successfully!');
    }

}
