<x-main>
    <div class="container mx-auto h-screen">
        <x-navbar />

        <section class="mt-4">
            @if($data->isEmpty())
            <div class="mx-auto text-center mt-[50%] md:mt-[40%] lg:mt-[20%]">
                <h1 class="text-5xl font-bold">No One Debts To You</h1>
                <p class="text-xl py-6">either you have no money, or you're just a stingy person &#128541</p>
            </div>
            @else
                <div class="mb-8">
                    <h3 class="normal-case text-4xl font-bold text-gray-900">Debt List</h3>
                    <h6 class="normal-case text-xl font-semibold text-gray-900">Here is the people that has debts to you.</h6>
                </div>

                <div class="grid grid-cols-2 grid-flow-row gap-4 md:grid-cols-3 xl:grid-cols-4">
                    @foreach ($data as $d)
                        <x-card
                            name="{{ $d->name }}"
                            amount="{{ $d->amount }}"
                            linkto="{{ route('debt.show', ['debt' => $d->did]) }}"
                        />
                    @endforeach
                </div>
            @endif

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
