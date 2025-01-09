<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Żeby kupić bit, napisz komentarz. W komentarzu napisz jakie prawa do bitu chcesz wykupić. Na komentarz odpowiemy mailowo.
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <hr />
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @forelse ($beats as $beats)
                        <div class="col">
                            <div class="card h-100">
                                <iframe class="card-img-top" width="100%" height="150"
                                    src="{{ $beats->ytlink }}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                </iframe>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $beats->title }}</h5>
                                    <p class="card-text">{{ $beats->info }}</p>
                                    <p class="card-text"><strong>Price:</strong> {{ $beats->price }}</p>
                                    <a href="{{ route('comment/create', $beats->id) }}" class="btn btn-primary">Dodaj komentarz</a>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col">
                            <p class="text-center">Product not found</p>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>