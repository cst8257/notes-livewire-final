<div class="m-6">
    <div class="bg-white my-3 p-12 rounded shadow">
        <h2 class="font-bold mb-3 text-lg">New Note</h2>
        <form method="post" wire:submit="save">
            <div class="mb-3">
                <label class="block" for="title">Title</label>
                <input class="block w-full border-slate-300" id="title" name="title" wire:model="title">
            </div>
            <div class="form-group mb-3">
                <label class="block" for="text">Text</label>
                <textarea class="block w-full border-slate-300" id="text" name="text" wire:model="text"></textarea>
            </div>
            <button class="bg-sky-500 text-white p-3 font-bold">Add Note</button>
        </form>
    </div>
</div>