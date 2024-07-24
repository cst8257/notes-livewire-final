<dialog @if($editing) open @endif  class="fixed inset-0 w-screen h-screen" style="background-color: rgba(0, 0, 0, 0.3);">
    <form class="bg-white rounded shadow p-6 w-full max-w-xl m-auto" wire:submit="save({{ $id }})">
        <div class="mb-3">
            <label class="block" for="title">Title</label>
            <input class="block w-full border-slate-300" id="title" name="title" wire:model="title">
        </div>
        <div class="form-group mb-3">
            <label class="block" for="text">Text</label>
            <textarea class="block w-full border-slate-300" id="text" name="text" wire:model="text"></textarea>
        </div>
        <div class="flex">
            <button type="submit" class="block bg-sky-500 text-white p-3 me-3 font-bold">Update Note</button>
            <button wire:click="close" type="button" class="block bg-slate-400 text-white p-3 font-bold">Cancel</button>
        </div>
    </form>
</dialog>