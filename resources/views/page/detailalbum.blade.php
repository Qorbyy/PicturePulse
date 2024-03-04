@extends('layouts.master')
@section('content')
    <section class="mt-32">
        <div class="items-center max-w-screen-md mx-auto">
            <!-- <h3 class="text-5xl text-center font-hurricane">RyuKyu</h3> -->
        </div>
    </section>

    <section class="mt-10">
        <div class="max-w-screen-md mx-auto">
            <!-- Gunakan grid-cols-1 untuk tampilan mobile dan grid-cols-4 untuk tampilan desktop -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                @foreach ($fotos as $foto)
                    <div class="bg-white">
                        <div class="px-2">
                            <a href="/exploredetail/{{ $foto->id }}">
                                <div class="w-full bg-bgcolor2 overflow-hidden">
                                    <img src="{{ asset('/assets/' . $foto->url) }}" alt=""
                                        class="w-full transition duration-500 ease-in-out hover:scale-105">
                                </div>
                            </a>
                            <div class="flex flex-wrap items-center justify-between px-2 mt-2">
                                <div>
                                    <div class="flex flex-col">
                                        <div>
                                            {{ $foto->judul_foto }}
                                        </div>
                                        <div class="text-xs text-abuabu">
                                            {{ $foto->created_at }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
