<?php

namespace App\Livewire;

use App\Models\Note;
use Livewire\Attributes\On;
use Livewire\Component;

class UpdateNote extends Component
{
    public $id;
    public $title;
    public $text;
    public $editing = false;

    #[On('edit-note')]
    public function populate($id=null, $title=null, $text=null)
    {
        $this->editing = true;

        $this->id = $id;
        $this->title = $title;
        $this->text = $text;
    }

    public function close()
    {
        $this->editing = false;
    }

    public function save(Note $note)
    {
        $note->title = $this->title;
        $note->text = $this->text;
        $note->save();

        $this->editing = false;
        $this->dispatch('refresh-list');
    }

    public function render()
    {
        return view('livewire.update-note');
    }
}
