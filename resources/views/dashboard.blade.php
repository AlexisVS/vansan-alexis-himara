<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold font-display text-xl text-himaraGold-500 leading-tight">
            Dashboard
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-table.table :columns="collect($rooms->first())->keys()" :data-tables="$rooms" />
        </div>
    </div>
</x-app-layout>