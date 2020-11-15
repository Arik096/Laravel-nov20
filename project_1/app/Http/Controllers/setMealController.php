<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meal;

class setMealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meals = Meal::all();
        return view('Meal.index',['meals'=>$meals]);
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'name' => 'required|String',
        'date' => 'required|date',
        'breakfast' => 'required|Boolean',
        'lunch' => 'required|Boolean',
        'dinner' => 'required|Boolean'
        ]);

        $meal = new Meal([
            'name' => $request->get('name'),
            'date' => $request->get('date'),
            'breakfast' => $request->get('breakfast'),
            'lunch' => $request->get('lunch'),
            'dinner' => $request->get('dinner')
        ]);

        $meal->save();
        return redirect()->back()->with('message','Meal Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meals = Meal::find($id);
        //delete
        $meals->delete();
        return redirect()->back()->with('message','Meal Deleted');
    }
}
