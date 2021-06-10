<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all()->toJson();
        $cars = json_decode($cars);

        return view('cars.index', [
            'cars' => $cars
        ]);
        
        // $cars = Car::chunk(2, function ($cars) {
        //     foreach($cars as $car) {
        //         print_r($car);
        //     }
        // });

        // $cars = Car::chunk(2, function ($cars) {

        // }
        // $cars = Car::all();

        // return view('cars.index', [
        //     'cars' => $cars
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return create view
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // 1st way to store cars to db

        // $car = new Car;

        // $car->name = $request->input('name');
        // $car->founded = $request->input('founded');
        // $car->description = $request->input('description');

        // // save the data to database
        // $car->save();

        // return redirect('/cars');

        // 2nd way to store cars on the db
        
        $car = Car::create([
            'name' => $request->input('name'),
            'founded' => $request->input('founded'),
            'description' => $request->input('description')
        ]);

        return redirect('/cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view
        $car = Car::find($id);
        // dd($car);
        return view('cars.show')->with('car', $car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // get the value of car based on the id
        $car = Car::find($id);

        return view('cars.edit')->with('car', $car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // update the car based on the passed $id
        
        $car = Car::where('id', $id)->update([
            'name' => $request->input('name'),
            'founded' => $request->input('founded'),
            'description' => $request->input('description')
        ]);

        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        // delete row (1st way)
        // $car = Car::find($id);    
        
        // delete row (2nd way) - change $id to Car $car
        $car->delete();

        // redirect to cars page
        return redirect('/cars');
    }
}
