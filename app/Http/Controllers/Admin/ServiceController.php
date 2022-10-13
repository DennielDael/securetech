<?php

namespace App\Http\Controllers\Admin;

use App\Models\service;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

class ServiceController extends Controller
{


    public function details(): View
    {   
        $services = Service::orderBy('id','desc')->paginate(10);
        return view('details', compact('services'));
    }

    public function offerservice(): View
    {   

        $services = Service::orderBy('id','desc')->paginate(10);
        return view('offerservice', compact('services'));
    }
        

    public function index(): View
    {
        
        $services = Service::orderBy('id','desc')->paginate(10);
        return view('admin.services.index', compact('services'));

        

    }

    public function create(): View
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
       

        $services = new Service;
        $services->service_name = $request->service_name;
        $services->code_name= $request->code_name;
        $services->specification_description = $request->specification_description;
        $services->quantity = $request->quantity;
        $services->unit_price = $request->unit_price;
        $services->price = $request->price;
        $services->save();
        return redirect()->route('admin.services.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    public function show(service $service): View
    {
        return view('admin.services.show', compact('service'));
    }

    public function edit(service $service): View
    {

        return view('admin.services.edit', compact('service'));
    }

    public function update(service $service)
    {
        $service->update();

        return redirect()->route('admin.services.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(service $service): RedirectResponse
    {
        $service->delete();

        return back()->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }
}
