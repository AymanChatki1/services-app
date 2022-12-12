<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function index() {
        $services=Service::all();
        return view('services.index', compact('services'));
    }
    public function create() {
        return view('services.create');
    }
    public function stock(Request $request) {
        $request->validate([
            'nom'=>'required|min:2',
            'description'=>'required'

        ]);
        $service = new Service();
        $service->name=$request->nom;
        $service->description = $request->description;
        $service->save();
        return redirect()->route('services.index');
    }
    public function edit($id) {
        $service = Service::find($id);
        return view('services.edit', compact('service'));
    }
    public function update(Request $request, $id) { 
        $request->validate([
            'nom'=>'required|min:2',
            'description'=>'required'
        ]);
        $service=Service::find($id);
        $service->name=$request->nom;
        $service->description = $request->description;
        $service->save();
        return redirect()->route('services.index');
        }

    public function delete($id) {
        Service::destroy($id);
        return back();
    }
}
