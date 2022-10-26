<x-main>
    <div class="container mx-auto bg-gray-100 h-screen">
        <x-navbar />

        <section class="mt-10">
            <h3 class="text-center normal-case text-4xl font-bold text-gray-900 mb-5">Debt List</h3>

            <div class="grid grid-cols-2 grid-flow-row gap-4 md:grid-cols-3 xl:grid-cols-4">
                <x-card name="Fany" debt="200Triliun"/>
                <x-card name="Fany" debt="201Triliun"/>
                <x-card name="Fany" debt="202Triliun"/>
                <x-card name="Fany" debt="203Triliun"/>
                <x-card name="Fany" debt="204Triliun"/>
                <x-card name="Fany" debt="205Triliun"/>
                <x-card name="Fany" debt="206Triliun"/>
                <x-card name="Fany" debt="207Triliun"/>
                <x-card name="Fany" debt="208Triliun"/>

            </div>
        </section>
    </div>
</x-main>

{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
