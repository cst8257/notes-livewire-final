<div class="flex flex-wrap">
    <!-- NOTE TEMPLATE -->
    @foreach ($notes as $note)
    <div class="basis-1/3 p-6">
        <div class="bg-white rounded shadow p-6">
            <div class="mb-5">
                <h2 class="text-lg font-bold">{{ $note->title }}</h2>
                <p>{{ $note->text }}</p>
            </div>
            <button wire:click="edit({{ $note->id }})" class="block w-full bg-sky-500 text-white p-3 font-bold mb-5">Edit Note</button>
            <button wire:click="delete({{ $note->id }})" class="block w-full bg-red-600 text-white p-3 font-bold">Delete Note</button>
        </div>
    </div>
    @endforeach
    <!-- NOTE TEMPLATE -->
</div>