<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Table;
use App\Models\Reserve;
use Illuminate\Http\Request;

class ReserveController extends Controller
{
    public function index()
    {
        $reserve = Reserve::all();
        $customer = Customer::all();
        $table = Table::all();
        return view('reserve.index', compact('reserve', 'customer', 'table'));
    }
    
    public function exportPdf()
    {
        $reserve = Reserve::all();
        $customer = Customer::all();
        $table = Table::all();
        $pdf = PDF::loadView('pdf-export', compact('reserve', 'customer', 'table' ));
        return $pdf->download('reserve.index.pdf');
    }
    
    public function create()
    {
        $customer = Customer::all();
        $table = Table::all();
        return view('reserve.create', compact('customer', 'table' ));
    }
    
    public function store(Request $request)
    {
        Reserve::create($request->all());
        return redirect()->route('reserve.index')->with('success', 'Reserve added successfully');
    }
    
    public function show($id)
    {
        $reserve = Reserve::findOrFail($id);
        return view('reserve.show', compact('reserve'));
    }
    
    public function edit($id)
    {
        $reserve = Reserve::findOrFail($id);
        $customer = Customer::all();
        $table = Table::all();
        return view('reserve.edit', compact('reserve', 'customer', 'table' ));
    }
    
    public function update(Request $request, $id)
    {
        $reserve = Reserve::findOrFail($id);
        $reserve->update($request->all());
        return redirect()->route('reserve.index')->with('success', 'Reserve updated successfully');
    }
    
    public function destroy($id)
    {
        $reserve = Reserve::findOrFail($id);
        $reserve->delete();
        return redirect()->route('reserve.index')->with('success', 'Reserve deleted successfully');
    }
}    