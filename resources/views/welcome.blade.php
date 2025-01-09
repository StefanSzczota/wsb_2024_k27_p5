<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Witaj na stronie!') }}
        </h2>
        <a href="{{ route('register')}}" type="button" class="btn btn-secondary">Rejestracja</a>
        <a href="{{ route('login')}}" type="button" class="btn btn-secondary">Login</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-8">
                <div class="p-6 text-gray-900">
                    <h1 class="text-4xl font-bold text-center mb-8">Witaj!</h1>
                    <p class="text-center mb-8">Zapraszamy do rejestracji i przejrzenia oferty bitów na stronie.</p>
                    <!-- <a href="{{ route('register') }}" type="button" class="btn btn-secondary w-100">Rejestracja</a> -->
                    <!-- <a href="{{ route('register')}}" type="button" class="btn btn-secondary">Rejestracja</a> -->
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="row row-cols-1 row-cols-md-3 g-4">

                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ asset('images/zdj1.jpg') }}" alt="zdj1" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Jazz&Rap Kevlar52&Jcoe</h5>
                                    <p class="card-text">Projekt muzyczny w całości wyprodukowany przez Jcoe, członka zespołu WW12 odpowiedzialnego za produkcje muzyczną </p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ asset('images/zdj1.jpg') }}" alt="zdj1" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Jazz&Rap Kevlar52&Jcoe</h5>
                                    <p class="card-text">Projekt muzyczny w całości wyprodukowany przez Jcoe, członka zespołu WW12 odpowiedzialnego za produkcje muzyczną </p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ asset('images/zdj1.jpg') }}" alt="zdj1" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Jazz&Rap Kevlar52&Jcoe</h5>
                                    <p class="card-text">Projekt muzyczny w całości wyprodukowany przez Jcoe, członka zespołu WW12 odpowiedzialnego za produkcje muzyczną </p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ asset('images/zdj1.jpg') }}" alt="zdj1" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Jazz&Rap Kevlar52&Jcoe</h5>
                                    <p class="card-text">Projekt muzyczny w całości wyprodukowany przez Jcoe, członka zespołu WW12 odpowiedzialnego za produkcje muzyczną </p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ asset('images/zdj1.jpg') }}" alt="zdj1" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Jazz&Rap Kevlar52&Jcoe</h5>
                                    <p class="card-text">Projekt muzyczny w całości wyprodukowany przez Jcoe, członka zespołu WW12 odpowiedzialnego za produkcje muzyczną </p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
