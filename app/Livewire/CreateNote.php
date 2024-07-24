<?php

namespace App\Livewire;

use App\Models\Note;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateNote extends Component
{
    public $title;
    public $text;

    public function save()
    {
        $note = new Note();
        $note->title = $this->title;
        $note->text = $this->text;
        $note->user_id = Auth::id();
        $note->save();

        $this->reset();
        $this->dispatch('refresh-list');
    }

    public function render()
    {
        return view('livewire.create-note');
    }
}
