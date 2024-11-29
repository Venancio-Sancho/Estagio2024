<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Table;
use App\Models\Reserve;
use Illuminate\Http\Request;
use PDF;
class ReserveController extends Controller
{
    public function index()
    {
        $reserve = Reserve::all();
        $user = User::all();
        $table = Table::all();
        return view('reserve.index', compact('reserve', 'user', 'table'));
    }

    public function exportPdf (){
        $reserve = Reserve::all();
        $user = User::all();
        $table = Table::all();
        $pdf = PDF ::loadview ('pdf-export', compact('reserve', 'user', 'table'));
        return $pdf->download('reserve.index.pdf');

       // return view('pdf-export', compact('reserve', '', 'table'));
    }
    
    
    public function create()
    {
        $user = User::all();
        $table = Table::all();
        return view('reserve.create', compact('user', 'table' ));
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
        $user = User::all();
        $table = Table::all();
        return view('reserve.edit', compact('reserve', 'user', 'table' ));
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