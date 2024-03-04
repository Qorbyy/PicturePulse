@extends('layouts.master')
@push('cssjsexternal')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@endpush
@section('content')
    <section class="mt-32">
        <div class="items-center max-w-screen-md mx-auto ">
            <!-- <h3 class="text-5xl text-center font-hurricane">YuKyu</h3> -->
        </div>
    </section>
    <section>
        <div class="flex flex-col items-center max-w-screen-md px-2 mx-auto mt-32">
            <div class="overflow-hidden">
                <img src="" alt="" class="w-28 h-28 rounded-full" id="fotoprofile">
            </div>
            <a href="profil.html">
                <h3 class="text-xl font-semibold" id="nama">
                    admin
                </h3>
            </a>
            <small class="text-xs" id="bio">In this link, I present my services as well as all the tools that help me
                in
                drawing</small>
            <div class="flex flex-row mt-3">
                <a href="/profil"><button class="font-fontutama px-5 py-1 text-white rounded bg-blue-900">Edit
                        Profile</button></a>
            </div>
            <div class="flex flex-row mt-3">
                {{-- <small class="mr-4 text-abuabu">1000 follower</small>
            <small class="text-abuabu">6 following</small> --}}
            </div>
        </div>
    </section>
    <section class="mt-10">
        <div class="max-w-screen-md mx-auto">
            <div class="flex flex-wrap items-center flex-container" id="dataprofil">
            </div>
        </div>
        </div>
    </section>
@endsection
@push('footerjsexternal')
    <script src="/javascript/profil.js"></script>
@endpush
