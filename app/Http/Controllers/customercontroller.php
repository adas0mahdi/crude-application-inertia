<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\customer;
use Inertia\Inertia;

class customercontroller extends Controller
{
    public function index(){
        return Inertia::render('index',[
            'customers'=>customer::all()->map(function($customer){
                return [
                    'id'=>$customer->id,
                    'name'=>$customer->name
                ];
            })
        ]);
    }
    public function create(){
        return inertia::render('create');
    }

    public function store(Request $request){

        $validated=$request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|unique:customers',
            'phone'=>'required|unique:customers|max:14|min:10',
        ]);
            customer::create($validated);

            return Redirect::route('customers.index')->with('message', 'customer created sucessfully');
    }

    public function edit(customer $customer){
        return Inertia::render('edit', [
            'customer'=>$customer
        ]);
    }

    public function update(Request $request, customer $customer){
        $validated=$request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|',
            'phone'=>'required|max:14|min:10',
        ]);
        $customer->update($validated);
        return Redirect::route('customers.index')->with('message', 'customer edited succesfully');
    }

    public function destroy(customer $customer){
            
            $customer->delete();
            return Redirect::route('customers.index')->with('message', 'customer deleted succesfully');
    }
}
