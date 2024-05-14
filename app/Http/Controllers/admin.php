<?php

namespace App\Http\Controllers;
use App\Models\Car;
use Illuminate\Http\Request;

class admin extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.admin');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //

        $imageName = time().'.'.$request->image->extension();

$request->image->move(public_path('phones'), $imageName);
        $car = new Car;
        $car->title=$request->title;
        $car->price=$request->price;
        $car->image=$imageName;
        $car->save();
        return redirect()->route('show')->with([
            'success' => 'successfully',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $car= Car::all();
    //     return view('Products' ,compact('car'));
    // }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $car=Car::all();
        return view('admin.show',compact('car'));
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //

        Car::find($id)->delete();
        return redirect()->back();

    }
}
