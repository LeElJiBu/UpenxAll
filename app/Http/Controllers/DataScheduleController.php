<?php
namespace App\Http\Controllers;

use App\Models\DataSchedule;
use Illuminate\Http\Request;

class DataScheduleController extends Controller
{
    public function index()
{
    $records = DataSchedule::all(); // Obtén todos los registros
    return view('schedule', compact('records')); // Pasa los registros a la vista llamada 'schedule'
}

    public function create()
    {
        return view('schedule-log');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'fecha' => 'required|date',
        'lugar' => 'required|string|max:250',
        'descripcion' => 'required|string',
    ]);

    $event = DataSchedule::create($validated);


    return redirect()->route('schedule');
}

public function show(DataSchedule $dataSchedule)
{
    return view('data-schedules.show', compact('dataSchedule'));
}

    public function edit(DataSchedule $dataSchedule)
    {
        return view('data-schedules.edit', compact('dataSchedule'));
    }

    public function update(Request $request, DataSchedule $dataSchedule)
    {
        $validated = $request->validate([
            'fecha' => 'required|date',
            'lugar' => 'required|string|max:255',
            'descripcion' => 'required|string',
        ]);
    
        $dataSchedule->update($validated); 
    
        return redirect()->route('schedule');
    }

    public function destroy(DataSchedule $dataSchedule)
    {
        $dataSchedule->delete();
        return redirect()->route('schedule');
    }
}
