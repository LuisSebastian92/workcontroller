<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('services.index',['services' => $services]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = new Service();
        return view('services.create' , $services);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $services = new Service();
        $services = $request->all();
        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $service_id)
    {
        $service = Service::findOrFail($service_id);
        return view('services.show',['service'=>$service]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $service_id)
    {
        $service = Service::findOrFail($service_id);
        return view('services.edit',['service'=>$service]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $service_id)
    {
        $service = Service::findOrFail($service_id);
        $service->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $service_id)
    {
        $service=Service::find($service_id);
        $service->destroy();

    }
}
