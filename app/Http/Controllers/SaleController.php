<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Http\Request;
use Flasher\Prime\FlashentrIerface;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sales = Sale::latest()->paginate(5);
        // dd($sales);
        return view('sales.index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $sale = $request->validate([
            'title' => 'required|string|min:5',
            'body' => 'required|string'
        ]);
        Sale::create($sale);
        flash('Data has been saved successfully!') ;// laravel helper function
        return redirect('/sales')->with('success', 'Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        //
        dd($sale);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        //
        return view('sales.edit', compact('sale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        //
        // $sale = Sale::find($id);
      $attributes=  $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        $sale->update($attributes);
        flash('Record Update Successfully');
        return redirect('/sales')->with('info', 'Record Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        //
              $sale->delete();
        Flasher::addError('Record Deleted Successfully');
        return redirect()->back()->with('error','deleted');
    }
}
