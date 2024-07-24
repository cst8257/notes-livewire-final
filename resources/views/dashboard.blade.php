<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <style>dialog[open] {display: grid;}</style>

    <div class="max-w-7xl mx-auto">
        <!-- CREATE NOTE FORM -->
        <livewire:create-note />
        <!-- CREATE NOTE FORM -->

        <!-- NOTE LIST --> 
        <livewire:list-notes />
        <!-- NOTE LIST --> 
        
    </div>

    <!-- UPDATE NOTE FORM -->
    <livewire:update-note />
    <!-- UPDATE NOTE FORM -->
</x-app-layout>
