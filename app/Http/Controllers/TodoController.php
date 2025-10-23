<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::latest()->get();
        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'is_completed' => 'nullable'
        ]);

        // Handle checkbox - jika tidak dicentang, set false
        $validated['is_completed'] = $request->has('is_completed') ? true : false;
        
        // Jika sudah selesai, set waktu completed_at
        if ($validated['is_completed']) {
            $validated['completed_at'] = now();
        }

        Todo::create($validated);

        return redirect()->route('todos.index')
            ->with('success', 'ToDo berhasil dibuat!');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'is_completed' => 'nullable'
        ]);

        // Simpan status lama
        $wasCompleted = $todo->is_completed;
        
        // Handle checkbox
        $validated['is_completed'] = $request->has('is_completed') ? true : false;
        
        // Update completed_at berdasarkan perubahan status
        if ($validated['is_completed'] && !$wasCompleted) {
            // Baru dicentang sekarang
            $validated['completed_at'] = now();
        } elseif (!$validated['is_completed']) {
            // Diubah jadi belum selesai
            $validated['completed_at'] = null;
        }
        // Jika tetap completed, biarkan completed_at yang lama

        $todo->update($validated);

        return redirect()->route('todos.index')
            ->with('success', 'ToDo berhasil diperbarui!');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect()->route('todos.index')
            ->with('success', 'ToDo berhasil dihapus!');
    }
}