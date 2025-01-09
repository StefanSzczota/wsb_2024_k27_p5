<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dodaj komentarz do: ') }}{{ $beat->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Formularz do dodawania komentarza -->
                    <form action="{{ route('comment/store', $beat->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="comment">Twój komentarz</label>
                            <textarea class="form-control" name="comment" id="comment" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Dodaj komentarz</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>