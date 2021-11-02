<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold font-display text-xl text-himaraGold-500 leading-tight">
            Gallery
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight">
                Gallery Elements
            </h3>

            <x-table.table :columns="collect($galleries->first())->keys()" crud-uri="/dashboard/gallery/"
                :data-tables="$galleries" />

            <x-form.form />
            
        </div>
    </div>
</x-app-layout>