<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        // $orders = Order::all();
        return view('test');
    }


    public function create()
    {
        return view('create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'date_in' => 'required',
            'from_dep' => 'required',
            'to_dep' => 'required',
            'needed' => 'required',
            'week' => 'required',
            'item' => 'required',
            'jenis' => 'required',
            'jumlah' => 'required',
            'problem' => 'required',
            'maker' => 'required',
        ]);
        Order::create($request->all());
        return redirect()->back()->with('success', 'Add Succesfully!');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
