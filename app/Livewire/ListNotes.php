<?php

namespace App\Livewire;

use App\Models\Note;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class ListNotes extends Component
{
    public $notes;

    public function delete(Note $note)
    {
        $note->delete();
    }

    public function edit(Note $note)
    {
        $this->dispatch('edit-note', id: $note->id, title: $note->title, text: $note->text);
    }

    #[On('refresh-list')]
    public function render()
    {
        $this->notes = Auth::user()->notes->reverse()->all();
        return view('livewire.list-notes');
    }
}
