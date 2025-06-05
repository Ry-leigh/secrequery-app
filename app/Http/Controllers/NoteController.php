<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    // Display a list of notes
    public function index()
    {
        $notes = Note::latest()->get();
        return view('notes.index', compact('notes'));
    }

    // Show form to create a new note
    public function create()
    {
        return view('notes.create');
    }

    // Store a newly created note
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
        ]);

        Note::create($request->only('title', 'content'));

        return redirect()->route('notes.index')->with('success', 'Note created!');
    }

    // Display a single note
    public function show(Note $note)
    {
        return view('notes.show', compact('note'));
    }

    // Show form to edit a note
    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }

    // Update the note
    public function update(Request $request, Note $note)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
        ]);

        $note->update($request->only('title', 'content'));

        return redirect()->route('notes.index')->with('success', 'Note updated!');
    }

    // Delete the note
    public function destroy(Note $note)
    {
        $note->delete();

        return redirect()->route('notes.index')->with('success', 'Note deleted!');
    }
}

