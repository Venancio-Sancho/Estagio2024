<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tables = Table::where('status', 'disponivel')->get();
        return view('table.index', compact('tables'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('table.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Table::create($request->all());
    
        return redirect()->route('table.index')->with('success', 'Mesa adicionada com sucesso');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Table $table)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $table = Table::findOrFail($id);
    
        return view('table.edit', compact('table'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $table = Table::findOrFail($id);
    
        $table->update($request->all());
    
        return redirect()->route('table.index')->with('success', 'Mesa atualizada com sucesso');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $table = Table::findOrFail($id);
    
        $table->delete();
    
        return redirect()->route('table.index')->with('success', 'Mesa excluída com sucesso');
    }
    
    }
