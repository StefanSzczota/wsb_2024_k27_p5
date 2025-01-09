<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Szczegóły bitu: ') }}{{ $beat->title }}
            Żeby kupić bit, napisz komentarz. W komentarzu napisz jakie prawa do bitu chcesz wykupić. Na komentarz odpowiemy mailowo.
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3>{{ $beat->title }}</h3>
                    <p>{{ $beat->info }}</p>
                    <p>Cena: {{ $beat->price }}</p>
                    <a href="{{ route('comment/create', $beat->id) }}" class="btn btn-primary">Dodaj komentarz</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>